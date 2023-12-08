<?php

namespace App\View;

class Template {
    private string $title = '';
    const DEFAULT_TEMPLATE = 'public';
    private View $view;

    /**
     * @param $page
     * @param array $vars
     */
    public function __construct(View $view) {
        $this->view = $view;
    }

    public function render($templateName = self::DEFAULT_TEMPLATE): array|string|null
    {
        // Get current layout
        $output = file_get_contents('../resources/layouts/' . $templateName . '.php');

        // Place page into template body
        $output = preg_replace("/\{\{ body }}/", $this->view->getBody(), $output);

        // Replace additional variables
        return preg_replace("/\{\{ title }}/", $this->title ?: '', $output);
    }
}
