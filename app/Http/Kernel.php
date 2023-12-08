<?php
namespace App\Http;

class Kernel {
    private string $page;
    private string $controllerName;

    public function handle(): void
    {
        // Load the current page/controller
        if (isset($_REQUEST['p'])) {
            $this->page = $_REQUEST['p'];
        } else {
            $this->page = 'home';
        }

        if (preg_match('/^\w+$/', $this->page)) {
            $this->controllerName = 'App\\Http\\Controllers\\' . ucfirst($this->page) . "Controller";

            // Look for matching class?
            if (class_exists("$this->controllerName")) {
                $pageController = new $this->controllerName;

                // Run the controller handle method
                $template = $pageController->handle();

                // Output the template rendering
                echo $template->render();
            } else {
                print "Requested page not found (Missing Controller $this->controllerName)";
            }
        } else {
            print "Invalid page name ($this->page)";
        }
    }
}