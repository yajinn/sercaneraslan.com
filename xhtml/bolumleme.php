				<h1>XHTML Bölümleme - Div</h1>
				<p> Sayfamızda bölümleme yapmak, kutular eklemek, tasarım yapmak gibi işler için <strong>"&lt;div&gt; "</strong> etiketini kullanacağız, Sayfamızın iskeletini yapmak için bu etiket <strong>idealdir.</strong> Ancak bölümlere stil vermek, kutuları renklendirmek için daha önce bahsettiğim gibi <strong>CSS dilini öğrenmeyi bekleyeceğiz.</strong> Örnek olması için XHTML kodunda <strong>"style"</strong> özniteliğini kullanacağız.</p>
                <p>Not:</strong> Şimdilik <strong>"style"</strong> özniteliğini içinde yazan kodları dikkate almayınız. </p>				
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

		&lt;!-- 1. Div etiketi açıldı--&gt;
		&lt;div style=&quot;height: 200px; width: 250px; border: 1px black solid; margin-bottom: 20px;&quot;&gt;
			Burası bizim yaptığımız 1. kutu.
		&lt;/div&gt;
		&lt;!-- 1. Div etiketi kapandı--&gt;

		&lt;!-- 2. Div etiketi açıldı--&gt;
		&lt;div style=&quot;height: 400px; width: 500px; border: 1px black solid;&quot;&gt;
			Burası bizim yaptığımız 2. kutu.
		&lt;/div&gt;
		&lt;!-- 2. Div etiketi kapandı--&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test13.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Bölümleme - Div -->
				<h2>XHTML Span Etiketi</h2>
				<p> <strong>"&lt;span&gt; "</strong> etiketi <strong>"&lt;div&gt; "</strong> etiketinin daha esnek olanıdır. Sınırları yoktur. Mesela <strong>"&lt;span&gt; "</strong> etiketi içine bir yazı yazıldığında <strong>"&lt;span&gt; "</strong> etiketi yazının boyutu ile aynı boyutta büyüyecektir. <strong>"&lt;span&gt; "</strong> etiketi bir nevi  <strong>" Acil Durum "</strong> etiketidir diyebiliriz, hemen hemen herşey için kullanılabilir. Mesela bir paragraf içinde ki bir kelimenin rengi yeşil olsun istiyorsak  <strong>"&lt;p&gt; "</strong> etiketine komple stil vermeme gerek kalmadan sadece <strong>"&lt;span&gt; "</strong> etiketine stil vererek işimizi yapabiliyoruz.</p>	
					<div class="note"> 
						<p> <strong>Not:</strong> " &lt;span&gt; " etiketi "p", "h1", "h2", "h3", "h4", "h5", "h6", "div", "pre", "address", "fieldset", "ins", "del" gibi etiketler içinde kullanılmaıldır. Aksi takdirde kodumuz hata verecektir. </p>
					</div>	
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
		&lt;div&gt;

			&lt;span style=&quot;border: 1px gray solid;&quot;&gt;
				Burası bizim yazı alanımız
			&lt;/span&gt;

			&lt;br /&gt;&lt;br /&gt;

			&lt;p&gt;
				XHTML &lt;span style=&quot;color: green;&quot;&gt;Güzeldir.&lt;/span&gt;
			&lt;/p&gt;
		
		&lt;/div&gt;
	
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test24.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Span Etiketi -->
                <a href="/xhtml/index.php?page=listeler" class="nextButton">Devam Et</a>
				<!-- #nextButton -->