<?php
$html = file_get_contents('http://127.0.0.1:8080/shop/');
if (!$html) {
    file_put_contents('scratch_output.txt', "Failed to fetch shop page.");
    exit;
}

$output = "";

// Extract woocommerce-before-shop-loop-bar content properly by counting div tags
$pos = strpos($html, '<div class="woocommerce-before-shop-loop-bar">');
if ($pos !== false) {
    $start = $pos;
    $depth = 1;
    $i = $pos + strlen('<div class="woocommerce-before-shop-loop-bar">');
    while ($depth > 0 && $i < strlen($html)) {
        if (substr($html, $i, 4) === '<div') {
            $depth++;
            $i += 4;
        } elseif (substr($html, $i, 6) === '</div') {
            $depth--;
            $i += 6;
        } else {
            $i++;
        }
    }
    $output .= "--- Full Loop Bar Content ---\n" . substr($html, $start, $i - $start) . "\n\n";
} else {
    $output .= "woocommerce-before-shop-loop-bar not found.\n\n";
}

// Find any pagination
$pos = strpos($html, '<div class="woocommerce-pagination">');
if ($pos === false) {
    $pos = strpos($html, '<nav class="woocommerce-pagination">');
}
if ($pos !== false) {
    $start = $pos;
    $depth = 1;
    $tag = substr($html, $pos, 4) === '<nav' ? 'nav' : 'div';
    $i = $pos + strlen("<$tag");
    while ($depth > 0 && $i < strlen($html)) {
        if (substr($html, $i, 1 + strlen($tag)) === "<$tag") {
            $depth++;
            $i += 1 + strlen($tag);
        } elseif (substr($html, $i, 2 + strlen($tag)) === "</$tag") {
            $depth--;
            $i += 2 + strlen($tag);
        } else {
            $i++;
        }
    }
    $output .= "--- Pagination Content ---\n" . substr($html, $start, $i - $start) . "\n\n";
}

file_put_contents('scratch_output.txt', $output);
echo "Written to scratch_output.txt\n";
