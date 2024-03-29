                <h1> XHTML Head &amp; Meta Etiketleri</h1>
                <h2> XHTML Head Etiketi - Head Tag</h2>
                <p> <strong>&lt;head&gt;</strong> etiketi içerisinde genel bilgiler ve sayfa bilgileri bulunur. Bu bilgiler tarayıcı tarafından okunmaktadır. XHTML standartlarına göre sadece aşağıdaki etiketler <strong>&lt;head&gt;</strong> etiketi içerisinde kullanılmalıdır. </p>
                <table>
                    <tr>
                    <th>Head Etiketleri</th>
                    <th>Açıklama</th>
                    </tr>
                    <tr>
                    <td>&lt;title&gt;</td>
                    <td>Eklenen başlık tarayıcının durum çubuğunda yer alır.</td>
                    </tr>
                    <tr>
                    <td>&lt;base&gt;</td>
                    <td>Bu etiket içinde verdiğimiz link, sayfada öntanımlı olacak.</td>
                    </tr>
                    <tr>
                    <td>&lt;link&gt;</td>
                    <td>Bu etiket, HTML sayfası ile farklı bir dosya arasındaki ilişkiyi tanımlar.</td>
                    </tr>
                    <tr>
                    <td>&lt;meta&gt;</td>
                    <td>Arama motorlarının kontrol ettiği bölüm, burada anahtar kelimelerinizi belirleyebilirsiniz.</td>
                    </tr>
                </table>
                <p> <strong>Örnek olarak görelim...</strong> </p>
                <pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en&quot; xml:lang=&quot;en&quot;&gt;
    &lt;head&gt;

        &lt;meta http-equiv="content-type" content="text/html; charset=utf-8;"&gt;
        &lt;meta name="Keywords" content="sercan, eraslan, xhtml, html, css, javascript"&gt; 
        &lt;meta name="Resource-Type" content="Document"&gt;
        &lt;meta name="Distribution" content="Global"&gt;
        &lt;meta name="Author" content="Sercan Eraslan, example@example.com"&gt;
        &lt;meta name="Description" content="XHTML , HTML5 ve CSS hakkında herşey"&gt;
        &lt;meta name="Robots" content="Index, Follow"&gt;
        &lt;meta name="Revisit-After" content="1 Days&gt;
        
        &lt;base href="http://www.siteadresi.com/klasoradi/" /&gt;
        &lt;!-- Yukarıda ki uzantı altında olan bir dosyanın adresini, --&gt;
        &lt;!-- sayfanın herhangi bir yerinde "ornek.jpg" olarak verebilirsiniz.--&gt;
        
        &lt;link rel="stylesheet" media="screen" type="text/css" href="style.css"&gt;

        &lt;title&gt;Sercan Eraslan Web Page&lt;/title&gt;
                
    &lt;/head&gt;
    &lt;body&gt;

        Sayfamızın içeriği burada.
    
    &lt;/body&gt;
&lt;/html&gt;</code></pre>
                <!-- #XHTML Head Etiketi - Head Tag-->
                <h2>XHTML Meta Etiketi - Meta Tag</h2>
                <table>
                    <tr>
                      <th>Meta Adı</th>
                      <th>Meta kodu</th>
                      <th>Açıklama</th>
                    </tr>
                    <tr>
                      <td>Abstract</td>
                      <td>&lt;meta name="Abstract" content="Site özeti"/&gt;</td>
                      <td>Tüm site hakkında bilgi veren etikettir.</td>
                    </tr>
                    <tr>
                      <td>Author</td>
                      <td>&lt;meta name="Author" content="Ad Soyad, E-Posta Adresi"/&gt;</td>
                      <td>Site yapımcısının adı ve iletişim bilgilerinin bulunduğu etikettir.</td>
                    </tr>
                    <tr>
                      <td>Copyright</td>
                      <td>&lt;meta name= "Copyright" content="telif hakkı cümlesi"/&gt;</td>
                      <td>Sitenin telif hakları konusunda bilgi veren etikettir.</td>
                    </tr>
                    <tr>
                      <td>Description</td>
                      <td>&lt;meta name="Description" content="Sitenizin içeriği hakkında geniş bilgi"/&gt;</td>
                      <td>Bazı arama motorlarının temel aldığı, site hakkında bilgi veren temel etiketlerden biridir. Maksimum 139 karakter.</td>
                    </tr>
                    <tr>
                      <td>Expires</td>
                      <td>&lt;meta name="Expires" content="Mon, 12 Jan 2007 17:45:05 GMT/&gt;</td>
                      <td>Sitenin içeriğinin hangi tarihte zaman aşımına uğradığını arama motorlarına ileten etiket.</td>
                    </tr>
                    <tr>
                      <td>Keywords</td>
                      <td>&lt;meta name="Keywords" content="kelime1, kelime2, kelime3"/&gt;</td>
                      <td>Yine arama motorlarının temel aldığı, sitenizin içeriğini oluşturan kelimelerin bulunduğu etiket. Anahtar kelimeler virgül ile ayrılır 10 taneyi geçmez.</td>
                    </tr>
                    <tr>
                      <td>Language</td>
                      <td>&lt;meta http-equiv="content-language" content="tr"/&gt;</td>
                      <td>Sitenizin varsayılan dilini belirten etiket.</td>
                    </tr>
                    <tr>
                      <td>Revisit-After</td>
                      <td>&lt;meta name="Revisit-After" content="1 days"/&gt;</td>
                      <td>Arama motorlarına, sitenin içeriğinin kaç günde bir güncellendiğini ileten etiket.</td>
                    </tr>
                    <tr>
                      <td>Refresh</td>
                      <td>&lt;meta http-equiv="Refresh" content="60"/&gt;</td>
                      <td>Belli aralıklarla sayfanın yeilenmesini sağlayan etiket. Örnekteki 60, sayfanın 60 saniyede bir yenileneceğini belirtir.</td>
                    </tr>
                    <tr>
                      <td>Redirect</td>
                      <td>&lt;meta http-equiv="Refresh" content= "5; url= http://www.site.com"/&gt;</td>
                      <td>Sayfanın, belli bir zaman sonra başka bir sayfaya yönlenmesini sağlar. Bu örnekte sayfa 5 saniye sonra başka bir sayfaya yönlenecek.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="all"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde herşeyi yapsın.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="none"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde hiçbirşey yapmasın.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="index, follow"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde ki bilgileri indekslesin ve izlesin.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="noindex, follow"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde ki bilgileri indekslemesin ama izlesin.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="index, nofollow"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde ki bilgileri indekslesin ama izlemesin.</td>
                    </tr>
                    <tr>
                      <td>Robots</td>
                      <td>&lt;meta name="robots" content="noindex, nofollow"/&gt;</td>
                      <td>Arama motoru robotları site içerisinde ki bilgileri indekslemesin ve izlemesin.</td>
                    </tr>
                    <tr>
                      <td>Charset</td>
                      <td>&lt;meta http-equiv= "Content-Type" content="text/html; charset=utf-8"/&gt;</td>
                      <td>Sayfanın karakter kodlamasını belirtmek için kullanılır. Türkçe karakterlerin düzgün görünmesini sağlar.</td>
                    </tr>
                    <tr>
                      <td>Resource-Type</td>
                      <td>&lt;meta name="Resource-Type" content="Document"/&gt;</td>
                      <td>Sayfanın kaynak tipini göstermek için kullanılır.</td>
                    </tr>
                    <tr>
                      <td>Distribution</td>
                      <td>&lt;meta name="Distribution" Content="Global"/&gt;</td>
                      <td>Sayfayı tüm dünyaya açtığımızı gösteriyor. Lokal ve Internet seçenekleride var.</td>
                    </tr>
                    <tr>
                      <td>Subject</td>
                      <td>&lt;meta name="Subject" Content="Sayfanın konusu"/&gt;</td>
                      <td>Sayfanın konusu belirtmek için kullanılır.</td>
                    </tr>
                    <tr>
                      <td>Generator</td>
                      <td>&lt;meta name="Generator" Content="Ad Soyad"/&gt;</td>
                      <td>Sayfanın oluşturan kişinin adı soyadı için kullanılır.</td>
                    </tr>
                    <tr>
                      <td>Copyright</td>
                      <td>&lt;meta name="Copyright" Content="2009"/&gt;</td>
                      <td>Sayfanın oluştuğu yıl için kullanılır.</td>
                    </tr>
                    <tr>
                      <td>Designer</td>
                      <td>&lt;meta name="Designer" Content="Ad Soyad"/&gt;</td>
                      <td>Sayfanın tasarlayan kişinin adı soyadı için kullanılır.</td>
                    </tr>
                </table>
                <!-- #XHTML Meta Tag Tables-->
                <a href="/xhtml/index.php?page=gecerli_etiketler" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->