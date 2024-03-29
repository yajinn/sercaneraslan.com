                <h1>CSS Metinler - Text</h1>
                <h2>CSS Metin Rengi - Text Color</h2>
                <p>Metinlere renk vermek için <strong>" color "</strong> özelliğini kullandığımızı daha önce örneklerde görmüştük. Şimdi burada bir kez daha tekrar etmiş oluyoruz. <strong>"color"</strong> özelliğine değer olarak renk ismi, RGB değeri veya renk kodu yazabiliriz. Renk kodlarını kullanmanız tavsiyedir. </p>
                <p><strong>Örnek bir kod görelim.</strong></p>
                <pre><code class="language-css">
p {
    color: blue;
}
span {
    color: #3366CC;
}
div {
    color: rgb(255,0,0);
}
                </code></pre>
                <!-- #CSS Metin Rengi -->
                <h2>CSS Metin Hizalama - Text Alignment</h2>
                <p>Metinleri hizalamak için "text-align" özelliğini kullanacağız. </p>
                <p><strong>"text-align"</strong> özelliği için 4 ayrı değer bulunmaktadır.</p>
                <ul>
                    <li><strong>text-align: left;</strong> (Metini sola hizalamak için kullanılır.)</li>
                    <li><strong>text-align: center;</strong> (Metini ortaya hizalamak için kullanılır.)</li>
                    <li><strong>text-align: right;</strong> (Metini sağa hizalamak için kullanılır.)</li>
                    <li><strong>text-align: justify;</strong> (Metin içeriğinin sağ taraftan kalan boşluklarını tamamlar, okumayı kolaylaştırır. Gazete ve Magazin dergilerinde olduğu gibi.)</li>
                </ul>
                <p><strong>Örnek bir kod görelim.</strong></p>
                <pre><code class="language-css">
p {
    text-align: left;;
}
span {
    text-align: center;
}
div {
    text-align: justify;
}
                </code></pre>
                <!-- #CSS Metin Hizalama -->
                <h2>CSS Metin Dekorasyonu - Text Decoration</h2>
                <p><strong>" text-decoration "</strong> özelliğini ile metinlere stil verebiliriz veya metnin stillerini kaldırabiliriz. <strong>" text-decoration "</strong> özelliği için 5 ayrı değer bulunmaktadır.</p>
                <ul>
                    <li><strong>text-decoration: none;</strong> (Örneğin, bu kodu "a" etiketi için kullandığımızda linkin alt çizgisi kaybolacaktır.)</li>
                    <li><strong>text-decoration: underline;</strong> (Bu kod yazıyı altı çizili yapar.)</li>
                    <li><strong>text-decoration: overline;</strong> (Bu kod yazının tepesini çizili yapar.)</li>
                    <li><strong>text-decoration: line-through;</strong> (Bu kod yazının ortasından çizgi geçirir.)</li>
                    <li><strong>text-decoration: blink;</strong> (Bu kod yazının bir görünüp bir görünmemesini sağlar. Ancak Internet Explorer bu özelliği desteklemez.)</li>
                </ul>               
                <p><strong>Örnek bir kod görelim.</strong></p>              
                <pre><code class="language-css">
a {
    text-decoration: none;
}
span {
    text-decoration: underline;
}
h1 {
    text-decoration: line-through;
}
                </code></pre>
                <!-- #CSS Metin Dekorasyonu -->
                <h2>CSS Metin Dönüşümü - Text Transformation</h2>
                <p><strong>" text-transform "</strong> özelliğini ile metinleri komple büyük harf ya da komple küçük harf yapabiliriz veya sadece kelimelerin ilk harflerini büyük yapabiliriz. </p>
                <p><strong>" text-transform "</strong> özelliği için 3 ayrı değer bulunmaktadır.</p>
                <ul>
                    <li><strong>text-transform: uppercase;</strong> (Bu kod yazıyı komple büyük harfe çevirir.)</li>
                    <li><strong>text-transform: lowercase;</strong> (Bu kod yazıyı komple küçük harfe çevirir.)</li>
                    <li><strong>text-transform: capitalize;</strong> (Bu kod sadece kelimelerin ilk harflerini büyük hale çevirir.)</li>
                </ul>
                <p><strong>Örnek bir kod görelim.</strong></p>
                <pre><code class="language-css">
a {
    text-transform: uppercase;
}
span {
    text-transform: lowercase;
}
h1 {
    text-transform: capitalize;
}</code></pre>
                <!-- #CSS Metin Dönüşümü -->
                <h2>CSS Metin Girintileme - Text Indentation</h2>
                <p><strong>" text-indent "</strong> özelliğini ile metinlerin ilk satırında ki başlangıç girintisinin uzunluğunu ayarlabilirsiniz.</p>
                <p><strong>Örnek olarak görelim.</strong></p>
                <pre><code class="language-css">
p {
    text-indent: 75px;
}
                </code></pre>
                <!-- #CSS Metin Girintileme -->
                <h2>CSS Diğer Metin Özellikleri</h2>
                <ul>
                    <li><strong>line-height: 30px;</strong> (Satır aralarında ki mesafeyi 30 piksel açar.)</li>
                    <li><strong>letter-spacing: 10px;</strong> (Harflerin arasında ki mesafesi 10 piksel açar. Eksi (-) kullanılabilir.)</li>
                    <li><strong>word-spacing: 20px;</strong> (Kelimelerin arasında ki mesafesi 20 piksel açar. )</li>
                    <li><strong>vertical-align: text-top;</strong> (Dikey hizalama için kullanılır. baseline,  sub, super, top, text-top, middle, bottom, text-bottom gibi değerler alabilir ve yüzde ve piksel kullanımı vardır. )</li>
                    <li><strong>direction: rtl;</strong> (Metinleri sağda ve solda göstermek için kullanılır. ltr ve rtl değerlerini alır.)</li>
                    <li><strong>white-space: nowrap;</strong> (Metinde ki boşlukları kullanmak için ve iptal etmek için kullanılır. nowrap, pre, pre-line, pre-wrap gibi değerler alır.)</li>
                </ul>
                <!-- #CSS Diğer Metin Özellikleri -->
                <a href="/css/index.php?page=fontlar" class="nextButton">Devam Et</a>
                <!-- #nextButton -->