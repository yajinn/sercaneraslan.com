<?php
	include ("../app/functions/functions.php");
// Sayfanın title etiketi
	$pageTitle = "Sercan Eraslan - AJAX";
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
		<section>
			<article id="ajax">
				<h1>AJAX Nedir?</h1>
				<p><strong>AJAX</strong> bir kaç teknolojinin birleşiminden oluşan bir tekniktir. AJAX, <strong>"Asynchronous JavaScript and XML"</strong> kelimelerinin birleşiminden oluşan bir kısaltmadır. AJAX kullanarak sayfalarınıza başka sayfaları ekleyebilir, başka sayfalardan içerik çekebilirsiniz. Google’nın AJAX'ı kullanması ile de AJAX popülerlik kazanmıştır. "<strong>AJAX</strong>" ve/veya <strong>"Eyjaks"</strong> şeklinde telafuz edilmektedir.</p>
				<p><strong>AJAX</strong> tekniğinin hedefi, veri trafiğini azaltmak ve sayfayı yenilemeden sunucu ile iletişime geçmektir. AJAX ile bir sayfayı yenilemeden sunucu ile iletişim kurmak çok kolay ve hızlı bir hale geliyor.</p>
				<p>Mesela anlık olarak döviz bilgilerini verdiğimizi düşünelim;</p>
				<p>Normalde sayfa her yenilendiğinde yeni veriler ekrana gelir ama <strong>AJAX</strong> ile sayfa yenilenmeden de yapılabilmektedir.</p>
				<p><strong>AJAX</strong> yeni bir teknik değildir ve bir programlama dili de değildir. Yaratıcı ve interaktif RIA (Rich Internet Applications) yani zengin internet tabanlı uygulamalar geliştirmek için kullanıllanılan bir yazılım tekniğidir.</p>
				<p><strong>AJAX</strong>, açık olan sayfa güncellenmeden arka planda veri transferi yaptığı ve bu transferler sayfanın kullanımını etkilemediği için asenkron olarak adlandırılır. Bahsi geçen fonksiyonlar genel olarak javascript ile hazırlanır.</p>
				<p><strong>AJAX</strong> tekniği aşağıdakilerinin bir kombinasyonunu kullanır:</p>
				<ul>
					<li>Tarayıcı ve sunucu arasındaki asenkron veri transferi için XMLHttpRequest.</li>
					<li>Veri iletişim formatı olarak XML ve text (düz metin) kullanılır.</li>
				</ul>
				<p>En büyük artısı performanstır ve hızlı etkileşimdir.</p>
				<p><strong>Örnek:</strong></p>
				<div class="note">
					<script type="text/javascript">
						function loadXMLDoc(){
							var xmlhttp;
							if (window.XMLHttpRequest) {
							  	xmlhttp=new XMLHttpRequest();
							}else{
								xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.onreadystatechange=function(){
								if (xmlhttp.readyState==4 && xmlhttp.status==200){
							    	document.getElementById("result").innerHTML=xmlhttp.responseText;
							    }
							}
							xmlhttp.open("GET","/docs/test/test.txt",true);
							xmlhttp.send();
						}
					</script>
					<p id="result">AJAX, bu içeriği değiştirecek!</p>
					<button type="button" onclick="loadXMLDoc()">İçeriği Değiştir</button>
				</div>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
	&lt;head&gt;
		&lt;script type="text/javascript"&gt;
			function loadXMLDoc(){
				var xmlhttp;

				// AJAX nesnesini tarayıcı tipine göre oluşturuyoruz.
				if (window.XMLHttpRequest) {
				  	// IE7 ve sonrası, Firefox, Chrome, Opera ve Safari için kodumuz.
				  	xmlhttp=new XMLHttpRequest();
				  }
				else {
				  	// IE6 ve öncesi için kodumuz.
				  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
				  }

				// İşlem başarılıysa result id'li p'ye cevap olarak gelen içeriği yazdırıyoruz.
				xmlhttp.onreadystatechange=function(){
				  if (xmlhttp.readyState==4 && xmlhttp.status==200)
				    {
				    	document.getElementById("result").innerHTML=xmlhttp.responseText;
				    }
				  }

				// 1. parametre işin GET metoduyla yapılacağını belirtiyor.
				// 2. parametre değişecek içeriğin dosya yolunu/path'ini belirtiyor.
				xmlhttp.open("GET","test.txt",true);
				xmlhttp.send();
			}
		&lt;/script&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p id="result"&gt;AJAX, bu içeriği değiştirecek!&lt;/p&gt;
		&lt;button type="button" onclick="loadXMLDoc()"&gt;İçeriği Değiştir&lt;/button&gt;
	&lt;/body&gt;
&lt;/html&gt;
				</code></pre>
				<p>Not 1: Örneğin daha kolay anlaşılabilir olması için button etiketine onclick özniteliği eklenmiştir. Normal şartlarda etiketlerin işi JavaScript çalıştırmak değildir. Satır içi yani inline JavaScript kodu yazmanız şiddetle <strong>önerilmez.</strong> Bakınız: <a href="/web.php">Web Önyüzü Nasıl Olmalı?</a></p>
				<p>Not 2: <strong>AJAX</strong> metodu Jquery kütüphanesi kullanılarakta yapılabilir.</p>
			</article>
			<!-- #ajax -->
		</section>
<? footer($subPage) ?>