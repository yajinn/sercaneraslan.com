<?php
	include ("app/functions/functions.php");
// Sayfanın title etiketi
	$pageTitle = "Sercan Eraslan - CSS";
// Header'a kadar olan HTML'i sayfaya ekliyor.
	mainHeader($pageTitle);
?>
		<section>
			<section id="css">
				<? cssMenu(); ?>
				<article>
					<h1>CSS 'in tadına bakmak ister misiniz?</h1>
					<p>Dünyanın en zevkli dersini öğrenmek için kolları sıvayın. Şu ana kadar görmüş olabileceğiniz en tatlı ders bu olsa gerek. Bu ders ile birlikte yazdığımız HTML/XHTML 'e hükmedeceğiz. Sayfanızda hemen hemen istediğiniz her değişikliği CSS ile yapabileceksiniz. CSS derslerine hemen başlamak için <a href="css/index.php?page=giris">buraya</a> tıklayınız. </p>				
				</article>
			</section>
			<!-- #css -->
		</section>
<?php footer(); ?>