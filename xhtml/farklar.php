                <h1> XHTML ile HTML Arasında ki Farklar</h1>            
                <h3>1. Etiketler düzgün biçimde iç içe geçmelidir. </h3>
                    <p> Bu yazım yanlıştır. </p>
                    <pre><code class="language-javascript">&lt;strong&gt;&lt;i&gt;Bu yazı vurgulu ve yatıktır&lt;/strong&gt;&lt;/i&gt; </code></pre>
                    <p> Bu yazım ise doğrudur. </p>
                    <pre><code class="language-javascript">
&lt;strong&gt;
    &lt;i&gt;Bu yazı vurgulu ve yatıktır&lt;/i&gt;
&lt;/strong&gt; </code></pre>
                <!-- #1.Fark başladı-->
                <h3>2. Tüm etiketler küçük harflerle yazılmalıdır. </h3>
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">
&lt;BODY&gt;
    &lt;P&gt;Bu bir paragraftır.&lt;/P&gt;
&lt;/BODY&gt;       </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript">
&lt;body&gt;
    &lt;p&gt;Bu bir paragraftır.&lt;/p&gt;
&lt;/body&gt;   </code></pre>
                <!-- #2.Fark başladı-->
                <h3>3. Tüm XHTML etiketleri kapanmalıdır. </h3> 
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">
&lt;p&gt;Bu bir paragraftır.
&lt;li&gt;Bu bır liste maddesidir.
                    </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript">
&lt;p&gt;Bu bir paragraftır.&lt;/p&gt;
&lt;li&gt;Bu bir liste maddesidir.&lt;/li&gt;
                </code></pre>
                <!-- #3.Fark başladı-->
                <h3>4. Boş elemanlarda sonlandırılmalıdır.</h3>
                    <p>Bu yazım yanlıştır.</p>          
                    <pre><code class="language-javascript">
&lt;br&gt;
&lt;hr&gt;
&lt;img src="dosyaismi.jpg"&gt;
                    </code></pre>
                    <p>Bu yazım ise doğrudur.</p>               
                    <pre><code class="language-javascript">
&lt;br /&gt;
&lt;hr /&gt;
&lt;img src="dosyaismi.jpg" /&gt;
                    </code></pre>
                    <p>XHTML Web sayfalarınızı tarayıcılar ile uyumlu hale getirmek istiyorsanız " / " işaretinden önce bir boşluk bırakmalısınız. </p>     
                <!-- #4.Fark başladı-->         
                <h3>5. Parametre isimleri küçük harf olmalıdır. </h3>
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">&lt;table WIDTH="100%"&gt; </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript"> &lt;table width="100%"&gt; </code></pre>
                <!-- #5.Fark başladı--> 
                <h3>6. Parametre değerleri tırnak işareti içinde olmalıdır.</h3> 
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">&lt;table width=100%&gt; </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript">&lt;table width="100%"&gt; </code></pre>
                <!-- #6.Fark başladı-->
                <h3>7. Parametre sadeleştirme kaldırılmıştır.</h3>
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">
&lt;input checked&gt;
&lt;option selected&gt;
                    </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript">
&lt;input checked="checked" /&gt;
&lt;option selected="selected" /&gt;

                </code></pre>
                <!-- #7.Fark başladı-->
                <h3>8. "id" parametresi "name" parametresinin yerine geçer.</h3>
                    <p>Bu yazım yanlıştır.</p>
                    <pre><code class="language-javascript">&lt;img src="dosyaismi.jpg" name="resim1" /&gt; </code></pre>
                    <p>Bu yazım ise doğrudur.</p>
                    <pre><code class="language-javascript">&lt;img src="dosyaismi.jpg" id="resim1" /&gt; </code></pre>
                <!-- #8.Fark başladı-->
                <h3>9. XHMTL DTD zorunlu elemanları tanımlar. </h3>
                    <p>Tüm XHTML dökümanlarının DOCTYPE tanımlama zorunluluğu vardır. Html , Head ve Body bulunmalı ve Title , Head içinde yer almalıdır. Aşağıda minimum bir XHTML dökümanını görüyorsunuz. </p>
                    <pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en"&gt;
    &lt;head&gt; 
        &lt;meta http-equiv="content-type" content="text/html; charset=utf-8;" /&gt;
        &lt;title&gt;Başlık Buraya&lt;/title&gt; 
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;İçerik Buraya&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt; </code></pre>
                    <p>DOCTYPE elemanı bir XHTML elemanı değildir ve standartlara uymasına gerek yoktur. Ayrıca sonlandırılması da gerekmez.</p>
                    <p><strong>DTD nedir?</strong></p>
                    <p> DTD bir web sayfasının tipini SGML (Standard Generalized Markup Language) dili ile belirler. <br /> <br /> DTD HTML gibi SGML uygulamaları tarafından kullanılır. Amacı sayfa için geçerli olan markup sitilini belirtmektir. XHTML SGML döküman tipinde tanımlanmıştır. Bir XHTML DTD dökümanı sayfada uyulması gereken kuralları bilgisayarın anlayabileceği bir dille belirtir. <br /> <br /> Yazdığınız XHTML dökümanlarının hangi standartlara uyduğunu DTD belirtir ve sayfada ilk satır olarak yer almalıdır. </p>
                <!-- #9.Fark başladı-->                 
                <h3>10. DOCTYPE zorunlu olarak mevcut olmalıdır.</h3>
                    <p> Geçerli 3 adet XHTML döküman tipi vardır.</p>
                    <p> <strong> a) XHTML Strict DTD (Sıkı XHTML)</strong> </p>
                    <p> XHTML Strict eğer standartlara uygun kod yazmak istiyorsanız ve sayfanıza görünüm vermek için CSS (Cascading Style Sheets) kodlarını kullanacaksanız bu tip sizin için. XHTML Strict DTD kullanacağınız HTML kodlarınızın başına eklemeniz gereken kod; <br />
                        <pre><code class="language-javascript">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;  </code></pre> </p>
                    <p> <strong>b) XHTML Transitional DTD (Geçiş XHTML)</strong> </p>
                    <p> XHTML Transitional DTD eğer standartlara uygun kod yazmak istiyorsanız ve XHTML’in görünüm yeniliklerini yani CSS’i kullanmayacaksanız. Örneğin &lt;font&gt; gibi html etiketlerini kullanıyorsanız bu tip sizin için uygun. XHTML Strict, &lt;font&gt;  &lt;u&gt;   gibi etiketleri desteklemez. <br />
                        <pre><code class="language-javascript">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;</code></pre> </p>
                    <p> <strong>c) XHTML Frameset DTD (Çerçeveli XHTML)</strong> </p>
                    <p> XHTML Frameset DTD eğer standartlara uygun bir kod yazmak istiyor ve sayfanız çerçeveli bir tasarıma sahip ise bu döküman tipini kullanmalısınız. <br />
                        <pre><code class="language-javascript">&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"&gt; </code></pre> </p>
                <!-- #10.Fark başladı-->
                <div class="cup">
                    <h1>Tebrikler!!!</h1>
                    <p> <strong>Tebrikler,</strong> artık <strong>İleri Seviye XHTML</strong> biliyorsunuz. Gördüğümüz üzere <strong>CSS</strong> olmadan <strong>XHTML</strong> 'in pek bi canlılığı yok. Bu nedenle <strong>XHTML</strong> 'e hayat vermek için sizleri <strong>CSS</strong> derslerine bekliyorum. Unutmayın ki <strong>CSS</strong> dilini de öğrendiğinizde bu Web sayfasının aynısını yapabileceksiniz. <strong>CSS</strong> derslerine geçmek için <strong>" Devam Et "</strong> butonuna tıklayabilirsiniz. </p>
                </div>
                <a href="/css.php" class="nextButton">Devam Et</a>
                <!-- #nextButton -->