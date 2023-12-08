<?php
namespace App\Http;

class Kernel {
    private $page;
    private $controllerName;

    public function handle() {
        // Load the current page/controller
        $this->page = $_REQUEST['p'];
        $this->controllerName = 'App\\Http\\Controllers\\' . ucfirst($this->page) . "Controller";

        // Look for matching class?
        if (class_exists("$this->controllerName")) {
             $pageController = new $this->controllerName;

             // Run the controller handle method
             $template = $pageController->handle();

             // Output the template rendering
             echo $template->render();
        } else {
            print "Not found controller ($this->controllerName)";
        }
    }
}