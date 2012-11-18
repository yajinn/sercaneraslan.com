				<h1>XHTML Başlıklar - Headings</h1>
				<p> Sayfamıza başlık eklemek için <strong>" &lt;h1&gt; "</strong> etiketini kullanacağız. Başlık etiketleri <strong>" &lt;h1&gt; "</strong> ile <strong>" &lt;h6&gt; "</strong> arasındadır. <strong>" &lt;h1&gt; "</strong> boyut olarak en büyük başlık etiketidir, <strong>" &lt;h6&gt; "</strong> ise boyut olarak en küçük başlık etiketidir. Bu kodu sadece başlık yapmak için kullanmak gerekiyor. Arama motorları, başlık etiketlerinin içeriklerini kullanmaktadır o yüzden başlık etiketi kullanmak önemlidir. </p>
				<p> <strong>Örnek olarak görelim...</strong> </p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en&quot; xml:lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;
		&lt;title&gt;
			Sayfamızın Başlığı Burada Olacak
		&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt; İlk Başlık Kodumuz Burada &lt;/h1&gt;
		&lt;h2&gt; İlk Başlık Kodumuz Burada &lt;/h2&gt;
		&lt;h3&gt; İlk Başlık Kodumuz Burada &lt;/h3&gt;
		&lt;h4&gt; İlk Başlık Kodumuz Burada &lt;/h4&gt;
		&lt;h5&gt; İlk Başlık Kodumuz Burada &lt;/h5&gt;
		&lt;h6&gt; İlk Başlık Kodumuz Burada &lt;/h6&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test2.html" >tıklayınız.</a></strong> </p>
				<!-- #XHTML Başlıklar - Headings -->
                <h2> XHTML Yatay Çizgi - Hr Etiketi ( Hr Tag )</h2>
				<p> <strong>" &lt;hr /&gt; "</strong> etiketi sayfada boylu boyunca yatay bir çizgi yapmamızı sağlar. Gördüğünüz üzere <strong>" &lt;hr /&gt; "</strong> etiketi açıldığı gibi kapanıyor. Açıldığı gibi kapanan bir kaç etiket daha var bunları ilerledikçe göreceğiz. Dikkat edilmesi gereken diğer bir konu ise <strong>" hr "</strong> yazıldıktan sonra <strong>bir boşluk</strong> olduğudur. Boşluk olmasada kod çalışır ancak <strong>kurallara uygun</strong> bir kodun olması için <strong>" hr " boşluk " / " </strong>kullanmalıyız. </p>
				<p> <strong>Örnek olarak görelim...</strong> </p>	
				<pre><code class="language-javascript">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en&quot; xml:lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;
		&lt;title&gt;
			Sayfamızın Başlığı Burada Olacak
		&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;
		&lt;h1&gt; İlk Başlık Kodumuz Burada &lt;/h1&gt;
		&lt;hr /&gt;
		&lt;h2&gt; İlk Başlık Kodumuz Burada &lt;/h2&gt;
		&lt;hr /&gt;
		&lt;h3&gt; İlk Başlık Kodumuz Burada &lt;/h3&gt;
		&lt;hr /&gt;
		&lt;h4&gt; İlk Başlık Kodumuz Burada &lt;/h4&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test3.html" >tıklayınız.</a></strong> </p>
				<!-- #XHTML Yatay Çizgi - Hr Etiketi ( Hr Tag ) -->
                <h2> XHTML Yorum Ekleme - Comments </h2>
				<p> <strong>Yorumlar,</strong> yazılan kodun daha kolay okunmasını sağlamaktadır. Yorumlar tarayıcılar tarafından <strong>yok sayılır</strong>, yani yorumu dikkate almaz. Bir kodda ne kadar çok yorum varsa kod o kadar <strong>iyidir</strong>. Yazdığınız bir kodu birkaç sene sonra açtığınızda yorumun ne kadar önemli olduğunu göreceksiniz.  Yorum etiketi  <strong>" &lt;!-- "</strong> karakterleri ile açılır ve <strong>" --&gt; "</strong> karakterleri ile kapatılır ve yorumumuz bu etiket içine yazılır. </p>
				<p> <strong>Örnek olarak görelim...</strong> </p>
				<pre><code class="language-javascript">&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en&quot; xml:lang=&quot;en&quot;&gt;
	&lt;head&gt;
		&lt;meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /&gt;
		&lt;title&gt;
			Sayfamızın Başlığı Burada Olacak
		&lt;/title&gt;
	&lt;/head&gt;
	&lt;body&gt;

		&lt;!-- Burada başlıklarımız ve yatay çizgilerimiz başlıyor. --&gt;

		&lt;h1&gt; İlk Başlık Kodumuz Burada &lt;/h1&gt;
		&lt;hr /&gt;
		&lt;h2&gt; İlk Başlık Kodumuz Burada &lt;/h2&gt;
		&lt;hr /&gt;
		&lt;h3&gt; İlk Başlık Kodumuz Burada &lt;/h3&gt;
		&lt;hr /&gt;
		&lt;h4&gt; İlk Başlık Kodumuz Burada &lt;/h4&gt;
		
		&lt;!-- Burada başlıklarımız ve yatay çizgilerimiz bitiyor. --&gt;

	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test4.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Yorum Ekleme - Comments -->
                <div class="tip">
					<h1> XHTML İpucu - Kaynak Kodu / Source Code </h1>	
					<p>Hoşunuza giden bir web sayfası gördünüz ve nasıl yapıldığını merak ettiniz; Sayfaların kodlarını / kaynağını görebilmek için sayfa üzerindeyken sağ tıklayıp "Kaynağı Göster" diyebilirsiniz. </p>
				</div>
				<a href="/xhtml/index.php?page=paragraflar" class="nextButton">Devam Et</a>
				<!-- #nextButton -->