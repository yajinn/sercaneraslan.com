                <h1>CSS Kaydırma - Float</h1>
                <p>Bölümleme yaparken kullandığımız <strong>div</strong> 'leri, metinleri, görselleri vb. sağa veya sola yaslayabiliriz, bunu da <strong>float</strong> özelliği ile yapacağız. Kaydırmalar tam sol ve tam sağ olarak yapılır. Örneğin bir elemanı sola yasladığımızda o mümkün olduğunca en sola yaslanacaktır. </p>
                <p><strong>left</strong> (Sol) ve <strong>right</strong> (Sağ) olmak üzere iki değeri mevcuttur.</p>
                <pre><code class="language-css">
.div {
    float: left;
}
                </code></pre>
                <h2>CSS Clear Özelliği - Clear Property</h2>
                <p> <strong>float</strong> özelliği verilen elemandan sonra ki yazılan içeriklerde/kodlarda kaymalar yaşanabilmektedir. Bu sebeple <strong>float</strong> kullanımından sonra <strong>clear: both;</strong> özelliği kullanılabilir. Genelde, kod düzgün yazıldığında bu özelliğe ihtiyaç olmaz. :before veya :after özellikleri ile kullanılması önerilir.</p>
                <p> Örnek olarak görelim. </p>
                <pre><code class="language-css">
.floatTemizle {
    clear: both; 
}
                </code></pre>

                <a href="/css/index.php?page=sozde_siniflar" class="nextButton">Devam Et</a>
                <!-- #nextButton -->