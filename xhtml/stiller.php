                <h1>XHTML Stiller - Styles</h1>
                <p> Bu bölümde stilleri anlatmayacağım, bu bölümde sadece <strong>" style "</strong>ın ne olduğunu anlatacağım ve birkaç örnek göstereceğim. Stilleri daha sonra <strong>CSS</strong> dilinde ayrıntılı olarak ele alacağız.</p>
                <p> Stiller ile sayfa üzerinde ki tüm görsellere müdahele edebiliriz ( Renk, font, boyut, arkaplan, bölüm içinde ki boşluklar, bölüm dışındaki boşluklar, yükseklik, genişlik, bölümü sağa ve sola yaslama, fare ile yazı üzerine gelince yazının fontunun/renginin/stilinin değişmesi vb  aklınıza gelebilecek herşey.  ). Yani görsel anlamdaki her değişikliği <strong>CSS</strong> ile yapabilirsiniz. Örneğin bu sayfa ki görsel olan herşey bir <strong>CSS</strong> ürünüdür. Bu gibi stilleri verebilmek için <strong>"sytle"</strong> özniteliğini (Attribute) kullanacağız. </p>
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
    &lt;body style=&quot;background-color: blue; color: white; font-weight: bold;&quot;&gt;
        &lt;p&gt;
            &lt;strong&gt; Bu metin kalın / vurgulu &lt;/strong&gt; &lt;br /&gt;
            &lt;big&gt; Bu metin büyük &lt;/big&gt; &lt;br /&gt;
            &lt;small&gt; Bu metin küçük &lt;/small&gt; &lt;br /&gt;
            &lt;i&gt; Bu metin eğik &lt;/i&gt; &lt;br /&gt;
            Alt simge kullanıyoruz 2&lt;sub&gt;n&lt;/sub&gt; &lt;br /&gt;
            Üst simge kullanıyoruz 2&lt;sup&gt;4&lt;/sup&gt;
        &lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;   </code></pre>
                <p> <strong>Bu kodu tarayıcıda görmek için  <a href="test/test8.html" >tıklayınız.</a> </strong> </p>
                <a href="/xhtml/index.php?page=linkler" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->