                <h1>HTML5 Application Cache - Uygulama Cache'i</h1>
                <p>Manifest dosyası oluşturarak kodlarımızı/dosyalarımızı cache'letebiliriz. Tabi bu durumda kullanıcıların çevrimdışı/offline durumlarda da (internet bağlantısı olmaksızın) dosyaları kullanabilmesini sağlamış oluruz. Dosyaların cache'lenmesi kullanıcılara çok iyi bir hız deneyimi yaşatır. Server tarafında ki yük ise fazlasıyla düşecektir çünkü kullanıcı sadece güncellenen/eklenen verileri çekecektir.</p>
                <p>Explorer hariç gelişmiş tarayıcıların hepsi Application Cache özelliğini destekler.</p>
                <h2>HTML5 Cache Manifest Örneği</h2>
                <pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
&lt;html manifest="demo.appcache"&gt;
    &lt;body&gt;
        Döküman içeriği...
    &lt;/body&gt;
&lt;/html&gt;
                </code></pre>
                <h2>Cache Manifest Basics - Temel Manifest Cache'i</h2>
                <p>Dökümandaki html elemanı içine manifest özniteliği ekleyerek Application Cache'i kullanabilir duruma getirebiliriz.</p>
                <pre><code class="language-javascript">
&lt;html manifest="demo.appcache"&gt;
                </code></pre>
                <p>Örnek bir Manifest Dosyası içeriği</p>
                <pre><code class="language-javascript">
CACHE MANIFEST
index.html
stylesheet.css
images/logo.png
scripts/main.js  
                </code></pre>
                <a href="/html5/index.php?page=webWorkers" class="nextButton">Devam Et</a>
                <!-- #nextButton -->