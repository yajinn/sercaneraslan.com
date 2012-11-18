                <h1>XHTML Tablolar - Tables</h1>
				<p> Sayfamıza tablolar eklemek için <strong>"&lt;table&gt; "</strong> etiketini kullanacağız. Bu etiketi <strong>sadece ve sadece</strong> verilerin tablo şeklinde gözükmesi için <strong>kullanmalıyız</strong>. Bu etiket sayfa tasarımı yapma, sayfayı bölümlere ayırma gibi sebeplerle <strong>kullanılmamalıdır</strong>. <strong>"&lt;table&gt; "</strong> etiketi sayfaya <strong>ekstra yük</strong> getirmektedir ve sayfanın açılış süresini <strong>uzatmaktadır</strong>. Bizde hızlı bir sayfa istediğimiz için <strong>"&lt;table&gt; "</strong> etiketini olabildiğince az kullanacağız, hatta elimizden geldiğince kullanmayacağız. Tasarımlarımız için <strong>"&lt;div&gt; "</strong> etiketini kullanacağız <strong>"&lt;div&gt; "</strong> etiketini bir sonra ki konuda ele alacağız.</p>
				<ul> 
    				<li>Tabloya yeni bir satır eklemek için <strong>"&lt;tr&gt; "</strong> etiketini kullanacağız.</li>
    				<li>Tabloya yeni bir hücre eklemek için <strong>"&lt;td&gt; "</strong> etiketini kullanacağız.</li>
    				<li>Tabloda ki dış çerçeveyi görebilmek için <strong>" border "</strong> özniteliğini kullanacağız.</li>
    				<li>Tabloya başlık eklemek için ise <strong>"&lt;caption&gt; "</strong> etiketini kullanacağız.</li>
				</ul>
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

		&lt;!-- Tablo etiketi açıldı--&gt;
		&lt;table border="1"&gt;		
			&lt;caption&gt;Tablo Başlığı&lt;/caption&gt;
			&lt;tr&gt;
				&lt;td&gt; 1. satır , 1. hücre &lt;/td&gt;
				&lt;td&gt; 1. satır , 2. hücre  &lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt; 2. satır , 1. hücre &lt;/td&gt;
				&lt;td&gt; 2. satır , 2. hücre  &lt;/td&gt;
			&lt;/tr&gt;
		&lt;/table&gt;
		&lt;!-- Tablo etiketi kapandı--&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test11.html" >tıklayınız.</a> </strong> </p>	
				<!-- #XHTML Tablolar - Tables -->
				<h2>XHTML - Rowspan Özniteliği - Rowspan Attribute</h2>				
				<p> Row satırı ifade eder, rowspan ise satırların birleştirilmesini ifade eder. Bir satırı 1'den fazla satır büyüklüğünde göstermek istiyorsak <strong>" rowspan "</strong> özniteliğini kullanmalıyız. Örneğin Meyvelerin kilolarına göre fiyatlarının yazılı olduğu bir tabloda "1 kilo elma, 2 kilo elma, 3 kilo elma " olarak yazmak yerine elmayı sadece 1 kere yazsak ve her " Kilo " satırında gözükse bizi fazla kod yazmaktan kurtarmış olmaz mı?  </p>								
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

		&lt;table border="2"&gt;

			&lt;tr&gt;
				&lt;td&gt;Meyveler&lt;/td&gt;
				&lt;td&gt;Kilogram&lt;/td&gt;
				&lt;td&gt;Ücret&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td rowspan="3"&gt;Elma&lt;/td&gt;
				&lt;td&gt; 1 kg &lt;/td&gt;
				&lt;td&gt;1,5 TL&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt; 2 kg &lt;/td&gt;
				&lt;td&gt;3 TL&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt; 3 kg &lt;/td&gt;
				&lt;td&gt;4.5 TL&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td rowspan="3"&gt;Armut&lt;/td&gt;
				&lt;td&gt; 1 kg &lt;/td&gt;
				&lt;td&gt;1,5 TL&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt; 2 kg &lt;/td&gt;
				&lt;td&gt;3 TL&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt; 3 kg &lt;/td&gt;
				&lt;td&gt;4.5 TL&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/table&gt;
					
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test12.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML - Rowspan Özniteliği - Rowspan Attribute -->
				<h2> XHTML - Colspan Özniteliği - Colspan Attribute</h2>
				<p> Col, ingilizce "Column" ifadesinden bir kısaltmadır. "Column" sütun anlamına gelir, <strong>"colspan"</strong> ise sütunların birleştirilmesini ifade eder. Bir sütunu 1'den fazla sütun büyüklüğünde göstermek istiyorsak <strong>"colspan"</strong> özniteliğini kullanacağız. Örneğin, Arkadaşlarımızın doğdukları ayları içeren bir tablo yapacağız ama her ismin ve ayın üzerine ayrı ayrı "Arkadaşlarımın Doğduğu Ay" yazmak istemiyoruz o yüzden <strong>"colspan"</strong> özniteliğimize "2" vererek fazla kod yazmaktan kurtuluyoruz ve tablomuz güzel bir görünüme kavuşuyor. </p>				
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

		&lt;table border=&quot;2&quot;&gt;

			&lt;tr&gt;
				&lt;td colspan=&quot;2&quot;&gt;1988 Yılında Doğan Arkadaşlarım&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Savaş&lt;/td&gt;
				&lt;td&gt;Kasım&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Doruk&lt;/td&gt;
				&lt;td&gt;Şubat&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Oğuzhan&lt;/td&gt;
				&lt;td&gt;Ocak&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td colspan=&quot;2&quot; &gt;1982 Yılında Doğan Arkadaşlarım&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Osman&lt;/td&gt;
				&lt;td&gt;Mart&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Mustafa&lt;/td&gt;
				&lt;td&gt;Ekim&lt;/td&gt;
			&lt;/tr&gt;
			&lt;tr&gt;
				&lt;td&gt;Murat&lt;/td&gt;
				&lt;td&gt;Haziran&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/table&gt;
					
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test26.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML - Colspan Özniteliği - Colspan Attribute -->
				<h2> XHTML - Cellpadding Özniteliği - Cellpadding Attribute</h2>
				<p> Hücre içerisinde yazdığımız kelimeyi, kelime etrafında ki çerçeveden uzaklaştırmak istiyorsak yani kelimeye biraz daha fazla alan bırakalım istiyorsak <strong>"cellpadding"</strong> özniteliğini kullanacağız. </p>			
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

		&lt;table border=&quot;1&quot; cellpadding=&quot;15&quot;&gt;
			&lt;tr&gt;
				&lt;td&gt;Bakalım değiyor mu?&lt;/td&gt;
			&lt;/tr&gt;
		&lt;/table&gt; 
				
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test27.html" >tıklayınız.</a> </strong> </p>				
				<!-- #XHTML - Cellpadding Özniteliği - Cellpadding Attribute -->
				<h2> XHTML - Cellspacing Özniteliği - Cellspacing Attribute</h2>
				<p> Hücreler arası boşluğu ayarlamak istiyorsak <strong>"cellspacing"</strong> özniteliğini kullanacağız. </p>				
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
		&lt;table border=&quot;1&quot; cellspacing=&quot;5&quot;&gt;
			&lt;tr&gt;
				&lt;td&gt;Burası bir hücre &lt;/td&gt;
				&lt;td&gt;Burası bir hücre &lt;/td&gt;
			&lt;/tr&gt;
		&lt;/table&gt;
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test28.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML - Cellspacing Özniteliği - Cellspacing Attribute -->
                <a href="/xhtml/index.php?page=bolumleme" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->