                <h1>CSS Kutu Modeli - Box Model</h1>
                <p><strong>CSS " Kutu modeli "</strong> tasarım amacıyla kullanılmaktadır. Kutuların (div) diğer kutular ile olan mesafesini veya kutu içinde ki içerik ile kutu arasında ki mesafeyi ayarlamak için kullanılır. Ayrıca kutunun kenar kalınlığıda belirleyebiliriz, bu özellikleri ilerleyen konularda ayrıntılı olarak göreceğiz.</p>
                <p><strong>" Kutu modeli " HTML/XHMTL</strong> etiketlerinin etrafını saran bir kutudur <strong>" Kutu modeli " , margin</strong> (Dış kenar boşluğu), <strong>border</strong> (Kenar kalınlığı), <strong>padding</strong> (İç kenar boşluğu) ve içerikten oluşur. </p>
                <div id="cssBoxModel"></div>
                <ul>
                    <li><strong>margin</strong> - Asıl div 'in (Turuncu renklere sahip olan kutunun) diğer kutulara, görsellere, içeriklere vs. olan mesafesini belirler. Yani <strong>margin</strong> özelliği turuncu kutuya kimsenin yaklaşmamasını sağlar.</li>
                    <li><strong>border</strong> - Turuncu kutunun kalınlığının ne kadar olacağını, çerçeve stilini ve çerçeve rengini belirtmek için kullanılır.</li> 
                    <li><strong>padding</strong> - Turuncu kutu ile turuncu kutu içerisinde ki içeriğin arasında ki mesafeyi belirlemek için kullanılır.</li>
                    <li><strong>İçerik</strong> - Bizim tarafımızdan belirtilen metinler, görseller vs. yer alır.</li>
                </ul>
                <p> <strong>" width "</strong> ve <strong>" height "</strong> 'ın tüm tarayıcılarda doğru çalışması için <strong>" Kutu Modeli "</strong> nin nasıl çalıştığının bilinmesi gerekmektedir.</p>
                <h2>CSS Genişlik ve Yükseklik Özelliği - Width &amp; Height of an Element</h2>
                <p><strong>" width "</strong> ve <strong>" height "</strong> ile sadece içeriğin boyutlarını belirlersiniz. Toplam boyut için <strong>padding</strong>, <strong>border</strong> ve <strong>margin</strong>'i de hesaba katmanız gerekir.</p>
                <p><strong>Toplam boyutu 350px (piksel) olan bir örneği görelim...</strong> </p>                    
                <pre><code class="language-css">
width: 300px; 
padding: 10px;
border: 5px solid gray;
margin: 10px;
                </code></pre>
                <p><strong>Genişliği Hesaplayalım...</strong></p>
                <p>300px (width 'den (Genişlikten) geliyor.)<br /> + 20px (Sağdan ve Soldan verilen padding'lerden (İç Kenar Boşluğundan) geliyor.)<br /> + 10px (Sağdan ve Soldan verilen border 'dan (Kenar Kalınlığından) geliyor.)<br /> + 20px (Sağdan ve Soldan verilen margin'lerden (Dış Kenar Boşluğundan) geliyor.)<br /> = 300px</p>
                <p>Yalnızca 250px alanımız olduğunu düşünelim ve 250px toplam genişliğe sahip bir kutu / eleman yapalım.</p>
                <pre><code class="language-css">
width: 220px; 
padding: 10px;
border: 5px solid gray;
margin: 0px;
                </code></pre>
                <p>Bir elemanın toplam genişliği hep böyle hesaplanmalıdır;</p>
                <p><strong>Toplam eleman genişliği</strong> = width + sağ padding + sol padding + sağ border + sol border + sağ margin + sol margin . </p>
                <p>Bir elemanın toplam yüksekliği hep böyle hesaplanmalıdır;</p>
                <p><strong>Toplam eleman yüksekliği</strong> = height + üst padding + alt padding + üst border + alt border + üst margin + alt margin . </p>
                <!-- #CSS Genişlik ve Yükseklik Özelliği -->
                <h2>Tarayıcıların Uyumluluğunu Düzenlemek</h2>
                <p>Internet Explorer, toplam genişliği doğru olarak hesaplayamamaktadır. Sorunu çözmek için <strong>DOCTYPE</strong> eklemeniz yeterlidir. <strong>DOCTYPE</strong> hakkında bilgi almak için 9. ve 10 maddelere <a href="/xhtml/index.php?page=farklar">buradan</a> bakabilirsiniz.</p>
                <!-- #Tarayıcıların Uyumluluğunu Düzenlemek -->
                <a href="/css/index.php?page=sinir_kenar" class="nextButton">Devam Et</a>
                <!-- #nextButton -->