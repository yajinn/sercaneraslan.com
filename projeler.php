<?php
	include ("app/functions/functions.php");
// Sayfanın title etiketi
	$pageTitle = "Sercan Eraslan - Projeler";
// Header'a kadar olan HTML'i sayfaya ekliyor.
	mainHeader($pageTitle);
?>
		<section>
			<section id="projeler">
				<ul>
					<li>
						<h2>Sercaneraslan.com</h2>
						<p>Responsive'dir (her bilgisayara / tablete / telefona uyumludur), ySlow puanı 100'dür, site sadece 8 id ve 5 class'tan oluşur ve yazılım dilleri hakkında bilgiler verir.</p>
						<p><a href="http://www.sercaneraslan.com">Sercaneraslan.com</a> / <a href="https://github.com/skatersercan/sercaneraslan.com">Github</a></p>
					</li>
					<li>
						<h2>Genius</h2>
						<p>HTML5, CSS3 ve JavaScript ile yazılmış bir oyundur.</p>
						<p><a href="http://skatersercan.github.com/Genius/">Genius</a> / <a href="https://github.com/skatersercan/Genius">Github</a></p>
					</li>
					<li>
						<h2>Selightbox</h2>
						<p>Javascript ve CSS ile yazılmış hızlı çalışan bir lightbox'tır.</p>
						<p><a href="http://skatersercan.github.com/selightbox/">Selightbox</a> / <a href="https://github.com/skatersercan/selightbox">Github</a></p>
					</li>
				</ul>
			</section>
			<!-- #projeler -->
		</section>
<? footer(); ?>