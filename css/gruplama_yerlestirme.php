					<h1>CSS Seçicileri Gruplama - Grouping Selectors</h1>
					<p>Aşağıdaki gibi bir kodumuz varsa;</p>
					<pre><code class="language-css">
h1 {
	color: green;
}
h2 {
	color: green;
}
p {
	color: green;
}
					</code></pre>
					<p>Yani tüm seçicilerin özellikleri ve değerleri aynı ise bu seçicileri tek bir <strong>CSS</strong> kodu ile tanımlayabiliriz. Ayrıca bu durumda kod tasarrufuda yapmış olacağız. Seçicileri virgül ile ayırarak gruplamalıyız. Yukarıda ki kodu nasıl küçültüp grupladığımızı görelim.</p>
					<pre><code class="language-css">
h1, h2, p {
	color: green;
}
					</code></pre>
					<h2>CSS Seçicileri İç içe Yerleştirme - Nesting Selectors </h2>
					<p>Aşağıdaki gibi bir <strong>XHTML</strong> kodumuz var;</p>
					<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http: //www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; 
&lt;html xmlns="http: //www.w3.org/1999/xhtml" lang="en" xml: lang="en"&gt; 
	&lt;head&gt; 
		&lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
		&lt;link rel="stylesheet" type="text/css" href="dosyaAdi.css" /&gt; 
		&lt;title&gt;Başlık Buraya&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;div class="deneme"&gt;
			&lt;p&gt;Bu bir paragraf.&lt;/p&gt;
		&lt;/div&gt;
		&lt;p&gt;Bu da bir paragraf.&lt;/p&gt;
	&lt;/body&gt; 
 &lt;/html&gt; 
					</code></pre>
					<p>... ve tüm <strong>p</strong> etiketlerine genel bir stil verdik ama <strong>"deneme"</strong> class'ının altında ki <strong>p</strong> etiketine ayrı stil vermek istiyoruz. Bunun için " üstte ki seçici boşluk altta ki seçici " <strong>".deneme p {color: white;}"</strong> kulanımını uygulayabiliriz. <strong>CSS</strong> kodumuzu görelim. </p>
					<pre><code class="language-css">
.deneme {
	background-color: blue;
}
p {
	color: gray;
}
.deneme p {
	color: white;
}
					</code></pre>
					<p>Kodun tarayıcıda nasıl göründüğüne bakmak için <a href="test/test31.html">tıklayınız.</a></p>			
                    <!-- #CSS Seçicileri İç içe Yerleştirme -->
            	<a href="/css/index.php?page=boyut" class="nextButton">Devam Et</a>
                <!-- #nextButton -->