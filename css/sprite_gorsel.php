                <h1>CSS Sprite Görsel - Image Sprites</h1>
                <p>Sayfamızda ki görsellerin (butonlar,logolar,ikonlar vs.) tümünü veya bir kısmını tek görselde birleştirmeye <strong>Sprite / Çoklu Görsel</strong> deniliyor. Sayfamızda ki her görselin ayrı ayrı yüklenmesi fazla zaman alabilmektedir, bu nedenle <strong>Sprite Görsel</strong> kullanımı bize hız kazandıracaktır. <strong>Sprite Görsel</strong> sunucu isteklerinin sayısını azaltır ve bant genişliği tasarrufu da sağlar.  </p>
                <p>İhtiyacınıza göre görselleri alt alta veya yan yana birleştirebilirsiniz.</p>
                <p>Aşağıda ki tek parça olan sprite görseli nasıl kullanacağımızı görelim...</p>        
                <img src="/images/sprite.jpg" alt="spritegörsel"/>
                <p>CSS kodu: </p>
                <pre><code class="language-css">
.spriteBir {
    list-style: none;
    width: 20px;
    height: 23px;
    padding-top: 12px;
    background: url('/images/sprite.jpg') no-repeat 0 0;
}
.spriteIki {
    list-style: none;
    width: 20px;
    height: 20px;
    padding-top: 5px;
    background: url('/images/sprite.jpg') no-repeat 0 -62px;
}
a {
    padding-left: 50px;
} 
                </code></pre>
                <p> <strong>background</strong> özelliği içinde verilmiş olan değişik bir değer görüyoruz ( background: url('/images/sprite.jpg') no-repeat <strong> 0 -62px;</strong>  ). Bu bir kombine CSS kullanımıdır (Sıfır değerlerinde px , % , em vb kullanımlara gerek yoktur.). Aslında orada ki kullanım şu anlama gelmektedir:  <strong>background-position:  0 -62px;</strong>. Bu kullanımı hatırlamak için <a href="/css/index.php?page=arkaplanlar">buraya</a> tıklayabilirsiniz.  </p>
                <p>HTML/XHTML kodu: </p>
                <pre><code class="language-css">
&lt;ul&gt; 
    &lt;li class="spriteBir"&gt; &lt;a href="#"&gt;Apple&lt;/a&gt; &lt;/li&gt; 
    &lt;li class="spriteIki"&gt; &lt;a href="#"&gt;Hata&lt;/a&gt; &lt;/li&gt; 
&lt;/ul&gt;
                </code></pre>
                <p>Yukarıda ki kodlarımız çalıştığında tek parça görsel ile aşağıdaki gibi bir görüntü elde edeceğiz. </p>
                <ul>
                    <li class="spriteBir"> <a href="#">Apple</a> </li>
                    <li class="spriteIki"> <a href="#">Hata</a> </li>
                </ul>
                <a href="/css/index.php?page=medya_tipleri" class="nextButton">Devam Et</a>
                <!-- #nextButton -->