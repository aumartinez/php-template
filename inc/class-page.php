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
    $html .= $this->getTopHeader();
    
    return $html
  }//End getHeader
  
  protected function getDocType($doctype = "html5") {
    if ($doctype == "html5") {
      $dtd = "<!doctype html>";
      $dtd .= "\n";
    }
    
    return $dtd;
  }//End getDocType
  
  protected function getHtmlOpen($lang = "en-us") {
    if ($lang == "en-us") {
      $htmlopen = "<html lang=\"en\">";
      $htmlopen .= "\n";
    }
    
    return $htmlopen;
  }//End getHtmlOpen
  
  protected function getHead() {
    $head = "";
    $head .= "<head>\n";
    $head .= file_get_contents("template/topmeta.html");
    $head .= "\n";
    
    if ($this->titleExtra != "") {
      $title = $this->titleExtra . "|" . $this->title;
    }
    else {
      $tile = $this->title;
    }
    
    $head .= "<title>" . $title . "</title>\n";
    
    $head .= file_get_contents("template/toplinks.html");
    $head .= "\n";
    
    $head .= "</head>";
    $head .= "\n";
    
    return $head;    
  }//End getHead
  
  protected function getBodyOpen() {
    $body = "";
    $body .= "<body>";
    $body .= "\n";
    
    return $body;
  }
  
  protected function getTopHeader() {
    $htmlheader = "";
    $htmlheader .= file_get_contents("template/topheader.html");
    $htmlheader .= "\n";
    
    return $htmlheader;
  }
  
  protected function getBodyCont($page) {
    $html = "";
    $html .= file_get_contents("page/{$page}.html");
    $html .= "\n";
    
    return $html;
  }
  
  protected function getBottomScripts() {
    $html = "";
    $html .= file_get_contents("template/bottom.html");
    $html .= "\n";
    
    return $html;
  }
  
  protected function getBodyClose() {
    $html = "";
    $html .= "</body>\n";
    $html .= "</html>";
    $html .= "\n";
    
    return $html;
  }
}

?>
