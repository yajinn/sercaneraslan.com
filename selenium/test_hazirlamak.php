                <h1>Selenium IDE ile Test Hazırlamak</h1>
                <p><strong>Record</strong> ikonuna tıkladığımızda Selenium IDE yaptığımız hareketleri kayıt etmeye başlar ve eğer sayfamız fazla miktarda JavaScript içermiyorsa oluşturulan kodlar işimize görecektir fakat internette ki çoğu web sayfası JavaScript tabanlı dinamik özelliği barındırır. JavaScript'in sayfanın elementlerini kontrol etmesi Selenium'un düzgün kod oluşturmasını zorlaştırır. Örneğin bir linkin üzerine geldiğinizde sayfadaki bir div'in oluşturulması (OnMouseOver event'ına bağlı olarak) ve sizin bu div'in içindeki bir linke tıklamanızı Selenium IDE düz olarak koda dökemez. Bu yüzden araya ek kodlar ekleyerek oluşan kodları düzenlemeniz gerekir.</p>
                <p><strong>Örnek Test (Base URL: http://www.sahibinden.com/)</strong></p>
                <ul>
                    <li>Anasayfa'dan login olma sayfasına git.</li>
                    <li>Login olma ekranında kullanıcı adını gir.</li>
                    <li>Login olma ekranında şifreyi gir.</li>
                    <li>Submit butonuna bas.</li>
                    <li>"Bana Özel" sayfasına yönlenip yönlenmediğini kontrol et.</li>
                    <li>"Adres Bilgilerim"e tıkla.</li>
                    <li>Çıkan sayfada Güncelle'ye tıkla.</li>
                    <li>TC Kimlik Noyu 11111111111 olarak değiştir.</li>
                    <li>Kaydet butonuna tıkla.</li>
                    <li>"Lütfen T.C. Kimlik Numaranızı Doğru Olarak Giriniz." hata mesajının sayfada yeralıp almadığını kontrol et.</li>
                </ul>
                <p>Bu işlemleri Selenium Ide ile kayıt ettiğimizde bize aşağıdaki kodu oluşturur:</p>
                <pre><code class="language-javascript">
&lt;table&gt;
    &lt;tr&gt;
        &lt;td&gt;open&lt;/td&gt;
        &lt;td&gt;http://www.sahibinden.com/&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;link=tıklayın&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;type&lt;/td&gt;
        &lt;td&gt;username&lt;/td&gt;
        &lt;td&gt;sercaneraslan&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;type&lt;/td&gt;
        &lt;td&gt;password&lt;/td&gt;
        &lt;td&gt;123456&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//button[@type=&#039;submit&#039;]&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//div[@id='dropmenudiv']/a[2]/div/div/div/span&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//fieldset[@id='1484921']/table/tbody/tr[1]/td[3]/a/div/div/div/span/nobr&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//button[@type='submit']&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                </code></pre>
                <p>5. satırda yer alan <strong>"clickAndWait"</strong> komutu <strong>"dropmenudiv"</strong> id'li div'e ulaşmaya çalışıyor fakat "Bana Özel" sayfasında ki bu div JavaScript ile "Üyeliğim" linkinin üzerine geldiğimizde oluşturuluyor. Dolayısıyla mouse'un "Üyeliğim" linkinin üzerine gitmesi gerektiğini kodumuza eklemeliyiz.</p>
                <p>Bu tip JavaScript kökenli problemleri çözdükten sonra sayfalarda ki kontrolleri yapmamız gerekiyor. Login olduktan sonra gittiğimiz sayfada "Bana Özel" yazıp yazmadığının kontrolü için <strong>"assertTextPresent"</strong> komutunu kullanmamız gerekir. "TC Kimlik No" girildikten sonra sayfada hata oluşup oluşmadığını görmek için de aynı komutu kullanmalıyız. </p>
                <p>Kodun son hali:</p>
                <pre><code class="language-javascript">
&lt;table&gt;
    &lt;tr&gt;
        &lt;td&gt;open&lt;/td&gt;
        &lt;td&gt;http://www.sahibinden.com/&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;link=tıklayın&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;type&lt;/td&gt;
        &lt;td&gt;username&lt;/td&gt;
        &lt;td&gt;sercaneraslan&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;type&lt;/td&gt;
        &lt;td&gt;password&lt;/td&gt;
        &lt;td&gt;123456&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//button[@type=&#039;submit&#039;]&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;assertTextPresent&lt;/td&gt;
        &lt;td&gt;Bana Özel &gt; Özet&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;mouseOver&lt;/td&gt;
        &lt;td&gt;link=Üyeliğim&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//div[@id='dropmenudiv']/a[2]/div/div/div/span&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//fieldset[@id='1484921']/table/tbody/tr[1]/td[3]/a/div/div/div/span/nobr&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;type&lt;/td&gt;
        &lt;td&gt;id_number&lt;/td&gt;
        &lt;td&gt;11111111111&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;clickAndWait&lt;/td&gt;
        &lt;td&gt;//button[@type='submit']&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;assertTextPresent&lt;/td&gt;
        &lt;td&gt;Lütfen T.C. Kimlik Numaranızı Doğru Olarak Giriniz.&lt;/td&gt;
        &lt;td&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
                </code></pre>
                <h2>Selenium IDE ile ilgili Son Bilgiler</h2>
                <p>Selenium IDE bir çok dilde çıktı verebilir <strong>PHP, Java, Ruby</strong> vb. fakat default olarak <strong>HTML</strong> tablolarında Test Case'leri saklar.</p>
                <p>Farklı tarayıcıda test yapmak için (Örneğin; Opera, Chrome, Internet Explorer vs) <strong>Selenium Remote Control (Selenium RC)</strong>, birden fazla Test Case'in aynı anda test edilmesi için <strong>Selenium Grid</strong> kullanmanız gerekmektedir.</p>
                <p>Kaydettiğiniz birden fazla Test Case'i aynı IDE yi kullanarak çalıştırabilir ve rapor alabilirsiniz. Selenium IDE ile test yapacaksanız ve testi daha sonra <strong>Selenium RC</strong> ya da <strong>Selenium Grid</strong> kullanarak farklı tarayıcılarda çalıştıracaksanız kesinlikle <strong>CSS Locator</strong> kullanmanızı tavsiye ederim. Çünkü Xpath e göre 10 kat daha hızlıdır ve otomatik testlerin bir insana göre de 10 kat hızlı olduğunu düşünürsek 100 kat daha hızlı test yapabilirsiniz.</p>
                <a href="/selenium/index.php?page=selenium_rc" class="nextButton">Devam Et</a>
                <!-- #nextButton -->
                