<?php use framework as F;

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

    protected function showEmailTest()
    {
        $view = $this->createView("viewEmailTest");
        return $view->generateOutput();
    }

    protected function showLogFile($parameters)
    {
        $filename = F\arrayGet($parameters, "filename");
        if ($filename != null)
        {
            echo "<pre>\n";
            echo htmlspecialchars(file_get_contents(FRAMEWORK_FOLDER . ".logs/{$filename}.log"));
            echo "</pre>\n";
        }
    }
}
