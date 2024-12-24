<?php

class ControllerPages extends ControllerApplication
{
    protected function showHome()
    {
        $view = $this->createView("viewHome");
        return $view->generateOutput();
    }

    protected function showParameters($parameters)
    {
        $view = $this->createView("viewParameters");
        $view->pageData = $parameters;
        return $view->generateOutput();
    }
}
