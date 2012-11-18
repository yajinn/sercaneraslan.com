                <h1>HTML5 Web Workers - Web İşçileri</h1>
                <p>Web işçisi, sayfanın performansını etkilemeden arka planda çalışır. Sayfada ki script tamamlanmadığı sürece yanıt vermez. Gelişmiş tarayıcıların hepsi bu özelliği destekler (Internet Explorer hariç).</p>
                <p>Örneği görmek için <a href="http://www.w3schools.com/html5/tryit.asp?filename=tryhtml5_webworker">tıklayınız</a></p>
                
                <pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;

&lt;p&gt;Sayaç : &lt;output id="result"&gt;&lt;/output&gt;&lt;/p&gt;
&lt;button onclick="startWorker()"&gt;Worker'ı Başlat&lt;/button&gt; 
&lt;button onclick="stopWorker()"&gt;Worker'ı Durdur&lt;/button&gt;

&lt;script&gt;
var w;

function startWorker(){
    if(typeof(Worker)!=="undefined"){
        if(typeof(w)=="undefined"){
            w=new Worker("demoWorkers.js");
        }
        w.onmessage = function (event) {
            document.getElementById("result").innerHTML=event.data;
        };
    }else{
        document.getElementById("result").innerHTML="Tarayıcınız Web Workers'ı desteklemiyor!";
    }
}

function stopWorker(){ 
    w.terminate();
}
&lt;/script&gt;

&lt;/body&gt;
&lt;/html&gt;                
                </code></pre>       
                <h3>Web Worker'ı, Tarayıcının Destekleyip Desteklemediğini Kontrol Etmek</h3>
                <pre><code class="language-javascript">
if(typeof(Worker)!=="undefined"){
  // Tarayıcı, Web worker'ı destekliyor.
  // Kodlar...
}else{
  // Tarayıcı Web Worker'ı desteklemiyor.
}              
                </code></pre>
                <h3>Web Worker Dosyası Oluşturma</h3>
                <p>Örnekte ki, Adı "demoWorkers.js" olan harici bir JavaScript dosyasının kodlarını inceleyelim.</p>
                <pre><code class="language-javascript">
var i=0;

function timedCount(){
    i=i+1;
    postMessage(i);
    setTimeout("timedCount()",500);
}

timedCount(); 
                </pre></code>
                <p>Kodun önemli bir parçası yukarda ki postMessage() metodudur. Kullanıldığında parametreyi html sayfasına döner.</p>
                <p>Not: Normalde web işçileri, basit programlar için kullanılmaz çünkü daha fazla işlemci kullanan yoğun görevler içindir.</p>
                <h2>Web Worker Objesi Oluşturma</h2>
                <p>Oluşturduğumuz Web Worker dosyasını çağırmamız gerekiyor.</p>
                <p>Worker zaten varsa aşağıdaki satırları kontrol eder, eğer yoksa yeni bir web işçi nesnesi oluşturur ve "demo_workers.js" dosyasında ki kodlar çalışır.</p>
                <pre><code class="language-javascript">
if(typeof(w)=="undefined"){
  w=new Worker("demo_workers.js");
}
                </code></pre>
                <p>Web işçisine bir "onMessage" olay dinleyicisi ekleyerek ileti gönderip alabilirsiniz.</p>
                <pre><code class="language-javascript">
w.onmessage=function(event){
    document.getElementById("result").innerHTML=event.data;
};
                </code></pre>
                <p>Web Worker mesaj gönderdiğinde kod olay dinleyicisi ile birlikte çalışır. Gelen veriler event.data'da saklanır.</p>
                <h3>Web Worker'ı Sonlandırmak</h3>
                <p>Web Worker objesi oluşturulduktan sonra durduruluncaya kadar mesajları dinlemeye devam edecektir (Harici olarak eklenen JavaScript dosyası çalışmayı tamamlasa bile).</p>
                <p>Web işçisini sonlandırmak için terminate() metodunu kullanabilirsiniz.</p>
                <pre><code class="language-javascript">
w.terminate(); 
                </code></pre>   
                <h2>Web Workers and the DOM</h2>
                <p>Web işçileri harici dosyalarda olduklarından aşağıda ki JavaScript nesnelerine erişemezler.</p>
                <ul>
                    <li>Window objesi</li>
                    <li>Document objesi</li>
                    <li>Parent objesi</li>
                </ul>
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=SSE" class="nextButton">Devam Et</a>
                <!-- #nextButton -->