<?php
use App\Helpers\MarkdownService;
use App\Providers\AppServiceProvider;
if (! function_exists('parse')) {
    function parse($file) {
        $var = MarkdownService::parse($file);
        return $var;
    }
}

