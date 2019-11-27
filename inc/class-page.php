<?php

class Page {
  public $type = "default";
  public $title = "The web site";
  public $titleExtra = "";
  
  public function getHeader() {
    $html = "";
    $html .= $this->getDocType();
    $html .= $this->getHtmlOpen();
    $html .= $this->getHead();
    
    return $html
  }//End getHeader
  
  protected function getDocType($doctype = "html5") {
    if ($doctype == "html5") {
      $dtd = "<!doctype html>";
      $dtd .= "\n";
    }
    
    return $dtd;
  }
}

?>
