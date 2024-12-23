<?php use framework as F;

class Controller extends F\ControllerBase
{
    public function showHome()
    {
        $view = $this->createView("viewHome.php");
        $view->pageTitle = "My home page";
        return $view->generateOutput();
    }
}
