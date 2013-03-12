				<h1>CSS Görünürlük &amp; Görüş - Display &amp; Visibility</h1>
				<p><strong>CSS</strong> ile bir etiketin/elemanın görünmesini engelleyebiliriz ya da gizlenmesini sağlayabiliriz.</p>
				<h2>CSS Elemenanının Gizlenmesi - display: none ya da visibility: hidden</h2>
				<p>Elemanları gizlemenin iki yolu vardır, <strong>display: none</strong> veya <strong>visibility: hidden</strong> .</p>
				<p>Bu iki özellik birbirinden farklıdır, <strong>visibility: hidden</strong> sadece görünmez olmasını sağlar, elemanın özellikleri olduğu gibi durur.</p>
				<pre><code class="language-css">
.gizle {
	visibility: hidden;
}
				</code></pre>
				<p><strong>display: none</strong> ise elemanı gizler ve elemanı yoksaydığımız için sayfada herhangi bir yer kaplamaz. </p>
				<pre><code class="language-css">
.gizle {
	display: none;
}
				</code></pre>
				<!-- #CSS Elemenanının Gizlenmesi -->
                <h2>CSS Görünürlük - Blok ve Inline Elemanlar / Display - Block and Inline Elements</h2>
				<p>Bir etikete/elemana <strong>display: block</strong> özelliği tanımlarsak etiket alabildiğine genişler ve etiketin hem üst satırına hemde alt sanırına bir <strong>&lt;br /&gt;</strong>  etiketi koymuş gibi görüntü sağlar.</p>					
				<p>Örnek block elemanlarını görelim: </p>
				<ul>
					<li>&lt;h1&gt;</li>
					<li>&lt;p&gt;</li>
					<li>&lt;div&gt;</li>
				</ul>
				<p>Bir inline element, gerektiği durumda genişlik alır ve etiketin üstüne yada altına <strong>&lt;br /&gt;</strong> etiketi <strong>koymuş gibi davranmaz.</strong></p>
				<p>Örnek inline elemanlarını görelim: </p>
				<ul>
					<li>&lt;span&gt;</li>
					<li>&lt;a&gt;</li>
				</ul>
                <!-- #CSS Görünürlük -->
				<h2>Değişen bir eleman nasıl görüntülenir - Changing How an Element is Displayed</h2>
				<p>Bir öğenin display <strong>CSS</strong> 'ini <strong>"inline"</strong> veya <strong>"block"</strong> olarak degiştirerek, Web standartlarının dışına çıkmadan tasarımda güzel çözümler bulabilirsiniz.</p>
				<p>Aşağıdaki örnek, liste elemanlarını <strong>"inline"</strong> olarak göstermektedir: </p>
				<pre><code class="language-css">
li {
	display: inline;
}
				</code></pre>
				<p>Aşağıdaki örnek, span elemanlarını <strong>"block"</strong> olarak göstermektedir: </p>
				<pre><code class="language-css">
span {
	display: block;
}
				</code></pre>
				<p><strong>Not: </strong> Bir elemanın görüntülenme tipini değiştirmek sadece onun nasıl göründüğünü değiştirir, elemanın ne olduğunu <strong>değil.</strong> Örneğin:  Bir inline eleman <strong>display: block</strong> olarak ayarlandıysa içinde bir başka block elemanın konumlanmasına izin vermez.</p>
                <!-- #Değişen bir eleman nasıl görüntülenir -->
				<a href="/css/index.php?page=konumlandirma" class="nextButton">Devam Et</a>
                <!-- #nextButton -->