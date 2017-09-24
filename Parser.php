<?php
/**
 * Created by PhpStorm.
 * User: antonkutovoj
 * Date: 24.09.17
 * Time: 19:47
 */

require_once __DIR__.'/vendor/autoload.php';

use Symfony\Component\DomCrawler\Crawler;


$html = file_get_contents('https://www.itbox.ua');


$dom = new Crawler($html);
$list = $dom->filter('body > main > div > div > aside > nav > ul > li');

/** @var DOMElement $item */
foreach($list as $item){
    var_dump($item->textContent);
}
