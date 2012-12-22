<?php
    include ("app/functions/functions.php");
// Sayfanın title etiketi
    $pageTitle = "Sercan Eraslan - Hakkımda";
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainHeader($pageTitle);
?>
        <section>
            <section id="aboutMe">
                <h1>Sercan Eraslan</h1>
                <h2>Senior Front-End Developer</h2>
                <ul>
                    <li><a href="mailto:info@sercaneraslan.com" title="İletişim">İletişim</a></li>
                    <li><a href="http://www.linkedin.com/pub/sercan-eraslan/1b/721/618" title="LinkedIn">LinkedIn</a></li>
                    <li><a href="https://github.com/skatersercan" title="Github">Github</a></li>
                    <li><a href="https://bitbucket.org/skatersercan" title="Bitbucket">Bitbucket</a></li>
                    <li><a href="https://twitter.com/skatersercan" title="Twitter">Twitter</a></li>
                </ul>
            </section>
            <!-- #aboutMe -->
        </section>
<? footer(); ?>