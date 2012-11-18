<?php
    include ("app/functions/functions.php");
// Sayfanın title etiketi
    $pageTitle = "Sercan Eraslan - Selenium";
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainHeader($pageTitle);
?>
        <section>
            <section id="selenium">
                <? seleniumMenu(); ?>
                <article>
                    <h1>Selenium IDE &amp; Selenium RC</h1> 
                    <p>Mükemmel ikilinin neler yapabildiklerini görmek, testlerinizi otomatize hale getirmek, zaman kazanmak ve insanların gözlerinden kaçabilecek hataları yakalayabilmek istiyorsanız lütfen <a href="/selenium/index.php?page=selenium_ide">buraya</a> tıklayınız.</p>
                </article>
            </section>
            <!-- #selenium -->
        </section>
<? footer(); ?>