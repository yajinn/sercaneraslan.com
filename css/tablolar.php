                <h1>CSS Tablolar - Tables</h1>
                <h2>CSS Tablo Sınır/Kenar Kalınlığı - Table Border</h2>
                <p>Bir etiketin sınır/kenar kalınlığını belirtmek veya stil vermek için <strong>border</strong> özelliğini kullanacağız.</p>
                <p><strong>Bir örnek görelim ve örneği açıklayalım.</strong></p>
                <pre><code class="language-css">
table td {
    border: 1px solid black;
}
                </code></pre>
                <p>Yukarıda ki örnekte <strong>" table td "</strong> şeklinde bir yazım görüyoruz. Bu yazımı bir yol gösterici olarak düşünelim. Örneğin bir tablomuz var ve sadece <strong>td</strong> etiketine stil vermek istiyoruz ama <strong>table</strong> etiketi altında ki <strong>td</strong> etiketleri o kadar çok ki hepsine stil vermek büyük zaman kaybı ve fazladan kod kalabağı olacaktır. Bu yazım tam olarak <strong>table</strong> altında ki tüm <strong>td</strong> etiketlerine aşağıdaki stili uygula anlamına gelmektedir. </p>
                <p> <strong>" border: 1px solid black; "</strong> şeklinde bir kod görüyoruz. Bu, çerçeve kalınlığı 1 piksel, çerçeve stili solid (düz çizgi) ve çerçeve rengi siyah (black) olsun anlamına gelmektedir. <strong>border</strong>  stillerini ilerleyen konularda ayrıntılı olarak göreceğiz. </p>
                <!-- #CSS Tablo Sınır -->
                <h2>CSS Kapsama Kenar Stili - Collapse Borders</h2>
                <p>Normal tablolarda tüm hücreler bir çerçeve içerisindedir. çerçeveleri iptal etmek için ise <strong>" border-collapse:collapse; "</strong> özelliğini kullanacağız.</p>
                <p><strong>Örnek olarak görelim.</strong></p>
                <pre><code class="language-css">
table {
    border-collapse: collapse;
}
table td {
    border: 1px solid black;
}
                </code></pre>
                <!-- #CSS Kapsama Kenar Stili -->
                <h2>CSS Tablo Genişliği ve Yüksekliği - Table Width &amp; Height </h2>
                <p>Tablo genişliği için <strong>" width "</strong> özelliğini, tablo yüksekliği için ise <strong>" height "</strong> özelliğini kullanacağız. </p>
                <p><strong>Örnek olarak görelim.</strong></p>
                <pre><code class="language-css">
table {
    width: 100%;
}
td {
    height: 50px;
}
                </code></pre>
                <!-- #CSS Tablo Genişliği -->
                <h2>CSS Tablo Metin Hizalama - Table Text Alignment </h2>
                <p>Hücrelerin içinde ki metinleri yatay hizalamak için <strong>" text-align "</strong> özelliğini kullanacağız. Bu özelliğin değerleri ise <strong>" right "</strong> (Sağ) , <strong>" left "</strong> (sol) ve <strong>" center "</strong> (orta) 'dır. <strong>" center "</strong> değeri genişliğe göre ortalar.</p>
                <p><strong>Örnek olarak görelim.</strong></p>
                <pre><code class="language-css">
td {
    text-align: right;
}
                </code></pre>
                <p>Hücrelerin içinde ki metinleri dikey hizalamak için <strong>" vertical-align "</strong> özelliğini kullanacağız. Bu özelliğin değerleri ise <strong>" top "</strong> (üst) , <strong>" bottom "</strong> (alt) ve <strong>" middle "</strong> (orta) 'dır. <strong>" middle "</strong> değeri yüksekliğe göre ortalar.</p>       
                <p><strong>Örnek olarak görelim.</strong></p>   
                <pre><code class="language-css">
td {
    height: 75px; 
    vertical-align: bottom;
}
                </code></pre>
                <!-- #CSS Tablo Metin Hizalama -->
                <h2>CSS Tablo İç Kenar Boşluğu - Table Padding </h2>
                <p>Tabloda ki, td elementi üzerinde <strong>" padding "</strong> özelliğini kullanarak sınır ve içerik arasındaki boşluğu kontrol edebiliriz. <strong>" padding "</strong> i ilerleyen konularda ayrıntılı olarak göreceğiz.</p>            
                <p><strong>Örnek olarak görelim.</strong></p>                           
                <pre><code class="language-css">
td {
    padding: 10px; 
}
                </code></pre>
                <!-- #CSS Tablo İç Kenar Boşluğu -->
                <h2>CSS Tablo Rengi - Table Color </h2>                     
                <p>Hücreleri renklendirmek için <strong>" color "</strong> (Metin Rengi) ve <strong>" background-color "</strong> (Arkaplan Rengi) özelliklerini kullanacağız.</p>                      
                <p><strong>Örnek olarak görelim.</strong></p>                       
                <pre><code class="language-css">
td {
    background-color: pink;
    color: gray; 
}
                </code></pre>
                <!-- #CSS Tablo Rengi -->
                <a href="/css/index.php?page=kutu_modeli" class="nextButton">Devam Et</a>
                <!-- #nextButton -->