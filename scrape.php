<?php
require 'simplehtmldom/simple_html_dom.php';

// G-Market

// $html = file_get_html('http://global.gmarket.co.kr/item?goodscode=2182555185');

// //box__select-basic - class for the dropdown with only data
// //box__select-image - class for dropdown with image and price

// $productname = $html->find('p[class=text__item-title]',0);
// $price = $html->find('span[class=text__price-foreign]',0);

// echo $price."<br>\n";
// echo $productname;
// --------------------------------

//Ktowm4u
$html = file_get_html('https://www.ktown4u.com/iteminfo?grp_no=1741898&fanc_goods_no=81804&goods_no=64622');
$img = $html->find('img[alt=111371]',0);

echo "<script>alert('".$img."')</script>"; 

echo "<img src='https://www.ktown4u.com".$img."'>";
?>