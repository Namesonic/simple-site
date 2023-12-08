<?php
namespace App\Http;

use App\View\Template;
use App\View\View;

class Kernel {

    public function handle(): void
    {
        // Load the current page/controller
        if (isset($_REQUEST['p'])) {
            $page = $_REQUEST['p'];
        } else {
            $page = 'home';
        }

        if (preg_match('/^\w+$/', $page)) {
            $controllerName = 'App\\Http\\Controllers\\' . ucfirst($page) . "Controller";

            // Look for matching class?
            if (class_exists("$controllerName")) {
                $pageController = new $controllerName;

                // Run the controller handle method
                /** @var View $view */
                $view = $pageController->handle();

                // Load the prepared view / replace params
                $view->load();
                $view->replaceParams();

                // Create a template with the prepared view
                $template = new Template($view);

                // Output the template
                echo $template->render();
            } else {
                print "Requested page not found (Missing Controller $controllerName)";
            }
        } else {
            print "Invalid page name ($page)";
        }
    }
}