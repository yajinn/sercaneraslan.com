<?php
	include ("../app/functions/functions.php");
// HTML5 <title> etiketleri
    $titles = array (
        "giris"                     => "Giriş",
        "video"                		=> "Video",
        "audio"        				=> "Audio",
        "dragAndDrop"               => "Drag and Drop",
        "canvas"                   	=> "Canvas",
        "inlineSVG"              	=> "Inline SVG",
        "geolocation"               => "Geolocation",
        "webStorage"                => "Web Storage",
        "applicationCache"          => "Application Cache",
        "webWorkers"                => "Web Workers",
        "SSE"                 		=> "Server Sent Events",
        "yeniInput"               	=> "Input Tipleri",
        "yeniForm"               	=> "Form Elemanları",
        "formOzellikleri"           => "Form Özellikleri"
    );
// Title Yazıyoruz.
    $pageTitleRoot = "Sercan Eraslan - HTML5 ";
	$pageTitle = $titles[$_GET['page']];
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
        <section>
            <section id="html5">
                <? html5Menu($subPage); ?>
                <article class="nobg">
                    <? // Parametreye göre sayfa çağırıyoruz.
                        include ($_GET['page'] . '.php');
                    ?>
                </article>
            </section>
            <!-- #html5 -->
        </section>
<? footer($subPage) ?>