                <h1>CSS Arkaplanlar - Backgrounds </h1>
                <div class="cssBackground"> 
                    <p> <strong>Etiketlere arkaplan efektleri vermek için CSS Background
                     özellikleri kullanılır. Background özelliklerini görelim...</strong></p> 
                    <ul>
                        <li>background-color</li>
                        <li>background-image</li>
                        <li>background-repeat</li>
                        <li>background-attachment</li>
                        <li>background-position</li>
                    </ul>
                </div>
                <!-- #pages_content_background_div -->
                <h2>CSS Arkaplan Rengi - Background Color</h2>
                <p><strong>"background-color"</strong> özelliği <strong>HTML/XHTML</strong> etiketlerine arkaplan rengi vermek için kullanılır. Aşağıdaki <strong>CSS</strong> kodu; </p>
                <ul>
                    <li>Tüm <strong>" div  "</strong> etiketlerinin arkaplan renklerini gri yapacak,</li>
                    <li>Id Seçicisi <strong>"paragrafStilim"</strong> olan etiketin arkaplanını mavi yapacak,</li>
                    <li>Class Seçicisi <strong>"ozelStil"</strong> olan tüm etiketlerin arkaplan rengi yeşil olacak. </li>
                </ul>
                <pre><code class="language-css">
div {
    background-color: gray;
}
#paragrafStilim {
    background-color: blue;
}
.ozelStil {
    background-color: green;
}               </code></pre>
                <!-- #CSS Arkaplan Rengi -->
                <h2>CSS Arkaplan Görseli - Background Image</h2>
                <p><strong>"background-image"</strong> özelliği <strong>HTML/XHTML</strong> etiketlerine arkaplan görseli eklemek için kullanılır.  Örnek olarak görelim, aşağıdaki CSS kodu tüm sayfanın arkaplanına "arkaplan.jpg" adlı görseli koyacaktır.</p>
                <pre><code class="language-css">
body {
    background-image: url('arkaplan.jpg');
}               </code></pre>
                <!-- #CSS Arkaplan Görseli -->
                <h2>CSS Arkaplan Görseli Tekrarı - Background Image Repeat</h2>
                <p><strong>"background-repeat"</strong> özelliği için 4 ayrı değer bulunmaktadır.</p>
                <ul>
                    <li><strong>background-repeat: repeat;</strong> (Eklenen görsel küçük gelirse sayfa doluncaya kadar görsel hem yatay olarak hemde dikey olarak tekrar edecektir. Bu özellik yazılmasa bile CSS varsayılan olarak bunu yapacaktır.)</li>
                    <li><strong>background-repeat: no-repeat;</strong> (Eklediğimiz görsel hiçbir şekilde tekrar etmesin istiyorsak bu özelliği kullanacağız.) </li>
                    <li><strong>background-repeat: repeat-x;</strong> (Eklediğimiz görsel yatay olarak tekrar etsin istiyorsak bu özelliği kullanacağız.)</li>
                    <li><strong>background-repeat: repeat-y;</strong> (Eklediğimiz görsel dikey olarak tekrar etsin istiyorsak bu özelliği kullanacağız.)</li>
                </ul>
                <p><strong>Örnek olarak görelim:</strong></p>
                <pre><code class="language-css">
body {
    background-image: url('arkaplan.jpg');
    background-repeat: no-repeat;
}               
                </code></pre>
                <p>Background özelliğine arkaya arkaya değerler verilebilir. Örnek;</p>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat;
}               
                </code></pre>
                <!-- #CSS Arkaplan Görseli Tekrarı -->
                <h2>CSS Arkaplan Görseli Pozisyonu - Background Image Position</h2>
                <p>Bu özellik, görselin sayfada ki pozisyonunu belirler. <strong>"background-position"</strong> özelliği için 11 ayrı değer bulunmaktadır.</p>
                <ul>
                    <li><strong>background-position: top left;</strong> (Bu bildirimi kullandığımızda görselimiz üstün solunda yer alacak.) </li>
                    <li><strong>background-position: top center;</strong> (Bu bildirimi kullandığımızda görselimiz üstün ortasında yer alacak.)</li>
                    <li><strong>background-position: top right;</strong> (Bu bildirimi kullandığımızda görselimiz üstün sağında yer alacak.) </li>
                    <li><strong>background-position: center left;</strong> (Bu bildirimi kullandığımızda görselimiz ortanın solunda yer alacak.) </li>
                    <li><strong>background-position: center center;</strong> (Bu bildirimi kullandığımızda görselimiz ortanın ortasında yer alacak.) </li>
                    <li><strong>background-position: center right;</strong> (Bu bildirimi kullandığımızda görselimiz ortanın sağında yer alacak.)</li>
                    <li><strong>background-position: bottom left;</strong> (Bu bildirimi kullandığımızda görselimiz altın solunda yer alacak.)</li>
                    <li><strong>background-position: bottom center;</strong> (Bu bildirimi kullandığımızda görselimiz altın ortasında yer alacak.)</li>
                    <li><strong>background-position: bottom right;</strong> (Bu bildirimi kullandığımızda görselimiz altın sağında yer alacak.)</li>
                    <li><strong>background-position: x% y%;</strong> (Görselimize yatay ve dikey olarak yüzde üzerinden pozisyon vermemizi sağlar. İlk yüzde yatayın, ikinci yüzde ise dikeyin pozisyonudur. Örnek: background-position: 50% 75%; )</li>
                    <li><strong>background-position: xpos ypos;</strong> (Görselimize yatay ve dikey olarak pixel bakımından pozisyon vermemizi sağlar. İlk pixel 'li rakam yatayın, ikinci pixel 'li rakam ise dikeyin pozisyonudur. Örnek: background-position: 50px 100px; )</li>
                </ul>
                <p><strong>Birkaç örnek daha görelim...</strong></p>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat;
    background-position: top left;
}               
                </code></pre>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat bottom right;
}
                </code></pre>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat 50% 75%;
}
</code></pre>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat 50px 100px;
}
                </code></pre>
                <!-- #CSS Arkaplan Görseli Pozisyonu -->
                <h2>CSS Background Image Attachment</h2>
                <p>Arkaplana koyduğumuz görselin kaydırma çubuğu ile birlikte hareket etmesini veya etmemesini sağlayabiliriz. Arkaplan görselinin kaydırma çubuğu ile birlikte hareket etmesini istiyorsak aşağıdaki kodu kullanmalıyız. (Varsayılan olarak seçili olan özellik budur, ekstradan yazılmasına gerek yoktur.)</p>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat scroll;
}
                </code></pre>
                <p> Arkaplan görselinin kaydırma çubuğu ile birlikte hareket <strong>etmemesini</strong> istiyorsak aşağıda ki kodu kullanmalıyız.</p>
                <pre><code class="language-css">
body {
    background: url('arkaplan.jpg') no-repeat fixed;
}
                </code></pre>           
                <!-- #CSS Background Image Attachmen -->
                <a href="/css/index.php?page=metinler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->