                <h1>Selenium IDE Yer Bulucular - Locators</h1>
                <p>Selenium IDE ve yazılım dillerinde kullanılan Locator'ları (Yer Bulucuları) sıralarsak,</p> 
                <ul>
                    <li><strong>Xpath</strong></li>
                    <li><strong>CSS Locator</strong></li>
                    <li><strong>DOM (Data Object Model)</strong></li>
                    <li><strong>Link Locator</strong></li>
                </ul>
                <p>olmak üzere 4 tanedir.</p>
                <h2>Selenium IDE XPath</h2>
                <p>Xpath, Selenium IDE de kullanılan bir yol göstericidir. Genelde veritabanından sorgu çektiğimizde Test Case'de sorguyu Path'e vermek için kullanılır. Diğer Locator'larda veri sorgusu çekilemiyor.</p>
                <p>Bu arada Xpath sadece IE (Internet Explorer) tarayıcısında diğer tarayıcılara göre 10 kat daha yavaş çalışmaktadır. Bu yüzden önerilmiyor ama veritabanından bir sorgunun karşılaştırılması gerekiyorsa en ideal yöntem olarak görülmektedir. </p>
                <h2>Selenium IDE XPath Nasıl Kullanılır ?</h2>
                <p>Selenium IDE ile kayıda başlayıp www.sahibinden.com ’un Anasayfası'ndaki "Acil Acil" linkine tıkladığınızda Selenium IDE "Source" bölümünde şöyle bir kayıt tutar;</p>
                
                <pre><code class="language-javascript">
&lt;tr&gt;
    &lt;td&gt;open&lt;/td&gt;
    &lt;td&gt;/&lt;/td&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
    &lt;td&gt;click&lt;/td&gt;
    &lt;td&gt;
        //div[@id='content']/div[3]/div[1]/div[2]/ul[1]/li[1]/a/strong/span/
    &lt;/td&gt;
    &lt;td&gt;&lt;/td&gt;
&lt;/tr&gt;
                </code></pre>
                <p>Bu Path kayıt sırasında otomatik olarak yazılır fakat istikrarlı çalışmamaktadır çünkü sitenin farklı bir sayfasında aynı linke tıklamak istediğinizde divler ya da tablollarda kayma olursa yol bulunamaz. Dolayısıyla şöyle bir ifade kullanılır;</p>
                <p><strong>Xpath=//*/a[@title='Acil Acil']</strong></p>
                <p>Bu şekilde yazılan bir Locator şu anlama gelmektedir. HTML bloğunun herhangi bir yerindeki linkin title'lı "Acil Acil" olan ifadedir. Alternatif olarak HTML ağacında yukarı ve aşağıya gidilebilir.</p>
                <p>Xpath Locator olarak <strong>class, id, name, title, span, a, div, type, ul, li</strong> gibi ifadelerini tanıyabilmektedir fakat farklı isimlere sahip olmasına rağmen mesela id gibi nitelikleri aynı ise HTML ağacında ilk başta geleni almaktadır. Bu yüzden Locator'a <strong>uniqe (sadece ona ait olan)</strong> bir nitelik belirtmek gerekir.</p>
                <!-- #Xpath -->
                <h2>Selenium IDE CSS Locator</h2>
                <p>Xpath'e göre yaklaşık 10 kat daha hızlı çalışabilen bir Locator'dır. Çalışma mantığı Web sitelerinde yer alan HTML ağacındaki <strong>CSS class</strong> ve <strong>CSS id</strong> 'lerine göre yer bulmaya yarar. Selenium <strong>CSS3</strong> dahil tüm CSS Selector'lara destek vermektedir.</p>
                <h2>Selenium IDE CSS Locator Nasıl Çalışır ?</h2>
                <p>Selenium IDE kullanırken Xpath yerine CSS Locator ifadeleri yazıyoruz. Yine www.sahibinden.com ’un anasayfasındaki "Acil Acil" linkini tıkladığınızda Xpath ile</p>
                <p><strong>Xpath=//*/a[@title='Acil Acil']</strong></p>
                <p>yazmak yerine</p>
                <p><strong>CSS=.boxContent a</strong></p>
                <p>yazmak yeterli olacaktır.</p>
                <p>Buradaki (.)nokta <strong>class</strong> olduğunu <strong>boxContent</strong> class ismini, <strong>a</strong> ise ağacın altındaki linki belirtir fakat CSS Locator bu kadar kısa yazılıp hızlı işlem yapabilmesine karşın database sorgularında düzgün çalışmamaktadır.</p>
                <p>Diyelim ki yukarıdaki HTML ağacında "<strong>ul class=cats privateCats</strong>" in altındaki 3. li 'nin altındaki linke gitmek istediğimde</p>
                <p><strong>CSS=.cats privateCats li + li + li a</strong></p>
                <p>yazmamız gerekiyor. Xpath'le yine 3. li ye ulaşmak istersek</p>
                <p><strong>Xpath=//*/ul[@class='cats privateCats']/li[3]/a</strong></p>
                <p>Önemli bir nokta var, buradaki "3" sayfa değiştikçe değişebilir. Yani farklı bir sayfada 5 tane li yazmak gerekebilir. Bu yüzden böyle bir path kullanmak sakıncalıdır. </p>
                <p>Bunun yerine</p>
                <p><strong>Xpath=//*/a[@title='Top 100]</strong></p>
                <p>ya da</p>
                <p><strong>Css=a[title=Top 100]</strong></p>
                <p>yazmalıyız. Bu noktada CSS "Where" (Nerede) sorgusuna cevap verir ama test ortamında kararlı çalışmaz.</p>
                <!-- #CSS Locator -->
                <h2>Selenium IDE Link Locator</h2>
                <p>Xpath ve CSS Locator'un çalışmadığı zamanlarda kullanılır. Her zaman kullanmak sakıncalıdır. Selenium linki bulamayabilir ya da link sayfa açılışında yüklenmemiş olabilir. CSS Locator kadar hızlı çalışır.</p>
                <h2>Selenium IDE Link Locator Nasıl Çalışır ?</h2>
                <p>Selenium IDE kullanırken Xpath yerine Link Locator ifadeleri yazıyoruz. Yine www.sahibinden.com ’un anasayfasındaki acil acil linkini tıkladığınızda Xpath ile</p>
                <p><strong>Xpath=//*/a[@title='Acil Acil']</strong></p>
                <p>yazmak yerine</p>
                <p><strong>Link=Acil Acil</strong></p>
                <p>yazıyoruz.</p>
                <!-- #Link Locator -->
                <h2>Selenium IDE DOM (Data Object Model)</h2>
                <p>Css Locator ve Xpath yeterli olduğu için bu konu üzerinde durmayacağız. Eğer konu hakkında bilgi sahibi olmak isterseniz <a href="http://seleniumhq.org/docs/">buraya</a> tıklayabilirsiniz.</p>
                <a href="/selenium/index.php?page=test_hazirlamak" class="nextButton">Devam Et</a>
                <!-- #nextButton -->
                