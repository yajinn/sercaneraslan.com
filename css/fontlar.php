				<h1>CSS Fontlar - Fonts</h1>
				<h2>CSS Yazı Tipi Ailesi - Text Font Family</h2>		
				<p>Bir metnin yazı tipi ailesi <strong>" font-family "</strong> özelliği ile ayarlanır. <strong>" font-family "</strong> özelliği kullanılırken yedek olarak bir kaç font ailesi daha eklemek tedbir bakımından iyi olur. Eğer tarayıcı ilk font ailesini desteklemiyorsa, bir sonra ki font ailesini kullanır. </p>
				<div class="pages_content_note_div"> 
					<p class="pages_content_position"> <strong>Not: </strong> Eğer bir font ailesinin adı bir kelimeden fazla ise tırnak işaretleri içine alınmalıdır ve font aileleri virgül ile ayrılmalıdır. </p>
				</div>
				<!-- #pages_content_note_div -->
				<p><strong>Örnek olarak görelim...</strong></p>
				<pre><code class="language-css">
p {
	font-family: "Times New Roman", Times, serif;
}
				</code></pre>
				<p>Standart Web fontlarını görmek için <a href="test/web_safe_font.html">tıklayınız.</a></p>
				<!-- #CSS Yazı Tipi Ailesi -->
                <h2>CSS Font Stili - Font Style</h2>	
				<p><strong>"font-style"</strong> özelliği, çoğunlukla metini yatık yapmak için kullanılır. </p>
				<ul>
					<li><strong>normal</strong> - Metini normal gösterir (Varsayılan).</li>
					<li><strong>italic</strong> - (Metini yatık yapar.)</li>
					<li><strong>oblique</strong> - (Metini daha az yatık yapar.)</li>
				</ul>
				<pre><code class="language-css">
p {
	font-style: italic;
}
				</code></pre>
				<!-- #CSS Font Stili -->
                <h2>CSS Font Boyutu - Font Size</h2>
				<p><strong>"font-size"</strong> özelliği, metin boyutunu ayarlamak için kullanılır. Metin boyutunu yönetebilmek web tasarımı açısından çok önemlidir. Boyutu piksel olarak <strong>" px "</strong> , yüzde olarak <strong>" % "</strong> ya da emphasize (Vurgu) olarak <strong>" em "</strong> ile belirtilebiliriz.  Em boyutu <strong>W3C</strong> tarafından önerilmektedir çünkü kullanıcı tarayıcıdan metin boyutlandırması yaptığında sayfamızda ki metinlerin boyutu da değişikliğe göre ufalıp büyüyebilecektir ayrıca tarayıcıda zoom yapıldığında da boyutlarımız değişmeyecektir. ( 16px, 1em 'e eşittir. 16px=1em ). Piksel bölü 16 yazılarakta em bulunabilir ( piksel/16=em ). </p>
				<pre><code class="language-css">
p {
	font-size: 16px;
}
				</code></pre>
				<pre><code class="language-css">
p {
	font-size: 2.5em;
}
/* 40px/16=2.5em */
				</code></pre>
				<p><strong>Aşağıdaki örnek CSS kodunu açıklayalım.</strong></p>
				<p> <strong>body</strong> etiketinin font boyutunu yüzde yüz (100%) olarak verdik ama bu ne anlama geliyor? Body etiketinin font boyutunu yüzde yüz olarak vermemiz tarayıcı font boyutunun yüzde yüzünü kullanacağımız anlamına geliyor. Font boyutunu yüzde 80 verseydik tarayıcı font boyutunun yüzde 80'ini kullanmış olacaktık.</p>
				<p> Tarayıcıların standart font boyutunun 16 piksel olduğu biliyoruz ve tarayıcı boyutumuzu <strong>body</strong> etiketi içinde yüzde yüz (100%) verdik. <strong>body</strong> etiketi içinde bulunan diğer etiketler artık 16px üzerinden işlem yapacak konuma geldi. Örneğin <strong>h1</strong> etiketi 16 piksel üzerine 2.5em (40px) ekleyerek fontu boyutlandıracak. Yani <strong>h1</strong> etiketi <strong>body</strong> etiketinden kalıtım almış oluyor, etkilenmiş oluyor.</p>
				<pre><code class="language-css">
body {
	font-size: 100%;
}
h1 {
	font-size: 2.5em;
}
				</code></pre>
				<!-- #CSS Font Boyutu -->
                <h2>CSS Diğer Font Özellikleri</h2>
				<ul>
					<li><strong>font-variant: small-caps;</strong> (Tüm harfleri büyük harf yapar ve ilk harflerin boyutunu biraz daha büyük yapar.)</li>
					<li><strong>font-weight: bold;</strong> (Tüm harfleri kalın yapar.)</li>
				</ul>
				<!-- #CSS Diğer Font Özellikleri -->
                <a href="/css/index.php?page=linkler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->