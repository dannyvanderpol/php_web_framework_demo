<?php

class ControllerPages extends ControllerApplication
{
    protected function showHome()
    {
        $view = $this->createView("viewHome");
        return $view->generateOutput();
    }
}
