				<h1>XHTML Görseller - Images</h1>
				<p> Sayfamıza bir görsel eklemek için <strong>" &lt;img/&gt; "</strong> etiketini kullanacağız. Bu etiket açıldığı gibi kapanır. Bir web sayfasından yada server'dan görsel ekleyeceksek <strong>" src "</strong> yani source (kaynak) özniteliğini kullanmamız gerekmektedir. Ayrıca görselin yüklenemediği durumlar için mutlaka <strong>" alt "</strong> özniteliğini kullanmamız gerekir, bu kod içerisine "Yüklemedi" ya da benzeri şeyler yazabiliriz.</p> 
					<div class="note"> 
						<p> <strong>Not:</strong> " &lt;img&gt; " etiketi "p", "h1", "h2", "h3", "h4", "h5", "h6", "div", "pre", "address", "fieldset", "ins", "del" gibi etiketler içinde kullanılmaıldır. Aksi takdirde kodumuz hata verecektir.</p>
					</div>		
				<p> Eğer mouse ile fotoğraf üzerine geldiğimizde yazı ya da bilgi çıksın istiyorsak <strong>" title "</strong> özniteliğini kullanabiliriz. " alt " özniteliğini Internet Explorer tarayıcıları <strong>" title "</strong> olarak yorumlamaktadır. </p>
					<div class="note"> 
			         	<p> <strong>Not:</strong> " img " etiketi sadece <strong>" veri "</strong> gösterirken kullanılmaıdır, tasarım amacıyla <strong>" img "</strong> etiketi <strong>kullanılmamalıdır</strong>. <strong>CSS</strong> öğrendiğimiz zaman tasarımda görsel kullanmayı öğreneceğiz. Örneğin, <strong>" img "</strong> etiketini sayfamıza " Fotoğraf Galerisi " eklerken kullanabiliriz.   </p>
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

			&lt;!--Görsel yüklenemediği durumda "Yüklenemedi" yazacak--&gt;
			&lt;img src="http://www.sercaneraslan.com/istanbul.jpg" alt="Yüklenemedi" /&gt;
			
			&lt;!--Mouse ile foto üzerine geldiğinde "Sercan Eraslan" yazacak--&gt;
			&lt;img src="http://www.sercaneraslan.com/images/logo.jpg" alt="Yüklenemedi" title="Sercan Eraslan"/&gt;
			
		&lt;/p&gt;	
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test10.html" >tıklayınız.</a> </strong> </p> 
				<!-- #XHTML Görseller - Images -->
				<h2> XHTML - Görseli Link Yapmak </h2>
				<p> Linkinizi bir görsel olarak gösterebilirsiniz. Örneğin " istanbul.jpg " adlı görselimize tıklandığında kullanıcımızı istediğimiz bir sayfaya yönlendirebiliriz. </p> 				
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
			&lt;a href="http://www.sercaneraslan.com/"&gt;
				&lt;img src="http://www.sercaneraslan.com/images/logo.jpg" alt="Yüklenemedi" /&gt;			
			&lt;/a&gt;
		&lt;/p&gt;
	&lt;/body&gt;
&lt;/html&gt;	</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test25.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML - Görseli Link Yapmak -->
                <div class="tip">
					<h1>XHTML İpucu - Görsellerin yüklenemediğini nasıl test edeceğim?</h1>				
					<p> <strong>" src "</strong> kısmında bulunan linkte bir kaç karakter değiştirirseniz görsel yüklenmeyecektir. <br /> <br /> HTML dosyanız masaüstünde ise <strong>" src "</strong> link alanına görselin adını yazarak örneğin <strong>" a.jpg "</strong> diyerek görseli sayfamızda gösterebiliriz. Sayfamızı bir klasör içine attıysak <strong>" klasor_adi/a.jpg "</strong> şeklinde çağırabiliriz. </p>
				</div>
				<div class="tip">
					<h1>XHTML İpucu - Hızlı Sayfa</h1>				
					<p> Görseller, sayfanın yüklenme hızını azaltacağından dolayı görselleri az kullanmanızı öneririm ayrıca kullanılan görsellerin boyutlarını olabildiğince düşük tutmanız sayfanızın hızlı kalmasını sağlayacaktır. </p>
				</div>
				<a href="/xhtml/index.php?page=tablolar" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->