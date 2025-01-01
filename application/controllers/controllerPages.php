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

    protected function showDatabase()
    {
        $table = new ModelDatabaseTableTest();
        $view = $this->createView("viewDatabase");
        $view->pageData = [
            "fields"  => $table->fields,
            "records" => $table->getRecords(),
            "error"   => $table->getLastError()
        ];
        return $view->generateOutput();
    }

    protected function showPost($parameters)
    {
        $view = $this->createView("viewPost");
        $view->pageData = [
            "posted_data" => F\getPostedData()
        ];
        return $view->generateOutput();
    }

    protected function showLogFile($parameters)
    {
        $filename = F\arrayGet($parameters, "filename");
        if ($filename != null)
        {
            echo "<pre>\n";
            echo htmlspecialchars(file_get_contents(FRAMEWORK_LOGS_FOLDER . "{$filename}.log"));
            echo "</pre>\n";
        }
    }
}
