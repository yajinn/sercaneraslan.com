                <h1>CSS Öznitelik Seçicileri - Attribute Selectors</h1>
                <p> <strong>HTML/XHTML</strong> etiketlerimizin/elemanlarımızın içine yazdığımız özniteliklere de (title, type vs) <strong>CSS</strong> ile stil verebiliriz. Özniteliğe verdiğimiz stil, etiketi/elemanı da etkileyecektir. Öznitelikleri <strong>CSS</strong> dosyasında <strong>" [ "</strong> ve <strong>" ] "</strong> işaretleri arasında yazacağız.</p>
                <pre><code class="language-css">
[title] {
    color: orange; 
}
                </code></pre>
                <p>Yukarıda ki kod <strong>CSS</strong> dosyamızda olduğunda içinde <strong>title</strong> özniteliği bulunan bütün etiketlerin metin rengi turuncu olacaktır.</p>
                <h2>Öznitelik ve Değer Seçicisi</h2>
                <p> Bu özellikte ise özniteliği değeri ile birlikte veriyoruz. Amacımız sadece istediğimiz değere sahip olan özniteliğe stil vermek.</p>
                <pre><code class="language-css">
[title=SercanEraslan] {
    background-color: yellow;
}
                </code></pre>
                <p>Yukarıda ki kod sadece title değeri "SercanEraslan" olan etiketlerin arkaplan rengini sarı yapacak.</p>
                <!-- #Öznitelik ve Değer Seçicisi -->
                <h2>Öznitelik ve Değer Seçicisi - Çoklu Kullanım</h2>
                <p>Bu özellikte birden fazla öznitelik ve değer kullanımını göreceğiz. Bunun için <strong>" ~ "</strong> işaretini kullanacağız.</p>
                <pre><code class="language-css">
[title~=SercanEraslan] {
    color: green;
}
                </code></pre>
                <p>Yukarıda ki kod, title 'ında "SercanEraslan" geçen bütün etiketlerin metin rengini yeşil yapacak. </p>
                <!-- #Öznitelik ve Değer Seçicisi - Çoklu Kullanım -->
                <h2>Form Özniteliklerine Stil Verme</h2>
                <pre><code class="language-css">
input[type="button"] {
    height: 50px;
}
                </code></pre>
                <p>Yukarıda ki kod, type özniteliği "button" olan bütün input 'ların yüksekliğini 50 piksel yapacaktır.</p>
                <!-- #Form Özniteliklerine Stil Verme -->   
                <div class="cup"> 
                    <h1>Tebrikler!!!</h1>
                    <p> <strong>Tebrikler,</strong> artık <strong>İleri Seviye CSS</strong> biliyorsunuz. Şuan ki <strong>XHTML</strong> ve <strong>CSS</strong> bilginiz ile bu sayfanın aynısını tasarlayabilirsiniz. Öğrendiklerinizi deneyip kendinizi geliştirebilirsiniz, yeni birşeyler öğrenirseniz de bunları bir blog sayfasında paylaşmanız hepimizin yararına olur. Yazım hataları varsa iletişim sayfasından bana iletebilirsiniz.</p>
                </div>