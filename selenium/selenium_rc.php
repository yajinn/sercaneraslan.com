                <h1>Selenium RC Nedir ?</h1>
                <p>Selenium 3 farklı şekilde çalışan bir sisteme sahiptir.</p>
                <ul>
                    <li><strong>Selenium IDE</strong></li>
                    <li><strong>Selenium RC</strong></li>
                    <li><strong>Selenium GRID</strong></li>
                </ul>
                <p>Eğer Basit bir test yapacaksanız <strong>Selenium IDE</strong> bunun için yeterlidir. Geçtiğimiz konularda <strong>Selenium IDE</strong> hakkında detaylı bilgi verdik fakat birden fazla testin sürekli yapılması gerekiyorsa <strong>Selenium IDE</strong> burada yeterli olmayacaktır. Bu yüzden <strong>Selenium Remote Control (RC)</strong> kullanmamız gerekir.</p>
                <p><strong>Selenium Remote Control (RC)</strong> içerisinde <strong>Selenium Server</strong> ve yazılım dilleri için <strong>Client Driver</strong> 'lar içermektedir. Hem Server olarak hem de Client olarak aynı dizin yapısı kullanılabilir. <strong>Selenium Remote Control (RC),</strong> Java ile yazılmış bir .jar paketidir ve her türlü işletim sisteminde çalışabilir. <strong>Selenium Remote Control (RC)</strong> 'ün çalışma sistemi şu şekildedir. </p>
                <p>Windows'ta "Başlat > Çalıştır" a tıkladıktan sonra "cmd" command programı açılır ve <strong>Selenium Remote Control (RC)</strong> dizinine gidilir.</p>
                <pre><code class="language-javascript">C:\Document and Settings\BİLGİSAYAR ADI\selenium\selenium-rc></code></pre>
                <p>Eğer <strong>Selenium Remote Control (RC)</strong> 'ü farklı bir dizine kurduysanız yolu ona göre düzeltmeniz gerekecektir.</p>
                <p>Daha sonra komut satırına aşağıdaki ifade yazılarak <strong>Selenium Server</strong> çalıştırılır ve test işlemi başlar.</p>
                <pre><code class="language-javascript">java - jar selenium-server.jar  "-htmlsuite *tarayıcıadı" "test yapılacak HTML dosyası" "Raporun alınacağı yol"</code></pre>
                <p>Örnek Kod:</p>
                <pre><code class="language-javascript"> java - jar selenium-server.jar  -htmlsuite *firefox C:/test/suite.html C:/test/result.html</code></pre>
                <p>Tarayıcı adını "IE" ve "safari" olarak yazarsanız Internex Explorer'da ve Safari'de de test yapabilirsiniz.</p>
                <p><strong>Selenium Remote Control (RC)</strong> standart olarak <strong>4444</strong> portunu kullanmaktadır. Aynı anda farklı testler yapılmak isteniyorsa farklı port verilmesi gerekir.</p>
                <p>Örnek Kod:</p>
                <pre><code class="language-javascript">java - jar selenium-server.jar  -Dport=4445 -htmlsuite *firefox C:/test/suite.html C:/test/result.html</code></pre>
                <div class="cup">
                    <h1>Tebrikler!!!</h1>
                    <p> <strong>Tebrikler,</strong> artık <strong>Selenium IDE</strong> kullanmayı biliyorsunuz. Öğrendiklerinizi deneyip kendinizi geliştirebilirsiniz, yeni birşeyler öğrenirseniz de bunları bir blog sayfasında paylaşmanız hepimizin yararına olur. Yazım hataları varsa iletişim sayfasından bana iletebilirsiniz.</p>
                </div>