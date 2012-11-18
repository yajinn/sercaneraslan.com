				<h1>XHTML Paragraflar - Paragraphs</h1>
				<p> Sayfamızda yazdıklarımızı paragraf şeklinde göstermek için <strong>"&lt;p&gt;"</strong> etiketini kullanacağız. Paragraf etiketi <strong>"&lt;p&gt;"</strong> ile açılır, <strong>"&lt;/p&gt;"</strong> ile kapanır. </p>
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
		&lt;p&gt; Bu bir paragraf &lt;/p&gt;
		&lt;p&gt; Bu ise başka bir paragraf &lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test5.html">tıklayınız.</a> </strong> </p>
				<!-- #XHTML Paragraflar - Paragraphs-->								
				<h2>XHTML Satır Sonu - Br Etiketi ( Br Tag )</h2>
				<p> <strong>"&lt;br /&gt;"</strong> etiketi kullanıldığı yerde satırın sonunun geldiğini bildirir ve gelecek olan kodun bir alt satırdan başlmasını sağlar, bir nevi <strong>" Enter "</strong> tuşunun görevini yapar. Gördüğünüz üzere " &lt;br /&gt; " etiketi de açıldığı gibi kapanıyor. Dikkat edilmesi gereken yer ise <strong>" br "</strong>  yazıldıktan sonra <strong>bir boşluk</strong> olduğudur. Boşluk olmasada kod çalışır ancak <strong>kurallara uygun</strong> bir kodun olması için <strong>" br " boşluk " / "</strong> kullanmalıyız. </p>
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
		&lt;p&gt; Burası &lt;br /&gt; bizim &lt;br /&gt; paragrafımız.  &lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test6.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Satır Sonu - Br Etiketi ( Br Tag )-->
				<h2> XHTML Pre Etiketi - Pre Tag</h2>
				<p> XHTML , sayfalarda arka arkaya 2 boşluk kullanılmasına imkan vermiyor yada enter tuşuna basıldığında bir alt satıra geçmesine imkan vermiyor ama XHTML onuda düşünüyor ve bize <strong>"&lt;pre&gt;"</strong> etiketini armağan ediyor.</p>
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
		&lt;pre&gt; Buradan başladık ve              15 satır boşluk bıraktık daha sonra 

enter tuşuna 2 kez bastık ve satırımız aşağıya kaydı.
		&lt;/pre&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test22.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Pre Etiketi - Pre Tag -->
				<div class="tip">
					<h1> XHTML İpucu - Sayfa Tasarımları </h1>		
					<p> Unutmamak gerekir ki yapılan web sayfaları ekran çözünürlüğüne göre her bilgisayarda farklılık gösterebilir. Bu nedenle tasarımlarınızı <strong>1024x768</strong> boyutlarına uygun olarak yapmanızı öneririm. Ayrıca yazdığınız kod geçerli bir kod değilse kodunuz her tarayıcıda farklı çıkacaktır. Bazı kodlarınız geçerli olsa bile Internet Explorer'da yanlış görünebilir. İlerleyen sayfalarda bu konuya değineceğiz. </p>
				</div>
				<div class="tip">
					<h1> XHTML İpucu - Boşluk Verme </h1>		
					<p> XHTML ile sadece bir boşluk verilebilir ekstra ikinci boşluk verilmek istenirse <strong>" &amp;nbsp; "</strong> kodu eklenmelidir. Bu kod eklenmeden boşluk verilirse tarayıcı sadece bir boşluk gösterecektir. Bu boşluk kodunu arka arkaya yazarak istediğiniz kadar boşluk kullanabilirsiniz fakat birden fazla kez kullanmanız önerilmez.</p>
				</div>
				<a href="/xhtml/index.php?page=metin_formatlari" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->