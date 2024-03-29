                <h1>HTML5 Yeni Form Elemanları</h1>
                <p>HTML5 ile birlikte yeni form elemanları gelmiştir, bunlar;</p>
                <ul>
                    <li>&lt;datalist&gt;</li>
                    <li>&lt;keygen&gt;</li>
                    <li>&lt;output&gt;</li>
                </ul>
                <p>Not: Tüm gelişmiş tarayıcılar yeni form elemanlarını destekler. Ancak tarayıcılar yeni input tiplerini desteklemiyorsa bunlar normal text alanları gibi gözükecektir.</p>
                <h2>HTML5 &lt;datalist&gt; Elemanı</h2>
                <p>&lt;datalist&gt; Elemanı, &lt;input&gt; elemanı için önceden tanımlanmış seçenekler listesini belirtir. &lt;datalist&gt; Elemanı, &lt;input&gt; elemanları üzerinde bir <strong>otomatik tamamlama</strong> özelliği sağlamak için kullanılır.</p>
                <p>Nasıl?</p>
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
                <h2>HTML5 &lt;keygen&gt; Elemanı</h2>
                <p>&lt;keygen&gt; Elemanın amacı, kullanıcıların kimliğini doğrulamak için güvenli bir yol sağlamaktır. &lt;keygen&gt; Elemanı ile kullanıcı adı gibi özel bilgiler kriptolanarak şifrelenir.</p>
                <p>Form gönderildiğinde, bir özel ve bir genel olarak iki anahtar oluşturulur.</p>
                <p>Özel anahtar yerel olarak saklanır ve genel anahtar sunucuya gönderilir. Ortak anahtar gelecekte kullanıcının kimliğini doğrulamak için bir istemci sertifikası oluşturmak için kullanılabilir.</p>
                <p>Nasıl kullanılır?</p>
                <pre><code class="language-javascript">
&lt;form action="demo.php" method="get"&gt;
  Kullanıcı adı: &lt;input type="text" name="kullaniciadi" /&gt;
  Şifreleme: &lt;keygen name="guvenlik" /&gt;
  &lt;input type="submit" /&gt;
&lt;/form&gt;  
                </code></pre>               
                <h2>HTML5 &lt;output&gt; Elemanı</h2>
                <p>&lt;output&gt; Elemanı bir hesaplama sonucunu temsil etmektedir. Aşağıdaki örnekte a ve b isimli inputların toplamını &lt;output&gt; Elemanı ile ve bir script yardımıyla verelim.</p>
                <pre><code class="language-javascript">
&lt;form oninput="x.value=parseInt(a.value)+parseInt(b.value)"&gt;
    &lt;input type="range" name="a" value="50" /&gt;
    +
    &lt;input type="number" name="b" value="50" /&gt;
    =
    &lt;output name="x" for="a b"&gt;&lt;/output&gt;
&lt;/form&gt;
                </code></pre>               
                <!-- #pages_content_tip_div -->
                <a href="/html5/index.php?page=formOzellikleri" class="nextButton">Devam Et</a>
                <!-- #nextButton -->