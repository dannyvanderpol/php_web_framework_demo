<?php use framework as F;

/*
View for the application
Overwrite the functionality of the framework view.
*/

class ViewApplication extends F\ViewPage
{
    public function generateBody()
    {
        $output = "<body>\n";
        $output .= $this->getContentFromPageFile("viewHeader.php");
        $output .= "<div class=\"content\">\n";
        $output .= $this->getContentFromPageFile($this->pageFile);
        $output .= "</div>\n";
        $output .= $this->getContentFromPageFile("viewFooter.php");
        $output .= "</body>\n";
        return $output;
    }
}
