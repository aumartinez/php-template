<?php

require_once("inc/class-page.php");

$page = new Page();
$pageName = "about";

echo $page->getHtmlHead();
echo $page->getHtmlBody($pageName);
echo $page->getHtmlClose();

?>