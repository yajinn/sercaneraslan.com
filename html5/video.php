                <h1>HTML5 Video</h1>
                <p>Şimdiye kadar sayfa da video göstermek, HTML Standart'ı olmamıştı. Bugün, çoğu eklenti aracılığıyla video gösterilmektedir (Flash gibi). Ancak bazen farklı tarayıcılarda farklı eklentiler kullanmak gerekebiliyor. HTML5, web sayfasına video eklemek için standart bir yol ile yeni bir öğe tanımlar.</p>
                <h2>HTML5 Video - Nasıl Çalışır?</h2>
                <p>&lt;video&gt; tag'i açılır, içine &lt;source&gt; tag'i ile videonun kaynağı ve tipi yazılır, sonra video tag'i kapanır. Ayrıca HTML5 Video tag'ini desteklemeyen tarayıcılar için video tag'inin içine uyarı eklemeniz gerekmektedir.</p>
                <pre><code class="language-javascript">
&lt;video width="320" height="240" controls="controls"&gt;
    &lt;source src="movie.mp4" type="video/mp4" /&gt;
    &lt;source src="movie.ogg" type="video/ogg" /&gt;
    Tarayıcınız video tag'ını desteklemiyor.
&lt;/video&gt;
                </code></pre>               
                <p>controls özniteliği "Play", "Pause" ve "Volume" gibi denetimler ekler.</p>   
                <p>Ayrıca her zaman width ve height niteliklerini dahil etmek iyi bir fikirdir. Yüksekliği ve genişliği ayarlarsanız sayfa yüklendiğinde video için gerekli alan ayrılmış olacaktır.</p>            
                <table>
                    <tbody>
                        <tr>
                          <th>Tarayıcı</th>
                          <th>MP4</th>
                          <th>WebM</th>
                          <th>Ogg</th>
                        </tr>
                        <tr>
                          <td>Internet Explorer 9</td>
                          <td>Evet</td>
                          <td>Hayır</td>
                          <td>Hayır</td>
                        </tr>
                        <tr>
                          <td>Firefox 4.0</td>
                          <td>Hayır</td>
                          <td>Evet</td>
                          <td>Evet</td>
                        </tr>
                        <tr>
                          <td>Google Chrome 6</td>
                          <td>Evet</td>
                          <td>Evet</td>
                          <td>Evet</td>
                        </tr>
                        <tr>
                          <td>Apple Safari 5</td>
                          <td>Evet</td>
                          <td>Hayır</td>
                          <td>Hayır</td>
                        </tr>
                        <tr>
                          <td>Opera 10.6</td>
                          <td>Hayır</td>
                          <td>Evet</td>
                          <td>Evet</td>
                        </tr>
                    </tbody>
                </table>        
                <ul>
                    <li>MP4 = H264 video codec ve AAC audio codec</li>
                    <li>WebM = VP8 video codec ve Vorbis audio codec</li>
                    <li>Ogg = Theora video codec ve Vorbis audio codec</li>
                </ul>
                <h2>HTML5 Video + DOM</h2>
                <p>HTML5 video elemanının methods(metodları), properties(özellikleri) ve events(olayları) vardır.</p>
                <p>Örnek metod olarak playing(oynatılıyor), pausing(durduruldu) ve loading(yükleniyor) vardır. Örnek özellik olarak duration, volume ve seeking vardır. DOM eventları size bildirim yapar, örneğin video "oynatıldı", "durduruldu" ya da "bitti" gibi.</p>
                <p>Aşağıdaki örnek, basit bir şekilde öğeleri okuma, özellikleri belirleme ve metodları nasıl çağırdığımız gösterilmektedir.</p>    
                
                <div> 
                  <button onclick="playPause()">Oynat/Durdur</button> 
                  <button onclick="makeBig()">Büyüt</button>
                  <button onclick="makeSmall()">Küçült</button>
                  <button onclick="makeNormal()">Normal</button>
                  <br />
                  <video id="video1" width="420">
                    <source src="http://www.w3schools.com/html5/mov_bbb.mp4" type="video/mp4" />
                    <source src="http://www.w3schools.com/html5/mov_bbb.ogg" type="video/ogg" />
                    Tarayıcınız HTML5 video özelliğini desteklemiyor.
                  </video>
                </div> 
                
                <script type="text/javascript"> 
                var myVideo=document.getElementById("video1"); 
                
                function playPause()
                { 
                if (myVideo.paused) 
                  myVideo.play(); 
                else 
                  myVideo.pause(); 
                } 
                
                function makeBig()
                { 
                myVideo.width=560; 
                } 
                
                function makeSmall()
                { 
                myVideo.width=320; 
                } 
                
                function makeNormal()
                { 
                myVideo.width=420; 
                } 
                </script> 
                <pre><code class="language-javascript">
&lt;div&gt;
    &lt;button onclick="playPause()"&gt;Oynat/Durdur&lt;/button&gt;
    &lt;button onclick="makeBig()"&gt;Büyüt&lt;/button&gt;
    &lt;button onclick="makeSmall()"&gt;Küçült&lt;/button&gt;
    &lt;button onclick="makeNormal()"&gt;Normal&lt;/button&gt;
    &lt;br /&gt;
    &lt;video id="video1" width="420"&gt;
        &lt;source src="video.mp4" type="video/mp4" /&gt;
        &lt;source src="video.ogg" type="video/ogg" /&gt;
        Tarayıcınız HTML5 video özelliğini desteklemiyor.
    &lt;/video&gt;
&lt;/div&gt;

&lt;script type="text/javascript"&gt; 
    var myVideo=document.getElementById("video1"); 
    
    function playPause(){ 
        if (myVideo.paused) 
          myVideo.play(); 
        else 
          myVideo.pause(); 
    } 
    
    function makeBig(){ 
        myVideo.width=560; 
    } 
    
    function makeSmall(){ 
        myVideo.width=320; 
    } 
    
    function makeNormal(){ 
        myVideo.width=420; 
    } 
&lt;/script&gt; 
                </code></pre>                   
                
                <h2>HTML5 Video - Methods(Metodlar), Properties(Özellikler) ve Events(Olaylar)</h2> 
                <p>Aşağıdaki tabloda tüm tarayıcılar tarafından desteklenen metodlar, özellikler ve olaylar listelenmiştir.</p>
                <table>
                    <tbody>
                        <tr>
                          <th>Metodlar</th>
                          <th>Özellikler</th>
                          <th>Olaylar</th>
                        </tr>
                        <tr>
                          <td>play()</td>
                          <td>currentSrc</td>
                          <td>play</td>
                        </tr>
                        <tr>
                          <td>pause()</td>
                          <td>currentTime</td>
                          <td>pause</td>
                        </tr>
                        <tr>
                          <td>load()</td>
                          <td>videoWidth</td>
                          <td>progress</td>
                        </tr>
                        <tr>
                          <td>canPlayType</td>
                          <td>videoHeight</td>
                          <td>error</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>duration</td>
                          <td>timeupdate</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>ended</td>
                          <td>ended</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>error</td>
                          <td>abort</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>paused</td>
                          <td>empty</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>muted</td>
                          <td>emptied</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>seeking</td>
                          <td>waiting</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>volume</td>
                          <td>loadedmetadata</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>height</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>width</td>
                          <td></td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=audio" class="nextButton">Devam Et</a>
                <!-- #nextButton -->