				<h1>XHTML Formlar - Forms</h1>
				<p> Form 'lar kullanıcıdan / ziyaretçiden bilgi almak için kullanılır. Alınan bilgileri ise farklı yazılım dilleri (Javascript, PHP vs.) ile kullanabiliriz. Yani formların esas görevi "Veri taşımak" tır. Örneğin bir kullanıcı giriş sayfasında bizden kullanıcı adı ve şifre istenir, bizde kullanıcı adı ve şifremizi sisteme gireriz. Diğer yazılım dilleri (Javascript, PHP vs.) ile formlardan bilgiyi alıp veritabanından doğrulama yapılabilir. </p>  
				<p>Sayfalarda form alanları oluşturmak için <strong>"&lt;form&gt; "</strong> etiketini kullanacağız. Bu formlar içerisinde kullanıcıya yazılabilir bir alan oluşturmak için ise <strong>"&lt;input&gt; "</strong> etiketini kullanacağız. <strong>"&lt;input&gt; "</strong> etiketine <strong>"type"</strong> ve <strong>"name"</strong> öznitelikleri eklenmelidir. <strong>"type"</strong> özniteliği için <strong>"text"</strong> değerini yazacağız, <strong>"name"</strong> özniteliği için ise kendi belirlediğimiz bir input adı yazacağız, JavaScript öğrendiğimiz zaman <strong>"name"</strong> özniteliğini ve kullanıcının girdiği bilgiyi nasıl alabileceğimizi göreceğiz. </p>
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
		
		&lt;p&gt; Lütfen en sevdiğiniz 3 hayali kahramanınızı sırasıyla yazınız. &lt;/p&gt;
		
		&lt;div&gt;
			1. Kahramanım:
			&lt;input type=&quot;text&quot; name=&quot;birincikahraman&quot; /&gt; &lt;br /&gt;

			2. Kahramanım:
			&lt;input type=&quot;text&quot; name=&quot;ikincikahraman&quot; /&gt; &lt;br /&gt;

			3. Kahramanım:
			&lt;input type=&quot;text&quot; name=&quot;ucuncukahraman&quot; /&gt;
		&lt;/div&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test16.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Formlar - Forms -->
				<h2>XHTML Radio Butonları - Radio Button</h2>
				<p> Örneğin kullanıcımızın 2 özellikten sadece birini seçmesini istiyorsak <strong>"&lt;type&gt;"</strong> özniteliği için <strong>"&lt;radio&gt; "</strong> özelliğini kullanacağız. Dikkat edilmesi gereken nokta <strong>"&lt;type&gt;"</strong> özniteliği için <strong>"&lt;radio&gt;"</strong> özelliği seçildiğinde <strong>"&lt;name&gt;"</strong> özniteliklerinin ikiside aynı isime sahip olmalıdır. </p>
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

		&lt;p&gt; Lütfen en sevdiğiniz Hayali kahramanınızı seçiniz. &lt;/p&gt;
		
		&lt;div&gt;
			Superman:
			&lt;input type=&quot;radio&quot; name=&quot;kahraman&quot; /&gt; &lt;br /&gt;
			Batman:
			&lt;input type=&quot;radio&quot; name=&quot;kahraman&quot; /&gt; &lt;br /&gt;
		&lt;/div&gt;
			
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test17.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Radio Butonları - Radio Button -->
				<h2>XHTML Seçim Kutuları - CheckBoxes</h2>
				<p> Örneğin kullanıcımıza sevdiği spor dallarını soruyoruz ve birden fazla seçenek seçebilmesini istiyorsak<strong>"&lt;type&gt;"</strong> değeri için <strong>"&lt;checkbox&gt; "</strong> özelliğini kullanacağız. </p>
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

		&lt;p&gt; Lütfen sevdiğiniz spor dallarını seçiniz. &lt;/p&gt;

		&lt;div&gt;
			Basketbol:
			&lt;input type=&quot;checkbox&quot; name=&quot;basketbol&quot; /&gt; &lt;br /&gt;
			Tenis:
			&lt;input type=&quot;checkbox&quot; name=&quot;tenis&quot; /&gt; &lt;br /&gt;
			Yüzme:
			&lt;input type=&quot;checkbox&quot; name=&quot;yuzme&quot; /&gt;
		&lt;/div&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test18.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Seçim Kutuları - CheckBoxes -->
				<h2>XHTML Gönder Butonu - Submit Button</h2>
				<p> Örneğin kullanıcımızdan kullanıcı adı veya şifre ya da benzeri bir bilgi istiyorsak <strong>"&lt;type&gt;"</strong> özniteliği için <strong>"&lt;submit&gt; "</strong> özelliğini kullanacağız. </p>
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

		&lt;p&gt; Lütfen kullanıcı adınızı giriniz. &lt;/p&gt;

		&lt;div&gt;
			Kullanıcı Adı:
			&lt;input type=&quot;text&quot; name=&quot;kullanıcı&quot; /&gt;
			&lt;input type=&quot;submit&quot; value=&quot;Gönder&quot; /&gt;
		&lt;/div&gt; 
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test19.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Gönder Butonu - Submit Button -->
				<h2>XHTML Yazılabilir Alan - Textarea</h2>
				<p> Bir kutu içerisinde yazılabilir bir alan oluşturmak istiyorsak<strong>"&lt;textarea&gt;"</strong> etiketini kullanacağız. <strong>"&lt;rows&gt;"</strong>  yükseklik değeri için <strong>"&lt;cols&gt;"</strong> ise genişlik değeri için kullanılmaktadır.</p>		
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
			&lt;textarea rows="10" cols="50"&gt; Burası bizim yazılabilir alanımız&lt;/textarea&gt; 
		&lt;/div&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test20.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Yazılabilir Alan - Textarea -->
				<h2>XHTML Açılır Seçim Kutusu - Drop Down</h2>
				<p> Bir açılır kutu içerisinde seçenekleri listelemek istiyorsak <strong>"&lt;select&gt;"</strong> etiketini kullanacağız. Menü içerisine seçenekleri eklemek için ise <strong>"&lt;option&gt;"</strong> etiketini kullanacağız. Menüde seçili olarak gelmesini istediğimiz seçenek için <strong>&lt;selected="selected"&gt;</strong> kodunu kullanmamız gerekiyor. Eğer seçim kutusunda ki seçenekleri gruplandırmak istiyorsak <strong>&lt;optgroup&gt;</strong> etiketini kullanacağız.</p>		
				<p>Not: <strong>" &lt;select&gt; "</strong> etiketi "p", "h1", "h2", "h3", "h4", "h5", "h6", "div", "pre", "address", "fieldset", "ins", "del" gibi etiketler içinde kullanılmaıldır. Aksi takdirde kodumuz hata verecektir.</p>
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
			&lt;p&gt;Tercih ettiğiniz araba modelini seçiniz. &lt;/p&gt;

			&lt;select name=&quot;arabalar&quot;&gt;

				&lt;optgroup label="Lüx modeller"&gt;
					&lt;option value=&quot;honda&quot;&gt;Honda S2000&lt;/option&gt;
					&lt;option value=&quot;honda&quot;&gt;Honda Accord 2010&lt;/option&gt;
				&lt;/optgroup&gt;

				&lt;optgroup label="Uygun modeller"&gt;
					&lt;option value=&quot;honda&quot; selected=&quot;selected&quot;&gt;Honda Civic 1999&lt;/option&gt;
					&lt;option value=&quot;honda&quot;&gt;Honda CRX&lt;/option&gt;
				&lt;/optgroup&gt;

			&lt;/select&gt;
		&lt;/div&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test21.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Açılır Seçim Kutusu - Drop Down -->
				<h2>XHTML Label etiketi - Label Tag</h2>
				<p>Öğrendiğimiz üzere <strong>Radio buton</strong>larda sadece yuvarlak alan içine tıkladığımızda seçeneğimiz işaretleniyor. Biz <strong>radio buton</strong>un yanında ki yazıya tıklandığında da seçeneğimiz işaretlensin istiyorsak bu etiketi kullanacağız.</p>
				<p> <strong>label</strong> etiketi içerisine <strong>radio buton</strong>u koyarak bu özelliği çalıştırabiliriz. Eğer <strong>label</strong> etiketini radio butonunun dışında (üstünde,altında,sağında ya da solunda) kullanacaksak <strong>input</strong> etiketine <strong>id</strong> vermemiz gerekir ve verilen <strong>id</strong> 'yi <strong>label</strong> etiketi içerisine <strong>for</strong> özniteliği olarak yazmamız gerekir.</p>
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

		&lt;p&gt; Lütfen en sevdiğiniz hayali kahramanınızı seçiniz. &lt;/p&gt;
		
		&lt;div&gt;
			&lt;label&gt;
				Batman&lt;input type="radio" name="kahraman" /&gt;
			&lt;/label&gt;
			
			&lt;br /&gt;
			
			&lt;label for="superman">Superman&lt;/label&gt;
			&lt;input type="radio" name="kahraman" id="superman" /&gt;
		&lt;/div&gt;
			
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test33.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Label etiketi - Label Tag -->
				<h2>XHTML Fieldset ve Legend Etiketleri - Fieldset and Legend Tags</h2>
				<p> <strong>"&lt;fieldset&gt;"</strong> etiketi form elemanlarını gruplamak için kullanılır ve <strong>"&lt;div&gt;"</strong> etiketinde olduğu gibi form elemanlarının çevresini çizerek kapsar. <strong>"&lt;legend&gt;"</strong> etiketi ise hem form elemanlarının çevresini çizerek kapsar hem de çerveye başlık ekler. İkisi ayrı ayrı ya da içi içe kullanılabilir. </p>	
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

		&lt;fieldset&gt;
			&lt;legend&gt; Bu etiket hoşunuza gitti mi?&lt;/legend&gt;

			Evet
			&lt;input name=&quot;yes&quot; type=&quot;radio&quot; value=&quot;yes&quot;/&gt;
			
			Hayır
			&lt;input name=&quot;no&quot; type=&quot;radio&quot; value=&quot;no&quot;/&gt;
		&lt;/fieldset&gt;
		
	&lt;/body&gt;
&lt;/html&gt;</code></pre>
				<p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test23.html" >tıklayınız.</a> </strong> </p>
				<!-- #XHTML Fieldset ve Legend Etiketleri - Fieldset and Legend Tags -->
				<a href="/xhtml/index.php?page=ozel_karakterler" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->