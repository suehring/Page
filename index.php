<?php

require_once("Page.php");

$page = new MyNamespace\Page("Page");

print $page->getTopSection();
print "<h1>Page created with Page class</h1>" . PHP_EOL;
print $page->getBottomSection();

