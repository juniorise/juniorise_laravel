<?php
include_once __DIR__ .'\vendor\autoload.php';

use MyCrawler\Classes\News;

$newsDom = new News('https://www.washingtonpost.com');
$headlines = $newsDom->get_headlines();

include('Templates/newLists.php');