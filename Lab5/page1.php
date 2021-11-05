<?php
require 'Page.php';
$webPage = new Page('A simple page', date('Y'), 'Made by me');
$webPage->addContent("<p align=\"center\">Roses are red</p>");
$webPage->addContent("<p align=\"center\">Violets are blue</p>");
$webPage->addContent("<p align=\"center\">That's what they say</p>");
$webPage->addContent("<p align=\"center\">But it just isn't true</p>");
echo $webPage->get();
