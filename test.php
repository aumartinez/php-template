<?php

require_once("inc/class-page.php");

$page = new Page();
$pageName = "test";

echo $page->getHtmlHead();
echo $page->getHtmlBody($pageName);
echo $page->getHtmlClose();

?>