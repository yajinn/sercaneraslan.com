<?php
	include ("../app/functions/functions.php");
// CSS <title> etiketleri
    $titles = array (
        "giris"                     => "Giriş",
        "soz_dizimi"                => "Söz Dizimi",
        "kullanim_sekilleri"        => "Kullanım Şekilleri",
        "seciciler"                 => "Seçiciler",
        "renkler"                   => "Renkler",
        "arkaplanlar"               => "Arkaplanlar",
        "metinler"                  => "Metinler",
        "fontlar"                   => "Fontlar",
        "linkler"                   => "Linkler",
        "listeler"                  => "Listeler",
        "tablolar"                  => "Tablolar",
        "kutu_modeli"               => "Kutu Modeli",
        "sinir_kenar"               => "Sınır / Kenar",
        "anahat"                    => "Anahat",
        "dis_kenar_boslugu"         => "Dış Kenar Boşluğu",
        "ic_kenar_boslugu"          => "İç Kenar Boşluğu",
        "gruplama_yerlestirme"      => "Seçicileri Gruplama",
        "boyut"                     => "Boyut",
        "gorunurluk"                => "Görünürlük & Görüş",
        "konumlandirma"             => "Konumlandırma",
        "kaydirma"                  => "Kaydırma",
        "sozde_siniflar"            => "Sözde Sınıflar",
        "sozde_ogeler"              => "Sözde Öğeler",
        "saydam_gorsel"             => "Saydam Görsel",
        "sprite_gorsel"             => "Sprite Görsel",
        "medya_tipleri"             => "Medya Tipleri",
        "oznitelik_secicileri"      => "Öznitelik Seçicileri"
    );
// Title yazıyor.
    $pageTitleRoot = "Sercan Eraslan - CSS ";
	$pageTitle = $titles[$_GET['page']];
// dosya ekleniyor.
    $addTag = '<link rel="stylesheet" href="/css/test/test.css" type="text/css" />';
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
        <section>
            <section id="css">
                <? cssMenu($subPage); ?>
                <article class="nobg">
                    <? // Parametreye göre sayfa çağırıyoruz.
                        include ($_GET['page'] . '.php');
                    ?>
                </article>
             </section>
             <!-- #css -->
        </section>
<? footer($subPage) ?>