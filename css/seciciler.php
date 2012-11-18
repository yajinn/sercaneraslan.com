                <h1>CSS Seçiciler - Id &amp; Class Selector</h1>
                <p>Seçiciler, Id ve Class olmak üzere ikiye ayrılır.</p>
                <h2>CSS Tekil Seçici - Id Selector</h2>
                <p>Daha önce <strong>HTML/XHTML</strong> etiketlerine stil vermeyi görmüştük. Örneğin <strong>" p "</strong> etiketine stil verdiğimizde tüm <strong>" p "</strong> etiketlerinde bu stilin olacağını biliyoruz. Eğer biz sadece tek bir  <strong>" p "</strong> etiketinde stilimiz gözüksün istiyorsak Id Seçicisini kullanacağız. Id Seçicisi, bir kez kullanılabilir. Örneğin sadece tek bir paragrafa stil vereceksek ve bu stili başka hiçbir yerde kullanmayacaksak <strong>" p "</strong> etiketi içine <strong>id="isim"</strong> yazacağız. "isim" olarak belirttiğimiz yere istediğimiz isimi yazabiliriz, kodumuzu daha sonra bu isim ile <strong>CSS</strong> kodunda çağıracağız. (İsim, rakamla başlamamalı ve Türkçe karakter içermemelidir.)</p>
                <div class="tip"> 
                    <h1>CSS İpucu - Dosyalama Mantığı</h1>
                    <p><strong>HTML/XHTML</strong> kodumuz ile <strong>CSS</strong> kodumuzu aynı klasör içinde tutmalıyız. Örneğin, <strong>sercaneraslan.com</strong> diye bir sayfa yazıyoruz. <strong>sercaneraslan.com</strong> adı ile bir klasör oluşturmalıyız ve tüm dosyalarımızı bu klasör içinde tutmalıyız. Hatta herşeyi bir klasör içine almayız mesela, görsellerimizi <strong>"images"</strong> klasörü içinde <strong>CSS</strong> dosyalarımızı <strong>"styles"</strong> klasörü içinde ve büyük sayfaların <strong>alt sayfalarını</strong> da bir klasör içinde <strong>tutmalıyız</strong>. Böylelikle herşey sistemli bir hale gelecektir. </p>
                </div>
                <div class="tip"> 
                    <h1>CSS İpucu -  Klasör Çağırma Mantığı</h1>
                    <p>Örneğin bizim <strong>CSS</strong> dosyamız <strong>"styles"</strong> klasörümüzün içinde <strong>"style.css"</strong> adı ile kayıtlı. Biz <strong>HTML/XHTML</strong> kodumuzda <strong>"link"</strong> etiketi içinde bu dosyayı <strong>"styles/style.css"</strong> olarak çağıracağız. Eğer <strong>HTML/XHTML</strong> kodumuz alt bir klasör içinde olsaydı <strong>"../styles/style.css"</strong> olarak çağırmamız gerekecekti. (  <strong>" ../ "</strong> karakterleri <strong>"bir üst klasöre çıkıp bak"</strong> anlamına gelmektedir. ) </p>
                </div>
                <p> <strong>HTML/XHTML</strong> kodumuzu nasıl yazdık görelim...</p>
                <pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
        &lt;link rel="stylesheet" type="text/css" href="test.css" /&gt; 
        &lt;title&gt;Başlık Buraya&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p id="paragrafStilim"&gt;İçerik Buraya&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt; </code></pre>
                <p>Şimdi <strong>HTML/XHTML</strong> etiketine verdiğimiz <strong>"Id"</strong> yi <strong>CSS</strong> kodunda çağıralım. <strong>CSS</strong> kodumuzu yazarken <strong>"#"</strong> ile başlayıp boşluk vermeden <strong>"Id"</strong> ismini yazıyoruz ( <strong>#paragrafStilim</strong> ). Sonrasında ise <strong>CSS</strong> yazım kuralını uyguluyoruz ( <strong>#paragrafStilim {color:blue;}</strong> ). color:blue; renk, mavi olsun anlamına gelmektedir. Renkleri bir sonra ki konuda ele alacağız.</p>
                <pre><code class="language-css">
#paragrafStilim {
    color: blue;
}               </code></pre>
                <p><strong>Paragrafımızın tarayıcıda nasıl gözüktüğünü <a href="test/test29.html">görelim.</a></strong></p>
                <!-- #CSS Tekil Seçici -->
                <h2>CSS Çoğul Seçici - Class Selector</h2>  
                <p>Class Seçicisi, birden fazla kez kullanılabilir. Örneğin, color:blue; (yazı rengi mavi) olsun istediğimiz tüm etiketlere sayısız kere Class Seçicisi verebiliriz. Id Seçicisinde <strong>" p "</strong> etiketi içine <strong>id="isim"</strong> yazıyorduk, Class Seçicisinde ise <strong>" id "</strong> yerine <strong>"class"</strong> yazacağız ( <strong>class="isim"</strong> ).</p>
                <p> <strong>HTML/XHTML</strong> kodumuz nasıl yazılmalı görelim...</p>
                <pre><code class="language-css">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt; 
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;
    &lt;head&gt;
        &lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
        &lt;link rel="stylesheet" type="text/css" href="test.css" /&gt; 
        &lt;title&gt;Başlık Buraya&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p class="paragrafStilim"&gt;Bu içerik mavi renk.&lt;/p&gt;
        &lt;span class="paragrafStilim"&gt;Bu içerikte mavi renk.&lt;/span&gt; 
    &lt;/body&gt;
&lt;/html&gt; </code></pre>
                <p>Id Seçicisinin CSS kodunu yazarken "#" karakterini kullanıyorduk. Class Seçicisinde ise " . "  (nokta) karakterini kullanacağız. (  <strong>.paragrafStilim {color:blue;}</strong> ) </p>
                <pre><code class="language-css">
.paragrafStilim {
    color: blue;
}               </code></pre>   
                <p><strong>Paragrafımızın tarayıcıda nasıl gözüktüğünü <a href="test/test30.html">görelim.</a></strong></p>
                <!-- #CSS Çoğul Seçici -->
                <a href="/css/index.php?page=renkler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->
