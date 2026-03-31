<?php
// 1. CLEAN BUFFER (Prevents XML errors)
ob_start();
require_once __DIR__ . '/inc/lang.php';
ob_end_clean(); 

// 2. SECURITY: Define Allowed Subdomains
$allowed_langs = ['ar', 'fr', 'zh-cn', 'it', 'ja', 'pt', 'ru', 'es', 'th', 'vi'];

$host = $_SERVER['HTTP_HOST'];
$parts = explode('.', $host);
$current_sub = $parts[0];
$is_main_domain = (count($parts) === 2);

if (!$is_main_domain && !in_array($current_sub, $allowed_langs)) {
    header("HTTP/1.1 404 Not Found");
    echo "404 - Invalid Language Subdomain";
    exit;
}

// 3. Set Header
header('Content-Type: application/xml; charset=UTF-8');

// 4. Determine Dynamic Base URL
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$base_url = $scheme . '://' . $host;

// 5. HELPER: Extract path from URL
function get_clean_path($url) {
    if (preg_match('#^https?://#i', $url)) {
        $parsed = parse_url($url);
        return $parsed['path'] ?? '/';
    }
    return '/' . ltrim($url, '/');
}

// 6. Load Backup File
$bak_file = __DIR__ . '/sitemap.xml.bak';

if (!file_exists($bak_file)) {
    http_response_code(500);
    echo 'Error: sitemap.xml.bak is missing.';
    exit;
}

$xml_content = file_get_contents($bak_file);

// 7. REPLACE LOGIC - Process entire <url> blocks to preserve lastmod, changefreq, priority
// This regex captures the complete <url>...</url> block with all child elements
$final_xml = preg_replace_callback(
    '/<url>\s*<loc>(.*?)<\/loc>(.*?)<\/url>/s',
    function ($matches) use ($base_url) {
        $original_url = $matches[1];
        $remaining_elements = $matches[2]; // Everything after </loc> (lastmod, changefreq, priority, etc.)
        
        // Extract only the path from the URL
        $path = get_clean_path($original_url);
        
        // Reconstruct the new URL with the current domain
        $new_url = $base_url . $path;
        
        // Return the complete <url> block with new domain but UNCHANGED lastmod, changefreq, priority
        return '<url>' . "\n    " . '<loc>' . htmlspecialchars($new_url, ENT_XML1) . '</loc>' . $remaining_elements . '</url>';
    },
    $xml_content
);

echo $final_xml;
?>