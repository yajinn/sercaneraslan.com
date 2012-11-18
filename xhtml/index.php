<?php
    include ("../app/functions/functions.php");
// XHTML <title> etiketleri
    $titles = array (
        "giris"             => "Giriş",
        "basliklar"         => "Başlıklar",
        "paragraflar"       => "Paragraflar",
        "metin_formatlari"  => "Metin Formatları",
        "stiller"           => "Stiller",
        "linkler"           => "Linkler",
        "gorseller"         => "Görseller",
        "tablolar"          => "Tablolar",
        "bolumleme"         => "Bölümleme",
        "listeler"          => "Listeler",
        "formlar"           => "Formlar",
        "ozel_karakterler"  => "Özel Karakterler",
        "url_karakter"      => "URL Karakterleri",
        "head"              => "Head ve Meta Etiketleri",
        "gecerli_etiketler" => "Geçerli Etiketler",
        "gecerli_kod"       => "Geçerli Kod Yazmak",
        "farklar"           => "ile HTML Arasında ki Farklar"
    );
// Title Yazıyoruz.
    $pageTitleRoot = "Sercan Eraslan - XHTML ";
    $pageTitle = $titles[$_GET['page']];
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
        <section>
            <section id="xhtml">
                <? xhtmlMenu($subPage); ?>
                <article class="nobg">
                    <? // Parametreye göre sayfa çağırıyoruz.
                        include ($_GET['page'] . '.php');
                    ?>
                </article>
            </section>
            <!-- #xhtml -->
        </section>
<? footer($subPage) ?>