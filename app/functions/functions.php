<?php
// Alt sayfalar için path
$subPage = "../";
// Header'a kadar olan HTML'i sayfaya ekliyor.
function mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage){
	include($subPage . 'app/include/header.php');
}
// Footer ve Footer'dan sonraki HTML'i sayfaya ekliyor.
function footer($subPage){
	include($subPage . 'app/include/footer.html');
}
// XHTML sayfasının menüsünü ekler.
function xhtmlMenu($subPage){
	include($subPage . 'app/include/xhtmlMenu.html');
}
// CSS sayfasının menüsünü ekler.
function cssMenu($subPage){
	include($subPage . 'app/include/cssMenu.html');
}
// HTML5 sayfasının menüsünü ekler.
function html5Menu($subPage){
	include($subPage . 'app/include/html5Menu.html');
}
// Selenium sayfasının menüsünü ekler.
function seleniumMenu($subPage){
	include($subPage . 'app/include/seleniumMenu.html');
}