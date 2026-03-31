import json
import os
import time
import threading
from queue import Queue
from googletrans import Translator

# --------------------------- CONFIG --------------------------- #
LANGUAGES = {
    "th": "Thai",
}

BATCH_SIZE = 10
SLEEP_AFTER_BATCH = 1.5
MAX_THREADS = 3
SAVE_EVERY_BATCHES = 5
CACHE_FOLDER = "A_cache_files"
OUTPUT_FOLDER = "A_translated_jsons"
# -------------------------------------------------------------- #

translator = Translator()

def safe_load_json(path):
    if not os.path.exists(path):
        return {}
    with open(path, "r", encoding="utf-8-sig") as f:
        return json.load(f)

def safe_save_json(path, data):
    dirname = os.path.dirname(path)
    if dirname and not os.path.exists(dirname):
        os.makedirs(dirname, exist_ok=True)
    with open(path, "w", encoding="utf-8-sig") as f:
        json.dump(data, f, ensure_ascii=False, indent=2)

def load_cache(lang_code):
    os.makedirs(CACHE_FOLDER, exist_ok=True)
    path = os.path.join(CACHE_FOLDER, f"{lang_code}_cache.json")
    return safe_load_json(path)

def save_cache(lang_code, cache):
    path = os.path.join(CACHE_FOLDER, f"{lang_code}_cache.json")
    safe_save_json(path, cache)

def translate_batch(batch, dest_lang, cache):
    results = []
    pending = []
    for text in batch:
        if text in cache:
            results.append(cache[text])
            continue
        for attempt in range(5):
            try:
                translated = translator.translate(text, dest=dest_lang).text
                cache[text] = translated
                results.append(translated)
                break
            except Exception as e:
                print(f"⚠ Error on '{text}' attempt {attempt+1}: {e}")
                pending.append(text)
                time.sleep(2 * (attempt + 1))
        else:
            results.append(text)
    return results, pending

def process_language(lang_code, en_data):
    os.makedirs(OUTPUT_FOLDER, exist_ok=True)
    output_file = os.path.join(OUTPUT_FOLDER, f"{lang_code}.json")

    translated_data = safe_load_json(output_file)
    cache = load_cache(lang_code)

    for k, v in translated_data.items():
        cache.setdefault(en_data[k], v)

    keys = list(en_data.keys())
    total = len(keys)
    batch_counter = 0

    for i in range(0, total, BATCH_SIZE):
        batch_keys = keys[i:i+BATCH_SIZE]
        if all(k in translated_data for k in batch_keys):
            continue

        batch_values = [en_data[k] for k in batch_keys]
        translated_values, pending = translate_batch(batch_values, lang_code, cache)

        for k, val in zip(batch_keys, translated_values):
            translated_data[k] = val

        batch_counter += 1
        if batch_counter % SAVE_EVERY_BATCHES == 0 or i + BATCH_SIZE >= total:
            safe_save_json(output_file, translated_data)
            save_cache(lang_code, cache)
            if pending:
                print(f"⏳ Pending retry lines ({len(pending)}): {pending}")
            print(f"{lang_code}: {len(translated_data)} / {total} translated (saved)")

        time.sleep(SLEEP_AFTER_BATCH)

    safe_save_json(output_file, translated_data)
    save_cache(lang_code, cache)
    print(f"✔ Completed: {lang_code}")

def thread_worker(lang_queue, en_data):
    while not lang_queue.empty():
        lang = lang_queue.get()
        print(f"\n🔵 Starting {lang} ({LANGUAGES[lang]})")
        process_language(lang, en_data)
        lang_queue.task_done()

def main():
    en_data = safe_load_json("sitemap_k.json")
    lang_queue = Queue()
    for lang in LANGUAGES:
        lang_queue.put(lang)

    threads = []
    for _ in range(min(MAX_THREADS, len(LANGUAGES))):
        t = threading.Thread(target=thread_worker, args=(lang_queue, en_data))
        t.start()
        threads.append(t)

    lang_queue.join()
    print("\n🎉 All languages fully translated!")

if __name__ == "__main__":
    main()
