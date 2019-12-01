<?php

require_once("inc/class-page.php");

$page = new Page("home");
$pageName = "home";

$page->titleExtra = "Home";

echo $page->getHtmlHead();
echo $page->getHtmlBody($pageName);
echo $page->getHtmlClose();

?>