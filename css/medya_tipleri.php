			<h1>CSS Medya Tipleri - Media Types</h1>
			<p>Medya Tipleri değişik ortamlarda belgelerin nasıl sunulduğunu gösterir. Belgeler ekranda, kağıtta ve diğer tarayıcılar gibi ortamlarda değişik biçimlerde görüntülenebilir. </p>
			<p>Bazı <strong>CSS</strong> türleri yalnız belirli ortamlarda çalışacak biçimde tasarlanmıştır. Örneğin "voice-family (ses ailesi)" özellikleri işitsel kullanıcı ortamları için geçerlidir. Diğer türlerden bazıları yalnız (örneğin "font-size (yazı tipi boyu)" özelliği) ekran ve yazıcı ortamları için geçerli olabilir ama farklı değerlerle etkin olabilirler. Bir belge ekranda kağıda oranla daha büyük yazı tipine gereksinim duyar. Örneğin sans-serif yazı-tipi ekranda daha okunaklıyken, serif yazı-tipi kağıtta daha iyidir. </p>
			<h2><strong>@media Kuralı</strong></h2>
			<p>@media kuralı değişik stil kurallarını değişik ortamlar için aynı <strong>CSS</strong> içinde tanımlamaya yarar.</p>
			<p>Aşağıdaki örnekte ekranda görüntülenen yazı 14px verdana yazı tipi kullanır ama eğer sayfa yazdırılacaksa yazı 10px Times yazı tipi olur. Dikkate edilecek konu, metinin <strong>font-weight: bold;</strong> olması hem ekran için hem de kağıt için aynıdır. </p>
			<pre><code class="language-css">
@media screen{
	p {
		font-family: verdana,sans-serif;font-size: 14px;
	}
}

@media print{
	p {
		font-family: times,serif;font-size: 10px;
	}
}

@media screen, print{
	p {
		font-weight: bold;
	}
}
			</code></pre>
			<!-- #@media Kuralı -->
        <h2>Değişik Ortam Türleri</h2>
			<table>
			  <tr>
				<th>Ortam Türü</th>
				<th>Açıklama</th>
			  </tr>
			  <tr>
				<td>all</td>
				<td>Her ortam türü birimlerinde kullanılır.</td>
			  </tr>
			  <tr>
				<td>aural</td>
				<td>Ses sentez birimlerinde kullanılır.</td>
			  </tr>
			  <tr>
				<td>braille</td>
				<td>Braille için dokunmalı geri besleme birimlerinde kullanılır.</td>
			  </tr>
			  <tr>
				<td>embossed</td>
				<td>Barille sayfalarının yazdırılmasında kullanılır.</td>
			  </tr>
			  <tr>
				<td>handheld</td>
				<td>Cep telefonları ve avuçiçi bilgisayarlar için kullanılır.</td>
			  </tr>
			  <tr>
				<td>print</td>
				<td>Yazıcılarda kullanılır.</td>
			  </tr>
			  <tr>
				<td>projection</td>
				<td>Slaytlar gibi proje sunumlarında kullanılır.</td>
			  </tr>
			  <tr>
				<td>screen</td>
				<td>Bilgisayar ekranlarında kullanılır.</td>
			  </tr>
			  <tr>
				<td>tty</td>
				<td>Terminaller gibi değişmez harflerle yazılması söz konusu olan ortamlarda kullanılır.</td>
			  </tr>
			  <tr>
				<td>tv</td>
				<td>Televizyon türü birimlerde kullanılır.</td>
			  </tr>
			</table>
        <!-- #Değişik Ortam Türleri -->
			<a href="/css/index.php?page=oznitelik_secicileri" class="nextButton">Devam Et</a>
                        <!-- #nextButton -->