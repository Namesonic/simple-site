<?php

namespace App\View;

class Template {
    private $title;

    private $vars = [];

    const DEFAULT_TEMPLATE = 'public';

    private $body;

    /**
     * @param $page
     * @param array $vars
     */
    public function __construct($page, array $vars = []) {
        $this->load($page);
        $this->vars = $vars;
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
        // Replace body variables
        $matches = [];
        preg_match_all('/\{\{\s+(.*?)\s+}}/m', $this->body, $matches);
        foreach ($matches[1] as $match) {
            $replace = '';
            if (isset($this->vars[$match]) ) {
                $replace = $this->vars[$match];
            }
            $this->body = str_replace("{{ $match }}", $replace, $this->body);
        }

        // Get current layout
        $output = file_get_contents('../resources/layouts/' . $templateName . '.php');

        // Place page into template body
        $output = preg_replace("/\{\{ body }}/", $this->body, $output);

        // Replace additional variables
        return preg_replace("/\{\{ title }}/", $this->title, $output);
    }
}
