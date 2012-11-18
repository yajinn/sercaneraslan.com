<?php
	include ("app/functions/functions.php");
// Sayfanın title etiketi
	$pageTitle = "Sercan Eraslan - HTML5";
// Header'a kadar olan HTML'i sayfaya ekliyor.
	mainHeader($pageTitle);
?>
		<section>
			<section id="html5">
				<? html5Menu(); ?>
				<article>
					<h1>HTML5 ile tanıştınız mı?</h1>
					<p>HTML5, Yeni HTML Standartıdır. Web sitelerinde artık ekstra bir koda gerek kalmadan video oynatabilecek, ses dosyası çalabilecek, sürükle bırak gibi birçok yeniliği kullanabileceğiz. HTML5'i hemen öğrenmek için <a href="/html5/index.php?page=giris">buraya</a> tıklayabilirsiniz.</p>
				</article>
			</section>
			<!-- #html5 -->
		</section>
<? footer(); ?>