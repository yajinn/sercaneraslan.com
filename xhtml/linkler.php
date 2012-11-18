				<h1>XHTML Linkler - Links</h1>
				<p> Bir web sayfasına, bir fotoğrafa veya bir videoya link vermek için <strong>" &lt;a&gt; "</strong> etiketini kullanacağız. </p>
				<ul>
					<li> Bir link verilmek isteniyorsa: <strong>&lt;a href="linkAdresi"&gt; Link &lt;/a&gt;</strong> </li>
					<li> Bir link içinde mail adresi verilmek isteniyorsa: <strong>&lt;a href="mailto:mailAdresi"&gt; Mail &lt;/a&gt;</strong> </li>
				</ul>
				<div class="note"> 
					<p> <strong>Not:</strong> " &lt;a&gt; " etiketi "p", "h1", "h2", "h3", "h4", "h5", "h6", "div", "pre", "address", "fieldset", "ins", "del" gibi etiketler içinde kullanılmaıldır. Aksi takdirde kodumuz hata verecektir. </p>
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
		&lt;p&gt;
			&lt;a href=&quot;http://www.sercaneraslan.com&quot;&gt;Sercan'ın sitesi&lt;/a&gt;
			&lt;br /&gt;
			&lt;a href=&quot;mailto:example@example.com&quot;&gt;Mail Gönder&lt;/a&gt;
			&lt;!-- Satır arası vermek için br etiketini kullandık --&gt;
		&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test9.html" >tıklayınız.</a> </strong> </p>
				<a href="/xhtml/index.php?page=gorseller" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->