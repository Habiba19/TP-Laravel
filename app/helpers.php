<?php
use App\Helpers\MarkdownService;

if (! function_exists('parse')) {
    function parse($file) {
        $var = MarkdownService::parse($file);
        return $var;
    }
}
