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
}

?>
