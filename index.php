<?php

require_once("inc/class-page.php");

$page = new Page();
$pageName = "home";

echo $page->getHtmlHead();
echo $page->getHtmlBody($pageName);
echo $page->getHtmlClose();

?>