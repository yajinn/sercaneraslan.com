                <h1>Selenium IDE Nasıl Çalışır ?</h1>
                <p>Selenium IDE, 3 bölümde komutlar girilerek çalıştırılabilmektedir.</p>
                <p>1) <strong>Command: </strong>Olayların gerçekleşmesi için komutların girilmesini sağlar. En çok kullanılanları görelim;</p>
                <ul>
                    <li><strong>open :</strong> URL'i ( Siteyi ) açmak içindir.</li>
                    <li><strong>click :</strong> Bir nesneye tıklamak içindir.</li>
                    <li><strong>clickandWait :</strong> Nesneye tıkladıktan sonra sayfanın yüklenmesini bekler.</li>
                    <li><strong>assertElementPresent :</strong> Belirtilen elemanın yüklenmesini bekler.</li>
                    <li><strong>assertTextPresent :</strong> Belirtilen bir text'in(yazının) sayfada olup olmadığını kontrol eder.</li>
                    <li><strong>deleteCookie :</strong> Belirtilen Cookie'nin silinmesi sağlar.</li>
                    <li><strong>mouseOver :</strong> Mouse'u belirtilen elementin üzerine götürür.</li>
                    <li><strong>verifyTextPresent :</strong> Belirtilen nesnenin belirmesini bekler ve sağlamasını yapar.</li>
                    <li><strong>waitForPageToLoad :</strong> Sayfanın yüklenmesini bekler.</li>
                    <li><strong>captureEntirePageScreenshot :</strong> Üzerinde test yaptığınız sayfanın ekran görüntüsünü çerçevesiz olarak kaydeder.</li>
                    <li><strong>waitForElementPresent :</strong> Sayfadaki bir elementin yüklenmesini bekler, bunu genellikle JavaScript tarafından kontrol edilen elementler için kullanırız.</li>
                    <li><strong>type :</strong> Bir input'un içine yazmak için kullanılır.</li>
                </ul>
                <p>2) <strong>Target:</strong> Command'ta belirttiğimiz olayın hangi nesne üzerinde gerçekleşeceğini belirtiriz. Burada CSS Locator ya da Xpath gibi "Yer Bulucular" kullanmamız gerekmektedir. Bir sonra ki konuda "Yer Bulucular"a değineceğiz.</p>
                <ul>
                    <li><strong>Css=#menu1</strong> ( HTML'de ki elemanlardan id si menu1 olan [id="menu1"] demek.)</li>
                    <li><strong>Xpath=div[@id=’menu1’]</strong> ( id si menu1 olan div [id="menu1"] demek.)</li>
                </ul>
                <p>3) <strong>Value:</strong> Target'ta belirttiğimiz nesnenin bir değeri varsa ve o değeri belirtmemiz gerekiyorsa ya da sitede bir yere bir değer yazmamız gerekiyorsa kullanırız.</p>
                <ul>
                    <li><strong>Label = Üye Girişi</strong> (İçinde "Üye Girişi" yazan HTML elemanı demektir. Örneğin, <strong>&lt;span&gt;Üye Girişi&lt;/span&gt;</strong> )</li>
                </ul>
                <a href="/selenium/index.php?page=yer_bulucular" class="nextButton">Devam Et</a>
                <!-- #nextButton -->