import json
import time
import os
from deep_translator import GoogleTranslator

# CONFIGURATION
source_file = 'sitemap_k.json'
output_dir = 'lang_output'  # Folder to save new files
batch_size = 50             # Translate 50 keys at a time to be safe
sleep_time = 1.5            # Seconds to wait between batches (Prevents banning)

# Target Languages (Folder names / ISO codes)
languages = {
    'ar': 'ar',       # Arabic
    'fr': 'fr',       # French
    'ru': 'ru',       # Russian
    'it': 'it',       # Italian
    'es': 'es',       # Spanish
    'pt': 'pt',       # Portuguese
    'ja': 'ja',       # Japanese
    'th': 'th',       # Thai
    'vi': 'vi',       # Vietnamese
    'zh-cn': 'zh-CN'  # Chinese (Simplified)
}

# Create output directory if not exists
if not os.path.exists(output_dir):
    os.makedirs(output_dir)

# Load Source Keys
print(f"📂 Loading source file: {source_file}...")
with open(source_file, 'r', encoding='utf-8') as f:
    source_data = json.load(f)

keys_list = list(source_data.keys())
total_keys = len(keys_list)

print(f"✅ Loaded {total_keys} keys to translate.")

# ---------------------------------------------------------
# TRANSLATION LOOP
# ---------------------------------------------------------
for file_code, iso_code in languages.items():
    target_file = f"{output_dir}/{file_code}.json"
    
    # Check if file already exists (Resume capability)
    translated_data = {}
    if os.path.exists(target_file):
        with open(target_file, 'r', encoding='utf-8') as f:
            translated_data = json.load(f)
        print(f"🔄 Resuming {file_code} ({len(translated_data)} already done)...")
    else:
        print(f"🚀 Starting translation for: {file_code} ({iso_code})...")

    # Initialize Translator
    translator = GoogleTranslator(source='en', target=iso_code)

    # Process in batches
    for i in range(0, total_keys, batch_size):
        batch_keys = keys_list[i:i+batch_size]
        
        # Filter out keys already translated
        batch_to_do = [k for k in batch_keys if k not in translated_data]
        
        if not batch_to_do:
            continue

        try:
            # Bulk translation (faster than one by one)
            translated_batch = translator.translate_batch(batch_to_do)
            
            # Update our data dictionary
            for key, val in zip(batch_to_do, translated_batch):
                translated_data[key] = val
            
            # Save progress immediately (so you don't lose data if script stops)
            with open(target_file, 'w', encoding='utf-8') as f:
                json.dump(translated_data, f, indent=4, ensure_ascii=False)
            
            print(f"   [{file_code}] Progress: {len(translated_data)}/{total_keys} keys...")
            
            # Sleep to respect API limits
            time.sleep(sleep_time)

        except Exception as e:
            print(f"❌ Error on batch starting at {i}: {e}")
            print("   Waiting 10 seconds before retrying...")
            time.sleep(10)

    print(f"✅ Finished {file_code}.json\n")

print("🎉 ALL LANGUAGES COMPLETED!")