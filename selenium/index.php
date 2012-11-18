<?php
    include ("../app/functions/functions.php");
// Selenium <title> etiketleri
    $titles = array (
        "selenium_ide"                     => "IDE Nedir ?",
        "kurulum"                          => "IDE Nasıl kurulur ?",
        "taniyalim"                        => "IDE'yi Tanıyalım",
        "nasil_calisir"                    => "IDE Nasıl Çalışır ?",
        "yer_bulucular"                    => "IDE Yer Bulucular",
        "test_hazirlamak"                  => "IDE ile Test Hazırlamak",
        "selenium_rc"                      => "RC Nedir ?"
    );
// Title Yazıyoruz.
    $pageTitleRoot = "Sercan Eraslan - Selenium ";
    $pageTitle = $titles[$_GET['page']];
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
        <section>
            <section id="selenium">
                <? seleniumMenu($subPage); ?>
                <article class="nobg">
                    <? // Parametreye göre sayfa çağırıyoruz.
                        include ($_GET['page'] . '.php');
                    ?>
                </article>
            </section>
            <!-- #selenium -->
        </section>
<? footer($subPage) ?>