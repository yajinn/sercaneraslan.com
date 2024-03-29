                <h1>HTML5 Giriş - Intro</h1>
                <p>HTML5, Yeni HTML Standartıdır. HTML5 öğrenmek için HTML/XHTML biliyor olmanız gerekmektedir, öğrenmek için <a href="/xhtml.php">tıklayınız.</a></p>
                <p>Bir önce ki versiyon olan HTML 4.01 , 1999'da gelmişti. O tarihten bu yana Web'te pek çok şey değişti. HTML5 hala geliştirilmeye devam ediyor, buna rağmen gelişmiş tarayıcılar yeni HTML5 elemanlarını ve API'sini desteklemektedir.</p>
                <h2>HTML5 Nasıl Başladı?</h2>
                <p>HTML5, World Wide Web Consortium (W3C) ile  Web Hypertext Application Technology Working Group (WHATWG) işbirliğidir. WHATWG, web formları ve uygulamalar üzerinde çalışıyordu.W3C ise XHTML 2.0 üzerinde çalışıyordu. 2006'da  HTML'in yeni bir sürümünü yaratmak için işbirliği yapmayı kararlaştırdılar.</p>
                <p>HTML5 için bazı kurallar belirlendi:</p>
                <ul>
                    <li>Yeni özellikler HTML , CSS , DOM ve JavaScript tabanlı olmalı.</li>
                    <li>Dış eklentiler için ihtiyaç azaltılmalı (Flash gibi).</li>
                    <li>Hatalar daha iyi yakalanabilmeli.</li>
                    <li>Script yazmak yerine daha fazla HTML kullanılmalı.</li>
                    <li>HTML5 Aygıt bağımsız olmalı.</li>
                    <li>Geliştirme süreci herkes tarafından görülebilmeli.</li>
                </ul>
                <h2>HTML5 &lt;!DOCTYPE&gt;</h2>
                <p>HTML5 'te sadece bir <! Doctype> bildirimi vardır ve kullanımı çok basittir.</p>
                <pre><code class="language-javascript">&lt;!DOCTYPE html&gt;</code></pre>
                <h2>Minimum HTML5 Dökümanı</h2>
                <p>Aşağıda basit bir HTML5 belgesi için gerekli olan tag'leri (etiketleri) görüyorsunuz.</p>
                
                <pre><code class="language-javascript">&lt;!DOCTYPE html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;title&gt;Dökümanın Başlığı&lt;/title&gt;
    &lt;/head&gt;

    &lt;body&gt;
        Dökümanın içeriği...…
    &lt;/body&gt;

&lt;/html&gt;
                </code></pre>       
        
                <h2>HTML5 için Tarayıcı Desteği</h2>
                <p>HTML5 'in henüz resmi bir standartı yoktur ve tarayıcıların hiçbirinde tam HTML5 desteği yoktur yani kısmen desteklemektedirler. Ama bütün gelişmiş tarayıcılar (Opera, Firefox, Safari, Chrome ve Internet Explorer'ın son sürümü) en son sürümlerine yeni HTML5 özelliklerini eklemeye devam etmektedirler.</p>

                <h2>Yeni Semantik / Yapı Elemanları</h2>
                <ul>
                    <li>&lt;article&gt; : Makale, deneme tarzı yazıları kapsar.</li>
                    <li>&lt;aside&gt; : Ana içerikten ayrı yazılan kısımdır.</li>
                    <li>&lt;bdi&gt; :  Metni ya da kelimeyi izole etmek için kullanılır.</li>
                    <li>&lt;command&gt; : Kullanıcının çağırabileceği bir komut düğmesi tanımlar.</li>
                    <li>&lt;details&gt; : Detay bilgisi içerir.</li>
                    <li>&lt;summary&gt; : Yazının başlığını belirler.</li>
                    <li>&lt;figure&gt; : Çeşitli medya içeriği gruplarını belirler.</li>
                    <li>&lt;figcaption&gt; : &lt;figure> elementinin başlığını belirler.</li>
                    <li>&lt;footer&gt; : Sitelerin en alt kısmını içine alır.</li>
                    <li>&lt;header&gt; : Sitenin en üst kısmını içine alır.</li>
                    <li>&lt;hgroup&gt; : Başlık grubunu belirtir. h1, h2 gibi başlık elementleri burada tanımlanabilir.</li>
                    <li>&lt;mark&gt; : Yazı içerisinde özellikle üstünde durulan kelimeleri belirler.</li>
                    <li>&lt;meter&gt; : Bilinen bir aralık içinde sayısal bir ölçüm tanımlar.</li>
                    <li>&lt;nav&gt; : Menüler içindir.</li>
                    <li>&lt;progress&gt; : İşlem süreci göstergesi ekler.</li>
                    <li>&lt;ruby&gt; : Bir ruby açıklama tanımlar(Doğu Asya tipografi için).</li>
                    <li>&lt;rt&gt; : Karakterler içim bir açıklama / telaffuz tanımlar(Doğu Asya tipografi için).</li>
                    <li>&lt;rp&gt; : Ruby açıklamalarını desteklemeyen tarayıcılarda göstermek için kullanılır.</li>
                    <li>&lt;section&gt; : Sitelerin ana içerik kısmını içine alır.</li>
                    <li>&lt;time&gt; : Tarih, saat verilerini kapsar.</li>
                    <li>&lt;wbr&gt; : Olası bir satır sonu tanımlar.</li>
                </ul>
                <h3>Yeni Medya Elemanları</h3>
                    <ul>
                        <li>&lt;audio&gt; : Sayfaya Ses oynatıcı bir modül ekler.</li>
                        <li>&lt;video&gt; : Sayfaya Video oynatıcı bir modül ekler.</li>
                        <li>&lt;source&gt; : &lt;video&gt; ve &lt;audio&gt; için çoklu ortam kaynaklarını tanımlar.</li>
                        <li>&lt;embed&gt; : Dışarıdan eklenen componentler için kullanılır.</li>
                        <li>&lt;track&gt; :  &lt;video&gt; ve &lt;audio&gt; için metin parçaları tanımlar.</li>
                    </ul>
                
                <h3>Yeni &lt;canvas&gt; Elemanı</h3>
                    <ul>
                       <li>&lt;canvas&gt; : Betik üzerinden anında grafik çizmek için kullanılır. (Genellikle JavaScript)</li>
                    </ul>
                
                
                <h3>Yeni Form Elemanları</h3>
                    <ul>
                       <li>&lt;datalist&gt; : Düzenlenebilir elementlere otomatik tamamlama özelliği verilmesini sağlar.</li>
                       <li>&lt;keygen&gt; : Bir çift anahtar oluşturur. (Formlar için)</li>
                       <li>&lt;output&gt; : Bir hesaplamanın sonucu tanımlar</li>
                    </ul>

                <h3>Kaldırılan Elemanlar :</h3>
                    <ul>
                        <li>&lt;acronym&gt;</li>
                        <li>&lt;applet&gt;</li>
                        <li>&lt;basefont&gt;</li>
                        <li>&lt;big&gt;</li>
                        <li>&lt;center&gt;</li>
                        <li>&lt;dir&gt;</li>
                        <li>&lt;font&gt;</li>
                        <li>&lt;frame&gt;</li>
                        <li>&lt;frameset&gt;</li>
                        <li>&lt;noframes&gt;</li>
                        <li>&lt;strike&gt;</li>
                        <li>&lt;tt&gt;</li>
                    </ul>
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=video" class="nextButton">Devam Et</a>
                <!-- #nextButton -->