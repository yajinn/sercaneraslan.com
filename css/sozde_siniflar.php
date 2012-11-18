				<h1>CSS Sözde Sınıflar - Pseudo Classes</h1>
				<h2>pseudo-class Yazım Kuralı</h2>
        		<p>Aslında <strong>pseudo-class</strong> (poseydo kılas) 'ın ne olduğunu daha önce <strong>CSS</strong> altında ki <strong>Linkler</strong> başlığında görmüştük. Linklere stil verirken bu özelliği kullanıyorduk.</p>
    			<p>pseudo-class yazım kuralını görelim.</p>
    			<pre><code class="language-css">
seçici:pseudo-class {
	ozellik: değer;
}
				</code></pre>
				<p><strong>Örnek: </strong> </p>
				<pre><code class="language-css">
a:link {
	background-color: #FFFF85;
}
				</code></pre>
				<p>Class ile birlikte pseudo-class kullanımını görelim. </p>
				<pre><code class="language-css">
seçici.class:pseudo-class {
	ozellik: değer;
}
				</code></pre>
				<p><strong>Örnek: </strong> </p>
				<pre><code class="language-css">
p.ozel_stil:pseudo-class {
	background-color: #FFFF85;
}
				</code></pre>
    			<!-- #pseudo-class -->
                <h2>first-child Sözde Sınıf</h2>
    			<p>Örneğin bir <strong>div</strong> etiketimizin içinde 5 tane <strong>p</strong> etiketi var ve biz ilk sırada ki <strong>p</strong> etiketine stil vermek istiyoruz ama <strong>HTML/XHTML</strong> koduna dokunmadan kısa sürede <strong>CSS</strong> ile bu işi halletmek istiyoruz. Bu gibi durumlarda <strong>first-child</strong> özelliğini kullanabiliriz. Yani biz bir elemanın altında ki ilk elemana stil vermek için <strong>first-child</strong> özelliğini kullanacağız. </p>
				<p><strong>CSS Kodumuz: </strong> </p>
				<pre><code class="language-css">
p:first-child {
	color: gray;
}
				</code></pre>
				<p>( Kodun okunuşu:  İlk p elemanının metin rengi gri olsun. )</p>
				<p><strong>HTML/XHTML Kodu</strong> </p>
				<pre><code class="language-javascript">
&lt;div&gt; 
	&lt;p&gt;Bu birinci paragraf&lt;/p&gt; 
	&lt;p&gt;Bu ikinci paragraf&lt;/p&gt; 
	&lt;p&gt;Bu üçüncü paragraf&lt;/p&gt; 
	&lt;p&gt;Bu dördüncü paragraf&lt;/p&gt; 
	&lt;p&gt;Bu beşinci paragraf&lt;/p&gt; 
&lt;/div&gt;  
				</code></pre>
    			<p>Bu kodumuz çalıştığında ilk paragrafta ki içeriğin rengi gri olacak, diğer paragraflar ise olduğu gibi kalacaktır.</p>
    			<!-- #first-child -->
                <h2>Bir elamanın altında ki tüm ilk elemanlara stil vermek </h2>
				<p>Örneğin iki adet <strong>div</strong> etiketimiz var ve her etiketimizin içinde 2 tane <strong>strong</strong> etiketimiz var. Biz ilk <strong>strong</strong> elemanlarına tek tek stil vermek yerine tek seferde <strong>CSS</strong> ile stil vererek kodumuzu kısaltmak istiyoruz.</p>
    			<p><strong>CSS Kodumuz: </strong> </p>
				<pre><code class="language-css">
div > strong:first-child {
	color: blue;
}
				</code></pre>
				<p>( Kodun okunuşu:  div elemanının altında ki ilk strong etiketlerinin metin rengi mavi olsun. )</p>
    			<p><strong>HTML/XHTML Kodu</strong> </p>
				<pre><code class="language-javascript">
&lt;div&gt; 
	&lt;strong&gt; Bu vurgulu ve mavi bir metin. &lt;/strong&gt; &lt;strong&gt; Bu ise vurgulu bir metin. &lt;/strong&gt; 
&lt;/div&gt; 

&lt;div&gt; 
	&lt;strong&gt; Bu vurgulu ve mavi bir metin. &lt;/strong&gt; &lt;strong&gt; Bu ise vurgulu bir metin. &lt;/strong&gt; 
&lt;/div&gt; 
				</code></pre>
    			<!-- #Bir elamanın altında ki -->
                <h2>İlk elamanın içinde ki elemanların tümüne stil vermek </h2>
    			<p>Örneğin iki adet <strong>div</strong> etiketimiz var ve her etiketimizin içinde 2 tane <strong>strong</strong> etiketimiz var. Biz ilk <strong>div</strong> etiketi içinde ki tüm <strong>strong</strong> elemanlarına tek tek stil vermek yerine tek seferde <strong>CSS</strong> ile stil vererek kodumuzu kısaltmak istiyoruz.</p>
				<p><strong>CSS Kodumuz: </strong> </p>
				<pre><code class="language-css">
div:first-child strong {
	color: blue;
}
				</code></pre>
				<p>( Kodun okunuşu:  İlk div elemanının içinde ki tüm strong etiketlerinin metin rengi mavi olsun. )</p>
    			<p><strong>HTML/XHTML Kodu</strong> </p>
				<pre><code class="language-javascript">
&lt;div&gt; 
	&lt;strong&gt; Bu vurgulu ve mavi bir metin. &lt;/strong&gt; &lt;strong&gt; Bu vurgulu ve mavi bir metin. &lt;/strong&gt; 
&lt;/div&gt; 

&lt;div&gt; 
	&lt;strong&gt; Bu vurgulu bir metin. &lt;/strong&gt; &lt;strong&gt; Bu vurgulu bir metin. &lt;/strong&gt; 
&lt;/div&gt; 
				</code></pre>
				<!-- #İlk elamanın içinde ki -->
                <a href="/css/index.php?page=sozde_ogeler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->