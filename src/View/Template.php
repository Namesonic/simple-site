<?php

namespace App\View;

class Template {
    private $title;

    const DEFAULT_TEMPLATE = 'public';

    private $body;
    public function __construct($page) {
        $this->load($page);
    }

    public function load($templateName) {
        $filename = '../resources/views/' . $templateName . '.php';
        if (file_exists($filename)) {
            if (!$this->body = file_get_contents($filename)) {
                die('failed to get page template' . $filename);
            }
        } else {
            header("HTTP/1.0 404 Not Found");
            $this->body = file_get_contents('../resources/errordocs/404.php');
        }
    }

    public function render($templateName = self::DEFAULT_TEMPLATE) {
        // Place page into template body
        $output = file_get_contents('../resources/layouts/' . $templateName . '.php');
        $output = preg_replace("/\{\{ body }}/", $this->body, $output);

        // Replace additional variables
        $output = preg_replace("/\{\{ title }}/", $this->title, $output);

        $matches = [];
        preg_match_all('/\{\{\s+(.*?)\s+}}/m', $this->body, $matches);
        print_r($matches);

        return $output;
    }
}
