<?php

class Page {
  public $type = "default";
  public $title = "The web site";
  public $titleExtra = "";
  
  //Page constructors  
  public function getHtmlHead() {
    $html = "";
    $html .= $this->getDocType();
    $html .= $this->getHtmlOpen();
    $html .= $this->getHead();
    
    return $html
  }//End getHeader
  
  public function getHtmlBody($page = "index") {
    $html = "";
    $html .= $this->getBodyOpen();
    $html .= $this->getTopHeader();
    $html .= $this->getBodyCont($page);
    $html .= $this->getBottomScripts();
    
    return $html;    
  }
  
  public function getHtmlClose() {
    $html = "";
    $html .= $this->getBodyClose();
    
    return $html;
  }
  
  //Page templates
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
  
  protected function getFooter() {
    $html = "";
    $html .= file_get_contents("template/footer.html");
    $html .= "\n";
    
    return $html;
  }
  
  protected function getBottomScripts() {
    $html = "";
    $html .= file_get_contents("template/bottomscripts.html");
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
