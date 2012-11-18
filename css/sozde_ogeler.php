				<h1>CSS Sözde Öğeler - Pseudo Elements</h1>
				<p>CSS sözde öğeleri, bazı seçicilere özel efektler eklemek için kullanılır.</p>
    			<h2>pseudo-elements Yazım Kuralı</h2>
				<p> <strong>pseudo-class yazım kuralını görelim.</strong></p>
				<pre><code class="language-css">
seçici:pseudo-element {
	ozellik: değer;
}
				</code></pre>
				<p>Örnek olarak görelim.</p>
    			<pre><code class="language-css">
p:first-line {
	color: orange;
}
				</code></pre>
    			<p> <strong>class ile birlikte pseudo-elements kullanımını görelim.</strong> </p>
				<pre><code class="language-css">
seçici.class:pseudo-element {
	ozellik: değer;
}
				</code></pre>
    			<p>Örnek olarak görelim.</p>
				<pre><code class="language-css">
p:first-letter { 
	color: orange; 
}
				</code></pre>
    			<!-- #pseudo-elements -->
                <h2>: first-line Özelliği</h2>
				<p>Bir elemenanın ilk satırına stil vermek için kullanılır. Sonra ki satırlar normal olarak görüntülenir.</p>
				<pre><code class="language-css">
p:first-line { 
	color: orange; 
}
				</code></pre>
    			<p>( Kodun okunuşu:  p elemanının ilk satırında ki metinlerin rengi turuncu olsun. )</p>
				<!-- #: first-line Özelliği -->
                <h2>: first-letter Özelliği</h2>
				<p>Bir elemenanın ilk satırında ki ilk harfe/karaktere stil vermek için kullanılır. Sonra ki harfler/karakterler normal olarak görüntülenir.</p>
				<pre><code class="language-css">
p:first-letter { 
	color: orange; 
	font-size: 25px; 
}
				</code></pre>
				<p>(Kodun okunuşu:  p elemanının ilk satırında ki ilk harfin/karakterin rengi turuncu olsun ve font boyutu 25 piksel olsun.)</p>
    			<!-- #: first-letter Özelliği -->
                <h2>: after ve : before Özellikleri</h2>
				<p>Bir etiket içeriğinin önüne bir içerik eklenmek istendiğinde <strong>: before</strong> kullanılabilir. Bir etiket içeriğinin sonuna bir içerik eklenmek istendiğinde <strong>: after</strong> kullanılabilir. </p>
				<p>CSS Kodumuz: </p>
				<pre><code class="language-css">
p:before { 
	{content: url(dosya1.jpg);
} 
h1:after { 
  	{content: url(dosya2.jpg);
}
				</code></pre>
    			<p>HTML/XHTML Kodumuz: </p>
				<pre><code class="language-javascript">
&lt;p&gt; Bu bir paragraf &lt;/p&gt; 
&lt;h1&gt; Burası bir başlık&lt;/h1&gt;
				</code></pre>
				<p>Bu kod çalıştırıldığında <strong>p</strong> etiketlerinin başına <strong>dosya1.jpg</strong> adlı gorseli gösterecektir ve <strong>h1</strong> etiketlerinin sonuna <strong>dosya2.jpg</strong> adlı gorseli gösterecektir.</p>				
				<!-- #: after ve : before Özellikleri -->
                <a href="/css/index.php?page=saydam_gorsel" class="nextButton">Devam Et</a>
                <!-- #nextButton -->