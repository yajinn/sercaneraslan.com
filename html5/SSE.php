                <h1>HTML5 Server-Sent Events - Server-Sent Olayları</h1>
                <p>HTML5 Server-Sent Olayları, Web sayfasında kullanılmak üzere sunucudan güncellemeleri almak için kullanılır.</p>
                <p>Bu daha öncede mümkündü fakat sayfanın güncellemelerin olup olmadığını sorması gerekiyordu. HTML5 Server-Sent Olayı ile güncellemeler otomatik olarak yapılıyor.</p>
                <p>Örnek olarak, Facebook/Twitter güncellemeleri, doviz fiyatları, haberler, spor sonuçları vs. Gelişmiş tarayıcıların hepsi bu özelliği destekler (Internet Explorer hariç).</p>
                <h2>HTML5 Server-Sent Olayı Bildirimlerini Alma</h2>
                <p>Bunun için EventSource objesini kullanacağız.</p>
                <pre><code class="language-javascript">
var source=new EventSource("demo_sse.php");
source.onmessage=function(event){
  document.getElementById("result").innerHTML+=event.data + "&lt;br /&gt;";
};               
                </code></pre>       
                <p>Örneğin Açıklaması:</p>
                <ul>
                    <li>EventSource objesi oluşturuldu ve güncellemelerin (bu örnekte "demo_sse.php" olarak) gönderileceği sayfasının URL'i belirtildi.</li>
                    <li>Güncelleme alındığında, onMessage olayı meydana gelir.</li>
                    <li>onMessage olayı meydana geldiğinde, "sonuç" id'li elemanın içine alınan veri konulur.</li>
                </ul>
                <h3>HTML5 Server-Sent Olayının Tarayıcılar Tarafından Desteklenip Desteklenmediğini Kontrol Etmek.</h3>
                <pre><code class="language-javascript">
if(typeof(EventSource)!=="undefined"){
  // Tarayıcınız Server-Sent Olaylarını destekliyor.
  // Kodlar...
  }else{
  // Tarayıcınız Server-Sent Olaylarını desteklemiyor.
}            
                </code></pre>           
                <h2>Server-Side Kod Örneği</h2>
                <p>Örneğin çalışması için veri güncellemeleri gönderme kapasitesine sahip bir sunucuya (PHP ya da ASP gibi.) ihtiyaç duyulur.</p>
                <p>Yazımı basittir. header() 'da "Content-Type"ı "text/event-stream" olarak ayarlamak yeterli. Şimdi Olay akışını göndermeye başlayabilirsiniz.</p>
                <p>PHP kodu: demo_sse.php</p>
                <pre><code class="language-javascript">
&lt;?php
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

$time = date('r');
echo "data: Server Saati: {$time}\n\n";
flush();
?&gt;         
                </code></pre>   
                <h2>EventSource Objesi</h2>
                <p>Yukarıdaki örneklerde mesajlar almak için onMessage olayını kullandık fakat 2 olay daha var bilmemiz gereken:</p>
                <table>
                    <tbody>
                        <tr>
                          <th>Olaylar</th>
                          <th>Açıklama</th>
                        </tr>
                        <tr>
                          <td>onopen</td>
                          <td>Sunucuya bir bağlantı açıldığında</td>
                        </tr>
                        <tr>
                          <td>onmessage</td>
                          <td>Mesaj alındığında</td>
                        </tr>
                        <tr>
                          <td>onerror</td>
                          <td>Hata alındığında</td>
                        </tr>
                    </tbody>
                </table>
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=yeniInput" class="nextButton">Devam Et</a>
                <!-- #nextButton -->