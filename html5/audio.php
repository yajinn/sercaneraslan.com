                <h1>HTML5 Audio - Ses</h1>
                <p>HTML5, ses dosyalarını çalmak için bir standart sağladı.</p>
                <p>Bugün çoğu eklenti aracılığıyla ses dosyaları oynatılmaktadır(Flash gibi). Ancak bazen farklı tarayıcılarda farklı eklentiler kullanmak gerekebiliyor. HTML5, web sayfasında ses dosyalarını çalmak için standart bir yol ile yeni bir öğe tanımlar.</p>
                <h2>HTML5 Audio - Nasıl Çalışır?</h2>
                <p>&lt;audio&gt; tag'i açılır, içine &lt;source&gt; tag'i ile Audio'nun kaynağı ve tipi yazılır, sonra Audio tag'i kapanır. Ayrıca HTML5 Audio tag'ini desteklemeyen tarayıcılar için audio tag'inin içine uyarı eklemeniz gerekmektedir.</p>
                <pre><code class="language-javascript">
&lt;audio controls="controls"&gt;
    &lt;source src="song.ogg" type="audio/ogg" /&gt;
    &lt;source src="song.mp3" type="audio/mpeg" /&gt;
    Tarayıcınız audio tag'ını desteklemiyor.
&lt;/audio&gt;
                </code></pre>                   
                <p>controls özniteliği "Play", "Pause" ve "Volume" gibi denetimler ekler.</p>
                <audio controls="controls">  
                    <source src="http://www.w3schools.com/html5/song.ogg" type="audio/ogg" />  
                    <source src="http://www.w3schools.com/html5/song.mp3" type="audio/mpeg" />  
                    Tarayıcınız audio tag'ını desteklemiyor.  
                </audio>
                <h2>Audio Formatları ve Tarayıcı Destekleri</h2>
                <p>Şu anda &lt;audio&gt; öğesi için desteklenen dosya formatları şöyledir; MP3, Wav ve Ogg.</p>
                <table>
                    <tbody>
                        <tr>
                          <th>Tarayıcı</th>
                          <th>MP3</th>
                          <th>Wav</th>
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
                          <td>Evet</td>
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
                
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=dragAndDrop" class="nextButton">Devam Et</a>
                <!-- #nextButton -->