                <h1>HTML5 Inline SVG</h1>
                <p>HTML5 'in satır içi SVG desteği vardır.</p>
                <h2>SVG Nedir?</h2>
                <ul>
                    <li>SVG, Ölçeklenebilir Vektör Grafikleri (Scalable Vector Graphics) anlamına gelir.</li>
                    <li>SVG, Web'te vektör tabanlı grafikler tanımlamak için kullanılır.</li>
                    <li>SVG, grafikleri XML formatında tanımlar.</li>
                    <li>Yakınlaştırılan veya yeniden boyutlandırılan (zoom / resize) grafiklerde herhangi bir kalite kaybı olmaz.</li>
                    <li>Her eleman ve her öznitelik SVG dosyalarında animasyon olarak kullanılabilir.</li>
                    <li>SVG, W3C tarafından önerilmektedir.</li>
                </ul>
                <h2>SVG Avantajları</h2>
                <ul>
                    <li>SVG görselleri (images), herhangi bir metin editöründe oluşturulabilir ve düzenlenebilir.</li>
                    <li>SVG görselleri aranabilir, indexlenebilir, scriptlenebilir ve sıkıştırılabilir.</li>
                    <li>SVG görselleri ölçeklenebilir.</li>
                    <li>SVG görselleri büyük çözünürlüklerde ve kalitede yazdırılabilir.</li>
                    <li>SVG görselleri bozulma olmadan yakınlaştırılabilir.</li>
                    <li>Gelişmiş tüm tarayıcılar destekler.</li>
                </ul>               
                <h2>HTML İçinde SVG</h2>
                <p>Direk olarak HTML sayfasının içine dahil edilebilir. Örneği görelim;</p>
                <svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190">
                   <polygon points="74,10 10,10 190,60 10,60 10,180" style="fill:yellow;stroke:orange;stroke-width:5;fill-rule:evenodd;" />
                </svg>  
                <pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
    &lt;svg xmlns="http://www.w3.org/2000/svg" version="1.1" height="190"&gt;
        &lt;polygon points="74,10 10,10 190,60 10,60 10,180" style="fill:yellow;stroke:orange;stroke-width:5;fill-rule:evenodd;" /&gt;
    &lt;/svg&gt;
&lt;/body&gt;
&lt;/html&gt;
                </code></pre>   
                
    
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=geolocation" class="nextButton">Devam Et</a>
                <!-- #nextButton -->