				<h1>XHTML Listeler - Lists</h1>
				<h2>XHTML Ul Etiketi - Ul Tag</h2>
				<p> <strong>&lt;ul&gt;</strong> etiketinin açılımı <strong>"Unordered List"</strong> 'tir. <strong>"Unordered List"</strong> ise <strong>"Sırasız Liste"</strong> anlamına gelmektedir. Metinlerimizi veya cümlelerimizi maddeler halinde yazmak için <strong>"&lt;ul&gt; "</strong> ve <strong>"&lt;li&gt; "</strong> etiketlerini kullanacağız. Bu etiketleri kullanmaız halinde maddelerimizin solunda siyah yuvarlak bir ikon çıkacaktır. Tabi bu ikonları <strong>CSS</strong> ile değiştirebiliriz. </p>
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

		&lt;p&gt; Marketten Alınacaklar&lt;/p&gt;
		
		&lt;ul&gt;
			&lt;li&gt; Ekmek &lt;/li&gt;
			&lt;li&gt; Süt &lt;/li&gt;
			&lt;li&gt; Yumurta&lt;/li&gt;
		&lt;/ul&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test14.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Ul Etiketi - Ul Tag -->
				<h2>XHTML Ol Etiketi - Ol Tag</h2>
				<p> <strong>&lt;ol&gt;</strong> etiketinin açılımı <strong>"Ordered List"</strong> 'tir. <strong>"Ordered List"</strong> ise <strong>"Sıralı Liste"</strong> anlamına gelmektedir. Maddelerimizi, madde başlarında rakam ile göstermek için <strong>"&lt;ol&gt; "</strong> ve <strong>"&lt;li&gt; "</strong> etiketlerini kullanacağız. Bu etiketleri kullanmaız halinde maddelerimizin solunda rakamlar çıkacaktır. </p>
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

		&lt;p&gt; Marketten Alınacaklar&lt;/p&gt;
		
		&lt;ol&gt;
			&lt;li&gt; Ekmek &lt;/li&gt;
			&lt;li&gt; Süt &lt;/li&gt;
			&lt;li&gt; Yumurta&lt;/li&gt;
		&lt;/ol&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test15.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Ol Etiketi - Ol Tag -->
				<h2>XHTML Tanım Listeleri - Definition Lists</h2>
				<p>Bir tanımı ve açıklamasını karşılıklı olarak yazmak istiyorsak bu listeleme stilini kullanacağız.</p>
				<ul>
					<li>Listeyi açmak için <strong> &lt;dl&gt; </strong> etiketi kullanılır.</li>
					<li>Tanım için <strong> &lt;dt&gt; </strong> etiketi kullanılır.</li>
					<li>Açıklama için ise <strong> &lt;dd&gt; </strong> etiketi kullanılır.</li>
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

		&lt;dl&gt;
			&lt;dt&gt; Baklava: &lt;/dt&gt;
				&lt;dd&gt; Çok güzeldir, o olmadan olmaz. &lt;/dd&gt;
			&lt;dt&gt; Acı sos:&lt;/dt&gt;
				&lt;dd&gt; Kimi sever, kimi sevmez. &lt;/dd&gt;
		&lt;/dl&gt;
		
		&lt;p&gt;Ya da şu şekilde de kullanılabilir.&lt;/p&gt;
		
		&lt;dt&gt; Ülke: &lt;/dt&gt;
			&lt;dd&gt; 
				&lt;select name="ulke"&gt; 
					&lt;option value="turkiye">Türkiye&lt;/option&gt; 
					&lt;option value="azerbeycan">Azerbeycan&lt;/option&gt;  
				&lt;/select&gt; 
			&lt;/dd&gt;
		&lt;dt&gt; Şehir:&lt;/dt&gt;
			&lt;dd&gt;
				&lt;select name="sehir"&gt; 
					&lt;option value="istanbul">İstanbul&lt;/option&gt;  
					&lt;option value="ankara">Ankara&lt;/option&gt;  
				&lt;/select&gt; 
			&lt;/dd&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test32.html" >tıklayınız.</a> </strong> </p>
				<p> <strong>&lt;dt&gt;</strong> ve <strong>&lt;dd&gt;</strong> etiketleri içerisinde diğer etiketler kullanılabilir. Bu etiketlere stil vererek tanım ve açıklamayı aynı hizaya getirebilirsiniz. </p>
                <p>Not: Şimdilik, ikinci örnekte ki <strong>&lt;select&gt;</strong> ve <strong>&lt;option&gt;</strong> etiketlerini dikkate almayanız. Onları bir sonra ki konuda ele alacağız.</p>
				<!-- #XHTML Tanım Listeleri - Definition Lists -->
                <a href="/xhtml/index.php?page=formlar" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->