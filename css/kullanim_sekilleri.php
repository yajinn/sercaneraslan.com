				<h1>CSS Kullanım Şekilleri - How to</h1>
				<p> 3 farklı <strong>CSS</strong> kullanım şekli vardır.</p>
				<ul>
					<li>Harici Stil Kullanımı (External Style Sheet)</li>
					<li>Dahili Stil Kullanımı (Internal Style Sheet)</li>
					<li>Etiket İçinde Stil Kullanımı (Inline Style)</li>
				</ul>
				<h2>CSS Harici Stil Kullanımı (External Style Sheet) </h2>
				<p>Bu kullanım şekli, bizim kullanmamız gereken <strong>CSS</strong> kullanım şeklidir. İsminden de anlaşılacağı gibi <strong>CSS</strong> kodlarımız ayrı bir dosyada olacaktır ve biz bu dosyayı <strong>&lt;link&gt;</strong> etiketi içinde çağıracağız. CSS dosyamızın  uzantısı <strong>".css"</strong> olmalıdır ve <strong>".css"</strong> dosyamızda sadece <strong>CSS</strong> kodları olmalıdır.</p>
				<p> <strong>HTML/XHTML</strong> dosyamızda <strong>CSS</strong> 'i nasıl çağırıyoruz görelim...</p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; 
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt; 
	&lt;head&gt; 
		&lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
		&lt;link rel="stylesheet" type="text/css" href="dosyaAdi.css" /&gt; 
		&lt;title&gt;Başlık Buraya&lt;/title&gt; 
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p&gt;İçerik Buraya&lt;/p&gt;
	&lt;/body&gt; 
&lt;/html&gt; </code></pre>
				<!-- #CSS Harici Stil Kullanımı -->
                <h2>CSS Dahili Stil Kullanımı (Internal Style Sheet)</h2>
				<p>Bu kullanım şeklinde <strong>CSS</strong> kodlarımızı <strong>&lt;head&gt;</strong> etiketi altında <strong>&lt;style&gt;</strong> etiketi içine yazacağız.  </p>
				<p> <strong>&lt;style&gt;</strong> etiketi içinde nasıl <strong>CSS</strong> kodu yazıyoruz görelim...</p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; 
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;			 
	&lt;head&gt;
	&lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
	&lt;title&gt;Başlık Buraya&lt;/title&gt; 
	&lt;style&gt; 
		p {
			color: black; 
			text-align: center; 
		}
	&lt;/style&gt; 
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p&gt;İçerik Buraya&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt; </code></pre>
				<!-- #CSS Dahili Stil Kullanımı -->
                <h2>CSS Etiket İçinde Stil Kullanımı (Inline Style)</h2>
				<p> Bu kullanım şeklinde ise <strong>CSS</strong> kodlarımızı <strong>HTML/XHTML</strong> etiketleri içine <strong>"style"</strong> özniteliği ile birlikte yazacağız.</p>
				<p> <strong>"style"</strong> özniteliği ile nasıl <strong>CSS</strong> kodu yazıyoruz görelim...</p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; 
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt; 
	&lt;head&gt;
		&lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
		&lt;title&gt;Başlık Buraya&lt;/title&gt; 
	&lt;/head&gt;
	&lt;body&gt;
		&lt;p style="color: black; text-align: center;"&gt;İçerik Buraya&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt; </code></pre>
				<!-- #CSS Etiket İçinde Stil Kullanımı -->
                <div class="tip">  
                    <h1>CSS İpucu - Birden Fazla Kullanım Şekli Kullanılırsa Ne Olur?</h1>
				    <p>Eğer dosyalarımızda 3 kullanım şeklide varsa öncelik " Harici Kullanım " şeklinde (External Style Sheet) olacak ve daha sonra da öncelik " Dahili Kullanım " şeklinde (Internal Style Sheet) olacak. En son öncelikte " Etiket İçinde " ki (Inline Style) kullanım şeklinde olacak. Daha öncede belirttiğimiz gibi biz sadece " Harici Kullanım " şeklini (External Style Sheet) kullanacağız.</p>
				</div>
				<a href="/css/index.php?page=seciciler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->