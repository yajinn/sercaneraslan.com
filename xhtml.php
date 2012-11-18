<?php
    include ("app/functions/functions.php");
// Sayfanın title etiketi
    $pageTitle = "Sercan Eraslan - XHTML";
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainHeader($pageTitle);
?>
        <section>
            <section id="xhtml">
                <? xhtmlMenu(); ?>
                <article>
                    <h1>XHTML ile tanışma vakti!</h1>
                    <p>XHTML, web sayfalarının iskeletini oluşturulan bir işaretleme dilidir. XHTML kodlarımız ile web sayfalarının iskeletlerini oluşturmayı öğrenmek için <a href="/xhtml/index.php?page=giris">buraya</a> tıklayabilirsiniz.<p>
                </article>
            </section>
            <!-- #xhtml -->
        </section>
<? footer(); ?>