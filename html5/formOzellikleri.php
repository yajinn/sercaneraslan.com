                <h1>HTML5 Form Özellikleri</h1>
                <p>HTML5 &lt;form&gt; ve &lt;input&gt; için birçok yeni özelliklere sahiptir.</p>
                <h3>&lt;form&gt; için Yeni Özellikler;</h3>
                <p><strong>autocomplete</strong> (Otomatik tamamlama özelliği)</p>
                <pre><code class="language-javascript">
&lt;form action="demo.php" autocomplete="on"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
&lt;/form&gt;       
                </code></pre>               
                <p><strong>novalidate</strong> (formun doğrulama yapılmaması gereken durumlarda kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo.php" novalidate="novalidate"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
&lt;/form&gt;       
                </code></pre>
                <h3>&lt;input&gt; için Yeni Özellikler;</h3>
                <p><strong>autocomplete</strong> (Otomatik tamamlama özelliği)</p>
                <pre><code class="language-javascript">
&lt;input type="email" name="email" autocomplete="off" /&gt;   
                </code></pre>               
                <p><strong>autofocus</strong> (Sayfa yüklendiğinde otomatik olarak focus/odaklanma özelliği alır.)</p>
                <pre><code class="language-javascript">
&lt;input type="text" name="fname" autofocus="autofocus" /&gt;   
                </code></pre>                   
                <p><strong>form</strong> (Input'u, sayfanın başka bir yerinde ki form'a dahil etmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo.php" id="uyelikformu"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
&lt;/form&gt;

Soyisim: &lt;input type="text" name="lastname" form="uyelikformu" /&gt;    
                </code></pre>               
                <p><strong>formaction</strong> (Form'un action özelliğini ezmek/üstüne binmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo.php"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
    Soyisim: &lt;input type="text" name="lastname" /&gt;
    &lt;input type="submit" value="Gönder" /&gt;
    &lt;input type="submit" formaction="demo2.php" value="Gönder 2" /&gt;
&lt;/form&gt;  
                </code></pre>   
                <p><strong>formenctype</strong> (Form'un enctype özelliğini ezmek/üstüne binmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo_post_enctype.php" method="post"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
    &lt;input type="submit" value="Gönder" /&gt;
    &lt;input type="submit" formenctype="multipart/form-data" value="Gönder 2" /&gt;
&lt;/form&gt;  
                </code></pre>   
                <p><strong>formmethod</strong> (Form'un method özelliğini ezmek/üstüne binmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo_form.asp" method="get"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
    Soyisim: &lt;input type="text" name="lastname" /&gt;
    &lt;input type="submit" value="Gönder" /&gt;
    &lt;input type="submit" formmethod="post" formaction="demoPost.php" value="Gönder 2" /&gt;
&lt;/form&gt;  
                </code></pre>   
                <p><strong>formnovalidate</strong> (Form'un novalidate özelliğini ezmek/üstüne binmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo_form.asp"&gt;
    E-mail:&lt;input type="email" name="userid" /&gt;
    &lt;input type="submit" value="Gönder" /&gt;
    &lt;input type="submit" formnovalidate="formnovalidate" value="Gönder 2" /&gt;
&lt;/form&gt;  
                </code></pre>   
                <p><strong>formtarget</strong> (Form'un target özelliğini ezmek/üstüne binmek için kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;form action="demo_form.asp"&gt;
    İsim :&lt;input type="text" name="firstname" /&gt;
    Soyisim: &lt;input type="text" name="lastname" /&gt;
    &lt;input type="submit" value="Gönder" /&gt;
    &lt;input type="submit" formtarget="_blank" value="Gönder 2" /&gt;
&lt;/form&gt;  
                </code></pre>   
                <p><strong>height and width</strong> (type'ı image olan input için yükseklik ve genişlik atamasını sağlar.)</p>
                <pre><code class="language-javascript">
&lt;input type="image" src="submitIcon.png" alt="Submit" width="25" height="25" /&gt;   
                </code></pre>   
                <p><strong>list</strong> (datalist elemanını incelerken görmüştük.)</p>
                <pre><code class="language-javascript">
&lt;input list="tarayicilar" /&gt;

&lt;datalist id="tarayicilar"&gt;
    &lt;option value="Internet Explorer"&gt;
    &lt;option value="Firefox"&gt;
    &lt;option value="Chrome"&gt;
    &lt;option value="Opera"&gt;
    &lt;option value="Safari"&gt;
&lt;/datalist&gt;
                </code></pre>
                <p><strong>min, max ve step</strong> (Input türlerinden tarih ve sayı girişlerine sınırlamalar getirmek için kullanılır.)</p>
                <ul>
                    <li><strong>min  :</strong> İzin verilen girilebilecek en düşük değer.</li>
                    <li><strong>max  :</strong> İzin verilen girilebilecek maksimum değer.</li>
                    <li><strong>step :</strong> Sayı artış ya da azalış aralığını belirler.</li>
                </ul>
                <pre><code class="language-javascript">
&lt;input type="date" name="dogumgunu" min="2000-01-02" /&gt;
&lt;input type="date" name="dogumgunu" max="1979-12-31" /&gt;
&lt;input type="number" name="adet" min="1" max="5" /&gt;
&lt;input type="number" name="points" step="3" /&gt;
                </code></pre>
                <p><strong>multiple</strong> (type'ı image olan input için yükseklik ve genişlik atamasını sağlar.)</p>
                <pre><code class="language-javascript">
&lt;input type="file" name="img" multiple="multiple" /&gt;   
                </code></pre>                   
                <p><strong>pattern / regexp</strong> (Örnek kullanılarak bir input alanını doğrulamak için kullanılan bir kalıptır. Javascript ile ilintilidir. text, search, url, telephone, email, ve password ile kullanılır.)</p>
                <pre><code class="language-javascript">
Ülke kodu: &lt;input type="text" name="ulkeKodu" pattern="[A-Za-z]{3}" title="Üç harfli ülke kodu" /&gt;   
                </code></pre>                       
                <p><strong>placeholder</strong> (Input alanında ipucu gözükür, tıklandığında kaybolur. text, search, url, telephone, email, ve password ile kullanılır.)</p>
                <pre><code class="language-javascript">
&lt;input type="email" name="kullanıcıEmail" placeholder="test@test.com" /&gt;   
                </code></pre>
                <p><strong>required</strong> (Onaylamadan önce doldurulma zorunluluğu olduğunu gösterir. text, search, url, telephone, email, password, date pickers, number, checkbox, radio ve file ile kullanılır.)</p>
                <pre><code class="language-javascript">
İsim: &lt;input type="text" name="kullaniciAdi" required="required" /&gt;   
                </code></pre>
                <div class="cup"> 
                    <h1>Tebrikler !!!</h1>
                    <p> <strong>Tebrikler,</strong> artık <strong>HTML5</strong> biliyorsunuz. Öğrendiklerinizi deneyip kendinizi geliştirebilirsiniz, yeni birşeyler öğrenirseniz de bunları bir blog sayfasında paylaşmanız hepimizin yararına olur. Yazım hataları varsa iletişim sayfasından bana iletebilirsiniz.</p>
                </div>