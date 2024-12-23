<?php

class ControllerPages extends ControllerApplication
{
    protected function showHome()
    {
        $view = $this->createView("viewHome.php");
        return $view->generateOutput();
    }
}
