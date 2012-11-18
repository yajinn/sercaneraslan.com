                <h1>XHTML Giriş - Intro</h1>
                <p> Bilinmesi gereken ilk şey kodların <strong>küçük harfle</strong> yazılması gerektiğidir. Bunu hatırlattığımıza göre artık eğitime başlayabiliriz. Minik bir not: <strong>XHTML</strong> , " -iks -eyç -ti -em -el " olarak okunur. </p>
                <p> <strong>HTML</strong>'in açılımı "Hyper Text Markup Language" tir, Türkçesi ise "Hareketli Metin İşaretleme Dili" dir. İnternet üzerinde web sayfası oluşturmak için kullanılır.  Dosya uzantısı <strong>" .html " </strong>ve <strong> ".htm "</strong>olarak kullanılabilir. Bu dili yazabilmek için her bilgisayarda kurulu olan metin editörlerini (Örneğin, Not Defteri, Vim, TextMate vs.) kullanabilirsiniz.  Oluşturulan sayfayı görüntülemek için ise bir tarayıcı / browser (Firefox, Chrome, Opera, Internet Explorer vs.) yeterlidir. Bu dili öğrenmek oldukça basittir ve yazması çok keyiflidir.</p>
                <p> <strong>XHTML</strong>’in açılımı "Extensible Hypertext Markup Language" tir.  Türkçesi ise "Geliştirilebilir Hareketli Metin İşaretleme Dili" dir. XHTML, HTML’in <strong>XML</strong> olarak düzenlenmiş halidir. Geliştirilebilir ve <strong>World Wide Web Consortium (W3C)</strong> 'u tarafından geçerli kabul edildiği için ayrıca içerisinde tamamiyle HTML'i barındırdığı için biz XHTML'i öğreneceğiz. Aslında XHTML öğrenirken HTML'i de öğrenmiş olacağız. HTML ile XHTML arasında 10 ufak fark bulunmaktadır.  Bu farkları <a href="/xhtml/index.php?page=farklar">buraya</a> tıklayarak öğrenebilirsiniz. XHTML derslerine hemen başlamak için ise lütfen <a href="/xhtml/index.php?page=giris">tıklayınız.</a> </p>
                <p> XHTML etiketleri (tag'ları) açılırken <strong>" &lt; "</strong> ile <strong>" &gt; "</strong> işaretleri arasına yazılır, Örneğin, <strong>" &lt;html&gt; "</strong> , bu bir " html " <strong>açılış</strong> etiketidir (tag'ıdır). XHTML etiketleri (tag'ları) kapanırken ise <strong>" &lt;/ "</strong> ile <strong>" &gt; "</strong> işaretleri arasına yazılır, Örneğin, <strong>" &lt;/html&gt; "</strong> , bu bir " html " <strong>kapanış</strong> etiketidir (tag'ıdır). Unutulmamalıdır ki açılan her etiket (tag) <strong>kapanmalıdır.</strong> Etiket kapatmayı unutmamak için etiket açtığınız anda etiketi kapatmanızı öneririm. </p>
                <p> <strong>İlk örneğimizi görelim...</strong></p>
                <pre><code class="language-javascript">
&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;
&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot; lang=&quot;en&quot; xml:lang=&quot;en&quot;&gt;
    &lt;head&gt;
        &lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=UTF-8&quot; /&gt;
        &lt;title&gt;Sayfamızın Başlığı Burada Olacak&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;p&gt;Body içerisinde yazacağımız herşey sayfamızda gözükecek&lt;/p&gt;
    &lt;/body&gt;
&lt;/html&gt;   </code></pre> 
                <p> Yukarıda bulunan etiketler, XHTML yazmak için olmazsa olmazlardandır, bu etiketler <strong>mutlaka</strong> olmalıdır. Kodun daha rahat okunması için kod aralarında 1 satır boşluk bırakıyoruz ve iç içe yazılan etiketleri de klavyede bulunan "Tab" tuşu ile ayırıyoruz. </p>
                <p> <strong>Bu kodu tarayıcıda görmek için <a href="test/test.html" >tıklayınız.</a> </strong> </p>
                <ul>
                    <li><strong>"&lt;DOCTYPE&gt;" etiketi ne işe yarar:</strong> Bu etiketi daha sonra ele alacağız ama şimdi bilgi almak isterseniz <a href="/xhtml/index.php?page=gecerli_kod">buradan</a> bilgi alabilirsiniz.(Kafanızın karışmaması açısından daha sonra bakmanızı öneririm.)</li>  
                    <li><strong>"&lt;html&gt;" etiketi ne işe yarar:</strong> Bu etiket tarayıcıya / browser'a (Internet Explorer , Firefox , Opera vb. ) bu kodun hangi dil ile yazıldığını bildirir.</li>
                    <li><strong>"&lt;head&gt;" etiketi ne işe yarar:</strong> Bu etiketi de daha sonra ele alacağız ama şimdi bilgi almak isterseniz <a href="/xhtml/index.php?page=head">buradan</a> bilgi alabilirsiniz.(Kafanızın karışmaması açısından daha sonra bakmanızı öneririm.)</li>
                    <li><strong>"&lt;title&gt;" etiketi ne işe yarar:</strong> Bu etiket içine yazılan her metin tarayıcının en üstünde ( durum çubuğunda ) bilgi olarak yer alır. Bir nevi sayfanın adı diyebiliriz.</li>
                    <li><strong>"&lt;body&gt;" etiketi ne işe yarar:</strong> Sayfa içerisinde görünmesini istediğimiz herşeyi / her kodu burada belirteceğiz.</li>
                    <li><strong>"&lt;p&gt;" etiketi ne işe yarar:</strong> Sayfa içerisine paragraf eklemimizi sağlar, içine yazılan yazılar paragraf stilinde gözükür. </li>
                </ul>
                <p> Yukarıda ki kodu kopyalayıp masaüstünüzde sağ tıklayarak "Yeni" deyip yeni bir " Not Defteri " dosyası oluşturalım ve oluşturduğumuz dosyanın adını " deneme.html " şeklinde değiştirip kaydedelim. Daha sonra kaydettiğimiz dosyayı sağ tıklayarak "Birlikte Aç > Not Defteri " diyelim. Siteden kopyaladığımız kodu buraya yapıştırıp "Dosya > Kaydet" diyelim. Şimdi HTML dosyamız oluştu ve kullanıma hazır. Masaüstünde oluşturduğumuz dosyayı çift tıklayalım ve kodun sayfada nasıl gözüktüğünü inceleyelim. "title" ve "p" etiketi içinde ki metinleri değiştirerek denemeler yapabilirsiniz. </p>
                <div class="tip">
                    <h1> XHTML İpucu - XHTML kodu neyle yazılır? </h1>      
                    <p> XHTML kodu, her bilgisayarda kurulu olan metin editörleri ile birlikte ( Örneğin; Not Defteri, Vim, Sublime Text, TextMate, Notepad++ vs ) yazılabilir. </p>
                </div>
                <div class="tip">
                    <h1>XHTML İpucu - Tarayıcıda Türkçe karakterler görünmüyor!</h1>
                    <p>Eğer tarayıcıda <strong>Türkçe karakterleriniz görünmüyorsa</strong> yazdığınız kodun dilini <strong>" UTF-8 without BOM "</strong> a çevirmeniz gerekmektedir. Eğer hala sorun devam ediyorsa tarayıcınızın dilini <strong>" Unicode ( UTF-8 ) "</strong> yapmanız gerekmektedir. <strong>NotePad++</strong>'ta kodumuz açıkken yukarıdan <strong>" Biçim "</strong> i tıklayarak, <strong>" Kodla (UTF-8 without BOM)"</strong> u tıklayıp ardından dosyayı kaydederek sayfamıza karakter desteği ekleyebiliriz.</p>
                </div>
                <a href="/xhtml/index.php?page=basliklar" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->