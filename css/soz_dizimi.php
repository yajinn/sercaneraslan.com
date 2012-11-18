				<h1>CSS Söz Dizimi - Syntax</h1>
				<p> <strong>CSS</strong> , <strong>Seçici</strong> ve <strong>Bildirim</strong> olarak iki ana bölümden oluşur.</p>
				<div id="cssSyntax"> </div>
				<ul>
					<li>Seçici olarak gösterdiğimiz alana istediğimiz <strong>HTML/XHTML</strong> etiketini yazabiliriz.</li>
					<li>Her <strong>Bildirim</strong>, "Özellik" ve "Değer" içerir.</li>
					<li> <strong>Özellik</strong>, değiştirilmek istenen stil özniteliğidir. Örnek; color, font-size vb.</li>
					<li> <strong>Değer</strong> ise stil özniteliklerine verilen değerlerdir. Örnek; blue, 12px vb.  </li>
					<li> <strong>CSS</strong> bildirimleri her zaman noktalı virgülle biter, bildirim grupları ise süslü parantez içinde olmalıdır. </li>
				</ul>
				<p> <strong>CSS</strong> kodlarının daha okunaklı olması için her <strong>Bildirim</strong> 'i bir satıra yazmalıyız ve her bildirimden önce "Tab" tuşuna basarak boşluk vermeliyiz.</p>
				<p> <strong>Örnek olarak görelim....</strong></p>
				<pre><code class="language-css">
p {
	color: black;
	text-align: center;
} 				</code></pre>
				<!-- #CCSS Söz Dizimi -->
                <h2>CSS Yorum Ekleme - Comments</h2>
				<p> <strong>CSS</strong> 'te yorum ekleme, <strong><a href="/xhtml/index.php?page=basliklar">HTML/XHTML</a></strong> 'den biraz daha farklı. Yorumu açarken <strong>" /* "</strong> karakterlerini kullanıyoruz, yorumu kapatırken ise <strong>" */ "</strong> karakterlerini kullanıyoruz. </p>
				<p> <strong>Örnek olarak görelim....</strong></p>
				<pre><code class="language-css">
/* Bu CSS ile her " p " etiketi içinde ki yazının rengi sarı olacak ve yazılar ortalanmış olacak.  */
p {
	color: yellow;
	text-align: center;
} 				</code></pre>
				<!-- #CSS Yorum Ekleme -->
                <a href="/css/index.php?page=kullanim_sekilleri" class="nextButton">Devam Et</a>
				<!-- #nextButton -->