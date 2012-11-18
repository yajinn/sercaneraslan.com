                <h1>CSS Konumlandırma - Positioning</h1>
                <p>CSS konumlandırma özelliği öğelerin konumlandırmasını sağlar. Bir öğenin arkasına bir öğeyi yerleştirebilirsiniz ve bir öğenin içeriğinin fazla büyük olduğu durumlarda ne yapması gerektiğini belirtebilirsiniz.</p>
                <p>Üst, alt, sol, ve sağ yönlerinden elemanlara konum verebiliriz. Eğer konumlandırma özelliği kodda ilk olarak yazılmazsa konumlandırma özelliği çalışmayacaktır. Ayrıca farklı konumlandırma yöntemine bağlı olarakta çalışabilirler. </p>
                <p>Dört farklı konumlandırma yöntemi vardır.</p>
                <h2>CSS Statik Konumlandırma - Static Positioning</h2>
                <p><strong>HTML/XHTML</strong> öğeleri varsayılan olarak statik konumlandırılmıştır. Statik olarak ayarlanmış bir eleman her zaman sayfanın normal akışına göre konumlandırılır, yani elemanlar sayfaya sabittir, kaydırma çubuğu ile birlikte aşağı yukarı hareket ederler. </p>
                <p>Statik konumlandırma özelliği top, right, bottom ve left özelliklerinden etkilenmez.</p>
                <h2>CSS Tutturulmuş Konumlandırma - Fixed Positioning</h2>
                <p>Tutturulmuş konumlandırma özelliği elemanı sayfada sabitler ve kaydırma çubuğu aşağı yukarı yapıldığında eleman sabit kalır.</p>
                <pre><code class="language-css">
.tutturulmusKonum {
    position: fixed;
    top: 40px;
    right: 15px;
}
                </code></pre>
                <p><strong>Not: </strong> <strong>HTML/XHTML</strong> kodumuzda " !DOCTYPE " varsa Internet Explorer bu özelliği destekler.</p>
                <p>Tutturulmuş konumlu öğeler normal akıştan çıkarılır. Elemanlar, tutturulmuş konumlu öğenin var olmadığı gibi davranır.</p>
                <p>Tutturulmuş konumlu öğeler ile diğer öğeler çakışabilir, o yüzden pozisyonu iyi belirmeniz önerilir. </p>
                <!-- #CSS Statik Konumlandırma -->
                <h2>CSS Göreceli Konumlandırma - Relative Positioning</h2>
                <p>Göreceli konumlandırma özelliği, normal konumlamalara göre göreceli olarak konumlandırma sağlar. Örneğin, normal konumlandırmayı sıfır olarak düşünürsek ve bir class 'a <strong>position: relative</strong> ve <strong>left: -25px</strong> verirsek class 'ımızın bağlı olduğu eleman normal konumlandırılmış elemanlara göre 25 piksel daha solda konumlanacaktır.</p>
                <pre><code class="language-css">
.goreceliKonum {
    position: relative;
    left: -25px;
}
                </code></pre>
                <p>Relative ile konumlanmış elemanlar taşınabilir ve diğer elemanları etkileyebilir.</p>
                <!-- #CSS Göreli Konumlandırma -->
                <h2>CSS Mutlak Konumlandırma - Absolute Positioning</h2>
                <p>Mutlak konumlandırma özelliği, bizim verdiğimiz yön özelliklerini (top,left,right vs.) tam anlamıyla uygular. Relative konumlandırmada ise verilen yön özelliklerini çevresinde ki elemanlara göre ayarlar.</p>
                <pre><code class="language-css">
.mutlakKonum {
    position: absolute;
    left: 120px;
    top: 180px;
}
                </code></pre>
                <!-- #CSS Mutlak Konumlandırma -->
                <h2>CSS z-index ( Örtüşen Elemanlar ) - Overlapping Elements</h2>
                <p> <strong>z-index</strong> özelliği ile üst üste gelen iki elemandan hengisinin üstte ya da hangisinin altta kalacağını belirleyebiliriz. Bu özellikte eksi kullanımı vardır.  Örneğin, bir elemanın altta kalmasını istiyorsak <strong>z-index: -1;</strong> kodunu yazabiliriz. Diğer elemanın üstte kalmasını istiyorsakta <strong>z-index: 1;</strong> kodunu yazabiliriz. </p>
                <pre><code class="language-css">
p {
    position: absolute;
    right: 10px;
    top: 5px;
    z-index: 1;
}
                </code></pre>
                <p>Unutmamak gerekir ki <strong>z-index</strong> değeri en yüksek olan eleman en üstte yer alır, <strong>z-index</strong> değeri en küçük olan eleman ise en altta yer alır.</p>
                <!-- #CSS z-index -->
                <h2>CSS Overflow Özelliği - Overflow Property</h2>
                <p>Bir bölümümüz (div 'imiz) var, bu bölüm içinde ki içerik bu bölüme sığmıyor ve içerik dışarı taşıyor. Bu durumda div'in kenarında bir kaydırma çubuğu çıkartabiliriz ya da fazla olan içeriğin görünmesini engelleyebiliriz. <strong>Overflow</strong> değerlerini görelim.</p> 
                <ul>
                    <li><strong>visible : </strong> Bölüm içinde ki içerik bölüm içine sığmazsa dışarı taşar. Varsayılan. </li>
                    <li><strong>hidden : </strong> Sığmayan içeriği yok sayar.</li>
                    <li><strong>scroll : </strong> Sığmayan içerik için kaydırma çubuğu çıkarır.</li>
                    <li><strong>auto : </strong> İçerik sığmamaya başladığında otomatik olarak kaydırma çubuğu çıkarır.</li>
                </ul>
                <pre><code class="language-css">
div {
    width: 200px;
    height: 200px;
    overflow: scroll;
}
                </code></pre>
                <!-- #CSS Overflow Özelliği -->
                <h2>CSS Clip Özelliği - Clip Property</h2>
                <p> Görselin, bölümden (div'den) daha büyük olması durumunda görseli <strong>clip</strong> özelliği ile bölüm içine sığacak şekilde kırpabiliriz. </p>
                <pre><code class="language-css">
.gorselKirpma {
    position: absolute;
    clip: rect(5px,10px,20px,5px);
}
                </code></pre>
                <p> <strong>clip: rect</strong> 'ten sonra gelen parantez içinde ki sıralama şu şekildedir:  <strong>( top, right, bottom, left ). </strong> Yani <strong>top: 5px; right: 10px; bottom: 20px; left: 5px;</strong> 'tir. </p>                       
                <p> <strong>overflow: visible</strong> olduğunda bu özellik çalışmaz. </p>
                <!-- #CSS Clip Özelliği -->
                <h2>CSS Cursor Özelliği - Cursor Property</h2>
                <p>Bir eleman üzerine gelindiğinde imlecin değişmesini istiyorsak <strong>cursor</strong> özelliğini kullanacağız. Aşağıdaki elemanların üzerine fare ile gelerek imlecin nasıl değiştiğini görebilirsiniz.</p>
                <ul>
                    <li style="cursor: crosshair;"><strong>crosshair : </strong> İmlecin artı işareti şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: auto;"><strong>auto : </strong> İmlecin metinde dikey çizgi, boş alanda normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: default;"><strong>default : </strong> İmlecin hem metinde hem de boş alanda normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: pointer;"><strong>pointer : </strong> İmlecin linkte olduğu gibi el şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: move;"><strong>move : </strong> İmlecin taşıma işareti şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: ne-resize;"><strong>ne-resize : </strong> İmlecin sağa yatık normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: nw-resize;"><strong>nw-resize : </strong> İmlecin sola yatık normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: se-resize;"><strong>se-resize : </strong> İmlecin yukardan aşağı doğru ve sağa yatık normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: sw-resize;"><strong>sw-resize : </strong> İmlecin yukardan aşağı doğru ve sola yatık normal ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: n-resize;"><strong>n-resize : </strong> İmlecin aşağıdan yukarıya doğru ince ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: s-resize;"><strong>s-resize : </strong> İmlecin yukardan aşağı doğru ince ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: w-resize;"><strong>w-resize : </strong> İmlecin sola doğru ince ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: e-resize;"><strong>e-resize : </strong> İmlecin sağa doğru ince ok şeklinde gözükmesini sağlar.</li>
                    <li style="cursor: text;"><strong>text : </strong> İmlecin hem metinde hem de boş alanda metinde olduğu gibi gözükmesini sağlar.</li>
                    <li style="cursor: wait;"><strong>wait : </strong> İmlecin meşgul animasyonuna dönüşmesini sağlar.</li>
                    <li style="cursor: help;"><strong>help : </strong> İmlecin soru işaretine dönüşmesini sağlar</li>
                    <li><strong>url : </strong> Yeni imleç eklememizi sağlar. cursor: url(yeni.cur) olarak kullanımı vardır. Sadece .cur dosyalarını destekler. </li>
                </ul>
                <!-- #CSS Cursor Özelliği -->
                <a href="/css/index.php?page=kaydirma" class="nextButton">Devam Et</a>
                <!-- #nextButton -->