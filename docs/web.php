<?php
	include ("../app/functions/functions.php");
// Sayfanın title etiketi
	$pageTitle = "Sercan Eraslan - Web Önyüzü Nasıl Olmalı?";
// Header'a kadar olan HTML'i sayfaya ekliyor.
    mainheader($pageTitleRoot, $pageTitle, $addTag, $subPage);
?>
		<section>
			<article id="web">
				<h1>Web Önyüzü Nasıl Olmalı?</h1>
				<p>Bu yazı <a href="http://yuxel.net/?module=my&id=15">Osman Yüksel</a> katkılarıyla hazırlanmıştır.</p>
				<p>Web önyüzü (Front-End) temel olarak üç öğeden oluşur, İşaretleme Dili, Stil Dosyaları ve Dinamik Öğeler.</p>
				<p><strong>İşaretleme Dili</strong> : HTML, XHTML, HTML5, WML (Wireless Markup Language - Mobil Cihazlarda kullanılır.) gibi işaretleme dilleri. Bunlar sayfanın ana iskeletini oluşturur.</p>
				<p><strong>Stil Dosyaları</strong> : CSS. Bunlar ise iskeletin üzerine giydirilen görsel öğeleri belirler.</p>
				<p><strong>Dinamik Öğeler</strong> : JavaScript. JavaScript ise sayfalarda, istemci (client) tarafında dinamik istekler yapmamıza yardımcı olur.</p>
				<p>Web önyüz kodlamada yapılan en büyük yanlışlardan birisi de bu üç öğenin birbiri içerisinde gereğinden fazla yer almasıdır. Bu üç öğenin etkileşimi kaçınılmaz olsa da, bu etkileşimi en aza indirmek, hem daha güzel/anlaşılır kodlar üretmek, hem de daha hızlı ve kararlı web önyüzleri üretmemizde faydalı olur. Bu yazıda, nasıl daha standart, anlaşılabilir, güzel, sade web önyüz kodları üretebileceğiniz anlatılmaya çalışılacaktır. Bir web önyüzü;</p>
				<h2>Standartlara uygun olmalı</h2>
				<p>Web sayfanızda muhakkak, hangi işaretleme dili kullandığınızı belirtin ve kodlarınızı belirtilen bu işaretleme dillerine uygun <strong>standart</strong>larda yazmaya özen gösterin.</p>
				<p>XHTML Strict için :</p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
				</code></pre>
				<p>HTML5 için :</p>
				<pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
				</code></pre>
				<p>Bu örnekte, üretilen işaretleme dilinin, <a href="http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd</a> adresinde belirlenen DTD(Document Type Definition/Belge Tipi Tanımlaması)'ye uygun olarak <strong>XHTML 1.0 Strict</strong> olması beklenir. Tarayıcılar bu bu tanımlamaya uymayan hataların bir çoğunu tolere etse de, bu tolere etme işlemi tarayıcıların ekstra işlem yapmasına, pek hissedilmeyen küçük performans kayıplarına sebep verir.</p>
				<p>Dinamik içerikli (verilerin kullanıcıdan alındığı) sayfalarda, bu standartları korumak zor gibi görünebilir. Bu tip sorunlar için, kullanıcıdan gelen verinin <a href="http://tidy.sourceforge.net/">HTML Tidy</a> gibi araçlar veya <a href="http://tr.wikipedia.org/wiki/D%C3%BCzenli_ifade">düzenli ifadeler</a> yardımıyla filtrelenmesi, standartları korumanıza yardımcı olur.</p>
				<p>Sayfanızın, belirtilen tanımlamaya uygun olup olmadığını <a href="http://validator.w3.org/">http://validator.w3.org</a> adresinden denetleyebilirsiniz.</p>				
				<p>Yine aynı şekilde CSS kodlarını yazarken de <a href="http://www.w3.org/">W3</a>'ün belirlediği standartlara uygun kodlar yazmalıyız.</p>
				<p>Internet Explorer'ın <a href="http://www.webcredible.co.uk/user-friendly-resources/css/internet-explorer.shtml">CSS yorumlama farkları</a> çok canımızı yakar. Ancak Internet Explorer 6 için bile, standartların dışına çıkmadan (veya çok az çıkarak) kodlar geliştirilebileceğinden yanayım.</p>
				<p>Yine de explorer için özel bir CSS yazacaksanız, bunları diğer CSS'lerden ayırın.</p>
				<pre><code class="language-javascript">
&lt;link href="site.css" rel="stylesheet" type="text/css" /&gt;

&lt;!--[if lte IE 6]&gt; 
&lt;link href="ie6.css" rel="stylesheet" type="text/css" /&gt;
&lt;![endif]--&gt;
				</code></pre>
				<p>CSS'lerimizin standartlara uygunluğunu da <a href="http://jigsaw.w3.org/css-validator/">http://jigsaw.w3.org/css-validator/</a> adresinden yapabiliriz.</p>
				<h2>Güncel tarayıcıların tümünde sorunsuz çalışmalı</h2>
				<p>Evet, yazdığımız kod İnternet Explorer 6 için bile sorunsuz olmalı. Tarayıcılar, çoğu DOM elementini farkli yorumlayabiliyor. Kimi tarayıcıda <strong>&lt;body&gt;</strong>'nin öntanımlı davranışı <strong>{margin:2px; padding:2px;}</strong> iken kimi tarayıcılarda <strong>{margin:0; padding:0}</strong> olabiliyor.</p>
				<p>Bunun gibi farkları en aza indirmek için ise <a href="http://meyerweb.com/eric/tools/css/reset/reset.css">reset.css</a> kullanmak. Hazırlanan bu CSS dosyası ile yukarıda belirttiğim sorunların büyük bir kısmı hâllolsa da, tarayıcıların yorumlama farkları, siz standartlara uysanız da hâla devam etmekte. Bunun için yazdığınız kodu güncel ve eski tarayıcılarda test etmelisiniz.</p>
				<h2>Geliştirme aşamasında anlaşılabilir olmalı</h2>
				<p>Yukarıda bahsettiğim gibi, üç ana öğeyi olabildiğince birbirinden ayırmanız gerekir. Aşağıdaki XHTML tanımlamasını uygun olarak yazıldığını varsaydığımız kod kötü bir web önyüz koduna örnek olarak incelenebilir</p>
				<pre><code class="language-javascript">
&lt;div style="display:block; font-size:17px; color:red; _height:100px;"&gt;
	&lt;input type="button" value="Gönder" onclick="if( formDenetimiBasarili()) { birkacIsYap(); formuGonder(); }" style="color:black;"&gt;
	&lt;!-- bu satırlar arasında 100 tane satır olduğunu düşünün --&gt;
&lt;/div&gt;
				</code></pre>
				<p>İlk satırdaki div içinde, div'in görünümünü belirten, yani CSS içinde tanımlı olması gereken kodlar, sadece sayfanın istkeleti olması gereken işaret dilinin içersinde yer alıyor. Üstelik div'in display özelliği zaten <strong>block</strong> iken tekrar tanımlanmış, üstelik standart olmayan bir <strong>_height</strong> özelliği kullanılmış.</p>			
				<p>İkinci satırda ise sayfada dinamik birkaç kontrol yapacak JavaScript kodları, yine işaretleme dilinin içerisine konulmuş. Ayrıca yine görünüm tanımlaması vereceğimiz CSS kodları, işaretleme dilinin içerisinde yer alıyor. Üstelik <strong>XHTML</strong> tanımlamalarına göre &lt;input&gt; etiketini kapatmak zorunludur.</p>
				<p>Üçüncü satırda ise bu satırların arasında 100 satırlık başka bir kod olduğunu hayal edin. Dördüncü satırdaki &lt;/div&gt;'in hangi div'e ait olduğunu bulmanız büyük zaman alacaktır.</p>
				<p>Kodu üç ana parçaya bölecek olursak;</p>
				<h3>CSS dosyası</h3>
				<pre><code class="language-css">
/* iletisim formunu kaplayan div */
.contactDiv {
	height: 100px;
	font-size: 17px;
	color: red;
}

/* iletisim formunun icindeki dugme */
.contactDiv input {
	color: #000; /* renklerin RGB kodlarının yazılması tavsiye edilir */
}
				</code></pre>	
				<h3>JavaScript dosyası</h3>
				<pre><code class="language-javascript">
/* iletisim formundaki dugmeye basilma durumunu takip et*/
$(".contactDiv input").click( function() {
	if( formDenetimiBasarili()) { 
		birkacIsYap();
		formuGonder();
	}
});
				</code></pre>
				<h3>XHTML dosyası</h3>
				<pre><code class="language-javascript">
&lt;!-- bundan once CSS ve JavaScript dosyalarinin cagirildigini farzedin --&gt;
&lt;div class="contactDiv"&gt;
	&lt;input type="button" value="Gönder"/&gt;
	&lt;!-- arada yuz satir oldugunu dusunun --&gt;
&lt;/div&gt;
&lt;!-- .contactDiv --&gt;
				</code></pre>
				<p>Gördüğünüz gibi, işaretleme dilini, stil dosyalarını ve JavaScriptleri ayrı dosyalar haline getirdik.</p>
				<p>Kodu daha anlaşılabilir yapan en büyük etkenlerden birisi de yazdığımız yorum satırları oldu. Hem CSS, hem JavaScript hem de XHTML dosyamıza ilgili yorumları yazarak kodu daha anlaşılabilir yapma yolunda büyük bir adım attık.</p>
				<p>Örneğin, XHTML dosyasında son satırdaki &lt;!-- .contactDiv --&gt; ise o div'in contactDiv class'lı bir divin sonu oldugunu belirtiyor.</p>	
				<p>Aynı şekilde CSS ve JavaScript dosyalarınızı da olabildiğince anlaşılabilir tutmaya çalışın; genel ve özel olarak ikiye ayırın.</p>
				<p>Genel dosyalar, sitenin neredeyse tümünde kullanılan sayfalar için yazılan kodları, özel kodlar ise belli sayfalara özel kodları barındırsın. Örneğin, tüm sayfada <strong>&lt;a&gt;</strong> elementinin rengini kırmızı yapmak istiyorsanız bunu "genel" bir dosyaya koyun, yine aynı şekilde sadece iletişim sayfasında çalışmasını istediğiniz bir JavaScript'iniz varsa bunu da "iletisimSayfasi.js" gibi bir isimle kaydedin.</p>
				<p>CSS ve JavaScript dosyalarınızın boyutunun büyümesinden endişe ediyorsanız, aşağıda anlatıldığı gibi bunları sıkıştırıp optimize edebilirsiniz.</p>
				<h3>"Peki bu bize ne kazandırdı?"</h3>
				<ul>
					<li>Kodumuz daha okunabilir hale geldi, yapılan işler ayrıldı. XHTML bilmeyen(veya uğraşmak istemeyen) bir JavaScript programcısı, sadece JavaScript dosyalarını düzenleyebilir hale geldi. Ayrıca yine tasarımcı arkadaşlarımız sadece CSS dosyasına müdahele ederek, sayfamıza istedikleri görünümü verebilmiş oldular.</li>
					<li>Kod kısaldı. Dinamik bir sayfa oldugunu varsayarsak, XHTML kodu her seferinde değişebilir. Ancak CSS ve JavaScript kodları sabit kalabilir. CSS ve JavaScript kodları tarayıcı tarafında cache'lenebilirken XHTML için bu pek mümkün olmayabilir. XHTML'in kısalması ise bant genişliği masraflarını azaltmaya yardımcı olacaktır.</li>
				</ul>
				<h2>Gerçek ortamda az trafik harcamalı, hızlı olmalı</h2>
				<p>Geliştirme ortamında her şey günlük güneşliktir. Hazırladığınız sayfa 100 tane css içeriyor olabilir. 100 kişilik geliştirme ekibiniz olsa bile bu pek sorun teşkil etmeyecektir. Ancak, kodunuz gerçek ortamda çok farklı isteklerle karşılaşacak, anlık gelen 2000 istek sonrasında sistem yöneticilerinizin canı yanabilir.</p>
				<p>Hazırladığınız sayfadaki, harici öğelerin (CSS, JavaScript, resimler vs) her biri için bir HTTP isteği yapılır. HTTP istekleri, sunucu tarafında maliyetli isteklerdir. Yukarıdaki gibi bir örnekte, sayfada hazırladığınız 100 CSS dosyası, sayfanın her ziyaretinde sunucuya 100 istek yapacaktır. Bu istekleri en aza düşürmek için ise uygulamanız gereken birkaç yöntem var.</p>
				<h3>1) JavaScript ve CSS dosyalarını birleştirin</h3>
				<p>Elinizdeki CSS ve JavaScript dosyalarını uygun sıra ile birleştirip tek dosya haline getirin. Bunu basit olarak aşağıdaki komut ile yapabilirsiniz.</p>
				<pre><code class="language-javascript">
cat reset.css genel.css anaSayfa.css iletisim.css > tumu.css
cat jquery.js genel.js sayfalar.js > tumu.js
				</code></pre>
				<h3>2) Dosyaları sıkıştırın ve optimize edin</h3>
				<p>Sunucudaki istekleri tek dosyaya indirdik. Artık istek sayımız azaldı. Ama bu tek dosya toplamda 100 kilobyte tutuyor olabilir. Ve bu 100 kilobyte'ın 50 kilobyte'ı yorum satırları veya boş satırlar olabilir. Aşağıdaki iki JavaScript kodu aslında aynı işlemi yapmaktadır.</p>
				<p><strong>Geliştirme ortamı kodu:</strong> Aşağıdaki kodda kurulan hiyerarşi, yorumlar vesaire pek anlaşılır bir şekilde, olması gerektiği gibi yazılmış.</p>
				<pre><code class="language-javascript">
/**
* Bu kod sunu sunu yapiyor
* Su event'lari dinleyip, su class'lari cagiriyor
* Ayrica bu kod su lisansa sahip
* WEB_GELISTIRICI_LISANSI_1.0
* Bu lisans sunları sunları gerektirir
* 
* params String metin : Ekrana basilacak metni bildirir
*/
sayfalar.iletisim.hata.ekranaBas = function(metin) {
// gelen metni ekrana basar
alert(metin);
}


/**
* baglantinin tiklama isleminde bir hata olusura ekrana bas
*/
$("a").click ( function() {
//herhangi bir hata olustuysa ekrana hata bas
if( hataVarMi() ){ 
  sayfalar.iletisim.hata.ekranaBas("Bir hata olustu");
}
});
				</code></pre>
				<p>Ancak, aslında yukarıdaki kodun yaptığı işi, şu kod aynen yapıyor.</p>
				<pre><code class="language-javascript">
x=function(a){alert(a)};$("a").click(function(){hataVarMi()&&x("Bir hata olustu")});
				</code></pre>
				<p>Yazdığımız CSS ve JavaScript kodları, yorumlardan, gereksiz satırlardan arındırmak ve hatta aynı işi yapan daha kısa kodlar üretmek için çeşitli araçlar mevcut.</p>
				<p>Bunlardan birisi ﻿Yahoo'nun geliştirdiği <a href="http://developer.yahoo.com/yui/compressor/">YUI Compressor</a>. YUI compressor ile JavaScript ve CSS dosyalarınızı sıkıştırabilirsiniz. Ayrıca Google'ın <a href="https://developers.google.com/closure/compiler/docs/gettingstarted_ui?hl=tr">Google Closure Compiler</a> uygulaması da JavaScript sıkıştırma işleminde gayet başarılı. Ayrıca <a href="http://closure-compiler.appspot.com/home">web üzerinden de kullanılabiliyor.</a></p>
				<p>CSS dosyalarınızı optimize etmek için de <a href="http://www.cssoptimiser.com/">CSS Optimizer</a> kullanabilirsiniz.</p>
				<p>Bu uygulamalar ile, birleştirerek HTTP isteklerinden tasarruf sağladığınız kodlarınızı küçültüp, bant genişliğinden de kazanç sağlayabilirsiniz.</p>
				<h3>3) Mümkün olan resimleri birleştirin</h3>
				<p>Sayfada bulunan "harici" öğelerden birisi de resimlerdir. Sayfanızın tasarımı için kullandığınız her resim, sunucuya yine bir HTTP isteği yapacak, anlık 5000 ziyaret sonrası sistem yöneticilerinizin yine canı yanabilir. Bu resimleri mümkün olduğunca birleştirerek istek sayısını azaltabilirsiniz. Bunun için CSS Sprite tekniğini kullanabilirsiniz. Bu teknikle, örnek olarak sayfanızdaki resim olan menü öğelerini, tek bir resme koyup (istek sayısını bire indirip), CSS background-position özelliği ile resmin ilgili yerinin gösterilmesini sağlayabilirsiniz.</p>
				<h3>4) Resimleri optimize edin</h3>
				<p>Oluşturduğunuz resimleri optimize ederek daha düşük boyutda, neredeyse aynı kalitede resimler sunabilirsiniz. Bunun için <a href="http://pmt.sourceforge.net/pngcrush/">pngcrush</a> veya <a href="http://jpegclub.org/jpegtran/">jpegtan</a> gibi uygulamaları kullanabilirsiniz. Ayrıca Yahoo'nun <a href="http://developer.yahoo.com/yslow/smushit/">SmushIt</a> servisi ile, bu optimizasyonları Web üzerinden de yapabilirsiniz.</p>
				<h3>5) Mümkün olan her şeyi önbelleğe alın (cache)</h3>
				<h3>5.1 ) Expires, Cache-Control veya ﻿ETags  HTTP başlıkları kullanın</h3>
				<p>Sunucu tarafında, önbelleğe alınmasını istediğiniz dosyaları (.js, .css) <strong>Expires</strong> veya <strong>cache-control</strong> başlıkları ile gönderirseniz, tarayıcı bu dosyalara yapılan istekleri kendi önbelleğine alacak ve ikinci istekte sunucuya gitmeyecektir.</p>
				<h3>5.2) Cevapları sıkıştırın</h3>
				<p>İsteklere gönderilen cevapları(response), sunucu tarafında <a href="http://sourceforge.net/projects/mod-gzip/">gzip</a> ile sıkıştırarak gönderererek bant genişliğinden tasarruf edebilirsiniz.</p>
				<h3>5.3) AJAX isteklerini önbelleğe alın</h3>
				<p>Eğer sayfanızda, sıkça AJAX isteği yapıyorsanız, bunlar için bir <strong>"cache"</strong> mekanizması geliştirin. Aşağıdaki gibi bir kodunuz olduğunu düşün.</p>
				<pre><code class="language-javascript">
/** kullanici verilerini getir */
function kullaniciVerileriniGetir() {
	veri = Ajax.senkronIstekYap("http://sayfa.com/veriGetir.php");
	return veri;
}

/** kullanici resimlerini getir **/
function resimleriGetir() { 
	kullaniciVerileri = kullaniciVerileriniGetir(); // ajax requesti yapacak
	//ancak bu veriyi onbellege alsaydaik bu requeste gerek kalmayacakti

	kullaniciId = kullaniciVerileri['id'];
	resimler = Ajax.senkronIstekYap("http://sayfa.com/resimleriGetir?id="+kullaniciId"); //ajax requesti yapacak
	return resimler;
}
				</code></pre>
				<p>Ama <strong>kullaniciVerileriniGetir()</strong> fonksiyonu icin bir cache mekanizması oluşturulsaydı, <strong>resimleriGetir()</strong> içinde çağırılan <strong>kullaniciVerileriniGetir()</strong> için istek yapılmayacaktı. </p>				
				<p>Örnek olarak basitce şöyle bir mekanizma geliştirilebilir.</p>			
				<pre><code class="language-javascript">
/** önbellek objesi **/
var cache={};

function kullaniciVerileriniGetir() {
	/** önbellekte varsa istek yapmadan cevabı dön */
	if ( cache['kullaniciVerisi'] ) {

	}else {
	    //önbellekte yoksa, istek yap, önbelleğe al
	    cache['kullaniciVerisi'] = Ajax.senkronIstekYap("http://sayfa.com/getir.php");
	}

	return cache['kullaniciVerisi'];
}
				</code></pre>
				<h3>5.4) DOM öğelerine yapılan istekleri önbelleğe alın</h3>
				<p>Sayfadaki DOM öğelerine yapılan istekler de istemci tarafını yorar. Aşağıdaki gibi bir JavaScript kodunuz olduğunu düşünün.</p>
				<pre><code class="language-javascript">
$("div.hede span.hodo a[name='hebele']");
				</code></pre>	
				<p>Bu jQuery kodu, DOM'daki tüm hede sınıflı div'leri, onun içindeki hodo sınıflı tüm span'ları onun içinde de name özniteliği hebele olan tüm a'ları alacak (Yazması bile ne kadar sürdü?). Ve bunu sayfada birden fazla yerde kullandığınızı düşünürseniz DOM'da gereksiz yere birden çok kez gezineceksiniz.</p>			
				<p>Yukarıdaki sorgu sonunda bulunan öğeleri bir değişkene atayarak, işlemleri de bu değişken üzerinden yaparak, her seferinde DOM'da gezinmekten kurtulmuş olursunuz.</p>
				<pre><code class="language-javascript">
var hebeleA = $("div.hede span.hodo a[name='hebele']");
				</code></pre>
				<h2>Kod "Anlamlı" olmalı</h2>
				<p>Üretilen kod "anlamlı" olmalı. Anlamlı olmalı ki arama motorları ne demek istediğimizi daha iyi anlasın. Örneğin, sayfadaki bir baglantıyı, <strong>&lt;a&gt;</strong> etiketi yerine istedigimiz herhangi bir elementin <strong>click</strong> event'ına bir kural belirleyerek de yapabiliriz. Ancak bir <strong>&lt;div&gt;</strong>'e tıklanınca başka bir sayfaya gitmesi pek anlamlı değildir. Aynı şekilde bir liste kullanacaksak bunları <strong>&lt;ul&gt;</strong>, <strong>&lt;li&gt;</strong> etiketleri içerisine, bir veri listeleyeceksek de bunu <strong>&lt;table&gt;</strong> etiketi içerisine koymalıyız. (table etiketini tasarım için asla kullanmamalıyız!).
Yine aynı şekilde bir haber başlığını <strong>&lt;span&gt;</strong>  içinde vermektense <strong>&lt;h1&gt;</strong>  içinde vermek daha anlamlı olacaktır. Bu sayede arama motorları ile daha kolay "anlaşa"bileceğiz. </p>
				<h2>Mümkün olduğunca JavaScript bağımsız olmalı/olabilmeli</h2>
				<p>AJAX'ın giderek popülerleştiği günümüzde neredeyse her işimizi JavaScript ile yapar olduk. Ancak arama motorları JavaScript'i pek sevmiyor. Aşağıdaki gibi bir kodumuz olduğunu düşünün.</p>
				<pre><code class="language-javascript">
&lt;a href="#" class="iletisimSayfasinaGit"&gt;iletisim&lt;/a&gt;
				</code></pre>
				<pre><code class="language-javascript">
$("a.iletisimSayfasinaGit").click( function() {
	$("#icerikDivi").load("http://www.sayfa.com/getir.php?iletisim&sadeceIcerik=true");
}
				</code></pre>					
				<p>Ama bu kod JavaScript desteklemeyen bir tarayıcı (tamam pek yok günümüzde ama) ve arama motorları için pek bir şey ifade etmiyor. Bu kod şu şekilde olsa daha bir anlamlı olur.</p>
				<pre><code class="language-javascript">
&lt;a href="http://www.sayfa.com/getir.php?iletisim" class="iletisimSayfasinaGit"&gt;iletisim&lt;/a&gt;
				</code></pre>
				<pre><code class="language-javascript">
$("a.iletisimSayfasinaGit").click( function(event) {
	event.preventDefault(); //burada normal sayfaya gitmesini engelledik
	$("#icerikDivi").load("http://www.sayfa.com/getir.php?iletisim&sadeceIcerik=true");
}
				</code></pre>
				<p>Bu şekilde, JavaScript destekli istemci kullanan kullanıcılar sayfayı AJAX ile çağırabilirken, JavaScript desteklemeyen bir istemciye sahip kullanıcılar ise <strong>www.sayfa.com/getir.php?iletisim</strong> adresini ziyaret etmiş olacaklar.</p>								
				<h2>Sonuç olarak...</h2>
				<p>Bu tip birkaç kural ile daha "iyi" web önyüzleri hazırlayabilirsiniz. Yahoo'nun hazırladığı <a href="http://yslow.firefox.findmysoft.com/">YSlow Firefox eklentisi</a> ile hazırladığınız sayfaların yukarıda anlatılan bazı kuralllara ne kadar uyduğunu da kontrol edebilirsiniz.</p>
			</article>
			<!-- #web -->
		</section>
<? footer($subPage) ?>