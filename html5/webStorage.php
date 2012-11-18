                <h1>HTML5 Web Storage - Web Depolama</h1>
                <p>HTML5 ile web sayfaları, kullanıcının tarayıcısında yerel olarak veriyi depolayabilir. Daha önce bu cookie 'lerle yapılırdı. Web depolaması cookie 'lere göre daha güvenli ve daha hızlıdır. Veri, her server request'inde sayfaya dahil edilmez. Ne zaman veri çağırılırsa o zaman kullanılır. Büyük miktarlarda ki verileri depolamak mümkündür hemde web sitenin performansını etkilemeden. Veri, key/value (anahtar/değer) çiftlerinde depolanır.</p>
                <p>Web Storage özelliğini gelişmiş tarayıcıların hepsi destekler.</p>
                <h2>localStorage ve sessionStorage</h2>
                <p>Client'da (Browser'da) veriyi depolamak için iki yeni nesne vardır:</p>
                <ul>
                    <li>LocalStorage — Sona erme tarihi olmadan veri depolar.</li>
                    <li>SessionStorage — Yanlızca bir oturum için veri depolar.</li>
                </ul>
                <p>Tarayıcıların Web Storage özelliğini destekleyip desteklemediğini öğrenmek için aşağıdaki kodu kullanacağız;</p>
                <pre><code class="language-javascript">
if(typeof(Storage)!=="undefined"){
  // localStorage ve sessionStorage özellikleri destekleniyor.
  // Kodlarımızı yazıyoruz...
}else{
  // Tarayıcı Web Storage özelliğini desteklemiyor.
}
                </code></pre>                   
                <h2>The localStorage Object - localStorage Nesnesi</h2>
                <p>LocalStorage nesnesi, Sona erme tarihi olmadan veriyi depolar. Veri, tarayıcı kapatıldığı zaman silinmeyecek ve bir sonraki gün erişilebilir olacak hatta haftalar, aylar ve yıllar sonra da.</p>
                <div id="result"></div>
                <script>
                if(typeof(Storage)!=="undefined") {
                    localStorage.lastname="Eraslan";
                    document.getElementById("result").innerHTML="Soyisim: " + localStorage.lastname;
                  }else{
                    document.getElementById("result").innerHTML="Tarayıcınız, Web Storage özelliğini desteklemiyor.";
                  }
                </script>
                <pre><code class="language-javascript">
&lt;div id="result"&gt;&lt;/div&gt;
&lt;script&gt;
if(typeof(Storage)!=="undefined") {
    localStorage.lastname="Eraslan";
    document.getElementById("result").innerHTML="Soyisim: " + localStorage.lastname;
  }else{
    document.getElementById("result").innerHTML="Tarayıcınız, 
    Web Storage özelliğini desteklemiyor.";
  }
&lt;/script&gt;
        </code></pre>   
                <p>Örnek açıklaması:</p>
                <p>key/value çiftleri (key="lastname" ve value="Eraslan") ile localStorage oluşturduk. Sonra "result" id'li div'in içine depolanan veriyi yazdırdık. Eğer tarayıcı Web Storage özelliğini desteklemiyorsa da uyarı verdik.</p>
                <p>key/value çiftleri her zaman string olarak depolanır. İhtiyaç duyulduğunda başka bir formata döndürülebilir.</p>
                <p>Aşağıdaki örnek, bir kullanıcının butona kaç kez tıkladığını sayar. Bu kodda, string olan değer tıklanmayı sayabilmek için number formatına çevrilmiştir.</p>
                <pre><code class="language-javascript">
&lt;script&gt;
function clickCounter(){
    if(typeof(Storage)!=="undefined"){
        if (localStorage.clickcount){
          localStorage.clickcount=Number(localStorage.clickcount)+1;
        }else{
          localStorage.clickcount=1;
        }
        document.getElementById("result").innerHTML="Butonu " + localStorage.clickcount + " kez tıkladınız.";
    }else{
        document.getElementById("result").innerHTML="Tarayıcınız, Web Storage özelliğini desteklemiyor.";
    }
}
&lt;/script&gt;

&lt;p&gt;&lt;button onclick="clickCounter()" type="button"&gt;Tıkla&lt;/button&gt;&lt;/p&gt;
&lt;div id="result"&gt;&lt;/div&gt;
&lt;p&gt;Butona tıklayarak sayacın arttığını görebilirsiniz.&lt;/p&gt;
&lt;p&gt;Tarayıcınızı ya da tab'i kapatın ve tekrar deneyin. Sayacın sıfırlanmadığını göreceksiniz.&lt;/p&gt;
                </code></pre>               
                <h2>The sessionStorage Object - sessionStorage Nesnesi</h2>
                <p>sessionStorage nesnesinin localStorage nesnesinden farkı şudur:</p>
                <ul>
                    <li>sessionStorage 'de tarayıcı ya da tab kapatıldığında değerler silinir.</li>
                    <li>localStorage 'de tarayıcı ya da tab kapatıldığında değerler silinmez.</li>
                </ul>
                <pre><code class="language-javascript">
&lt;script&gt;
function clickCounter(){
    if(typeof(Storage)!=="undefined"){
        if (sessionStorage.clickcount){
            sessionStorage.clickcount=Number(sessionStorage.clickcount)+1;
        }else{
            sessionStorage.clickcount=1;
        }
        document.getElementById("result").innerHTML="Bu oturumda bu butonu " + sessionStorage.clickcount + " kez tıkladınız.";
    }else{
        document.getElementById("result").innerHTML="Tarayıcınız, Web Storage özelliğini desteklemiyor.";
    }
}
&lt;/script&gt;

&lt;p&gt;&lt;button onclick="clickCounter()" type="button"&gt;Tıkla&lt;/button&gt;&lt;/p&gt;
&lt;div id="result"&gt;&lt;/div&gt;
&lt;p&gt;Butona tıklayarak sayacın arttığını görebilirsiniz.&lt;/p&gt;
&lt;p&gt;Tarayıcınızı ya da tab'i kapatın ve tekrar deneyin. Sayacın sıfırlandığını göreceksiniz.&lt;/p&gt;
                </code></pre>                   
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=applicationCache" class="nextButton">Devam Et</a>
        <!-- #nextButton -->