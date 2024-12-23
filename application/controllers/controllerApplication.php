<?php use framework as F;

/*
Base controller for all controllers in the application
Overwrite the functionality of the framework base controller.
*/

class ControllerApplication extends F\ControllerBase
{
    public function createView($viewName)
    {
        // Create our own view
        $view = new ViewApplication();
        $view->pageTitle = PAGE_TITLE;
        // All my views are PHP files
        $view->pageFile = $viewName . ".php";
        $view->styleSheets[] = "application/styles/application.css";
        return $view;
    }
}
