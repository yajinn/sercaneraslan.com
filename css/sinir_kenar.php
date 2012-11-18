                <h1>CSS Sınır / Kenar - Border</h1>
                <div class="exampleBorder">
                    <h3>CSS Border Özellikleri</h3>
                    <p>CSS sınır özellikleri ile sınır stilini, sınır rengini ve sınır kalınlığını belirleyebiliriz. Örneğin, şuan okuduğunuz yazının çevresinde ki turuncu <strong>div</strong> 'in stilinde border renk kodu #EE7621 olarak belirtildi,  border kalınlığı 3 piksel olarak belirtildi ve border stili ise <strong>" double "</strong> olarak belirtildi. </p>
                </div>
                <p>Borderlara stil vermek için <strong>" border-style "</strong> özelliğini kullanacağız. </p>                  
                <h2>Sınır / Kenar Stil Değerleri - Border Style Values</h2>
                <p> Herhangi bir border sitili kullanmak istemediğimizde <strong>none</strong> değerini kullanabiliriz, varsayılan değer budur.</p>
                <div class="exampleBorder1"><span><strong>dotted</strong></span></div>
                <div class="exampleBorder8"><span><strong>dashed</strong></span></div>
                <div class="exampleBorder2"><span><strong>solid</strong></span></div>
                <div class="exampleBorder3"><span><strong>double</strong></span></div>
                <div class="exampleBorder4"><span><strong>groove</strong></span></div>
                <div class="exampleBorder5"><span><strong>ridge</strong></span></div>
                <div class="exampleBorder6"><span><strong>inset</strong></span></div>
                <div class="exampleBorder7"><span><strong>outset</strong></span></div>
                <p>Örnek kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border-style: solid;
    border-style: 1px;
    border-style: gray;
}
                </code></pre>
                <p>Örnek kısa kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border: 1px gray solid;
}
                </code></pre>
                <!-- #Sınır / Kenar Stil Değerleri -->
                <h2>Sınır / Kenar Genişliği - Border Width</h2>
                <p><strong>border-width</strong> özelliği, sınırın / kenarın genişliğini ayarlamak için kullanılır. </p>
                <p>Genişlik, piksel olarak ayarlanır ya da öntanımlı 3 değerler kullanılabilir. <strong>thin</strong> (ince), <strong>medium</strong> (orta) veya <strong>thick</strong> (kalın). </p>
                <div class="pages_content_note_div"> 
                    <p class="pages_content_position"> <strong>Not:</strong> border-width, özelliği tek başına kullanıldığında herhangi bir değişiklik yapmaz. Beraberinde stil (border-style) özelliği de kullanılmalıdır. </p>
                </div>
                <!--- #pages_content_note_div -->
                <p>Örnek kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border-width: 15px;
    border-style: solid;
}
                </code></pre>   
                <pre><code class="language-css">
div {
   border-width: medium;
   border-style: solid;
}
                </code></pre>   
                <p>Örnek kısa kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border: 15px gray solid;
}
                </code></pre>
                <!-- #Sınır / Kenar Genişliği -->
                <h2>Sınır / Kenar Rengi - Border Color</h2>
                <p><strong>border-color</strong> özelliği, sınırın / kenarın rengini ayarlamak için kullanılır. Renk adı "blue", RGB değeri "rgb(255,0,0)" ve Hex değeri "#ff0000" kullanılabilir. Ayrıca şeffaf (transparent) kullanımda söz konusudur. (border:1px solid transparent;) </p>
                <div class="pages_content_note_div"> 
                    <p class="pages_content_position"> <strong>Not:</strong> border-color, özelliği tek başına kullanıldığında herhangi bir değişiklik yapmaz. Beraberinde stil (border-style) özelliği de kullanılmalıdır.</p>
                </div>
                <!--- #pages_content_note_div -->
                <p>Örnek kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border-style: solid;
    border-color: blue;
}
                </code></pre>
                <p>Örnek kısa kullanımı görelim.</p>
                <pre><code class="language-css">
div {
    border: 1px blue solid;
}
                </code></pre>
                <!-- #Sınır / Kenar Rengi -->
                <h2>CSS Çoklu Sınır / Kenar Stili Kullanımı - Border Individual Sides</h2>
                <p>Bir kutunun her açısında farklı stil kullanmak mümkündür. (top=üst, right=sağ, bottom=alt, left=sol)</p>
                <pre><code class="language-css">
div {
    border-top-style: dotted;
    border-right-style: solid;
    border-bottom-style: dotted;
    border-left-style: solid;
}
                </code></pre>
                <p>Yukarıda ki örnek aşağıdaki şekildede yazılabilir. (İlk stil üst ve alt için ikinci stil ise sağ ve sol içindir.)</p>
                <pre><code class="language-css">
div {
    border-style: dotted solid;
}
                </code></pre>
                <p><strong>border-style</strong> özelliği ile bir satır kodda 4 farklı şekilde stil değeri verilebilmektedir.</p>
                <ul>
                    <li><strong>border-style: dotted solid double dashed;</strong> (üst stil dotted, sağ stil solid, alt stil double, sol stil dashed olur.)</li>
                    <li><strong>border-style: dotted solid double;</strong> (üst stil dotted, sağ ve sol stil solid, alt stil double olur.)</li>
                    <li><strong>border-style: dotted solid;</strong> (üst ve alt stil dotted, sağ ve sol stil solid olur.)</li>
                    <li><strong>border-style: dotted;</strong> (Tüm köşelerin stili dotted olur.)</li>
                </ul>
                <p><strong>border-style</strong> özelliği yukarıda ki örnekte ki gibi kullanılır ancak <strong>border-color</strong> ve <strong>border-width</strong> özellikleri ile birlikte kullanılırsa bu özellik çalışır. </p>        
                <!-- #CSS Çoklu Sınır -->
                <a href="/css/index.php?page=anahat" class="nextButton">Devam Et</a>
                <!-- #nextButton -->