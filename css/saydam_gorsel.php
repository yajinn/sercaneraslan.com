                <h1>CSS Saydam Görsel - Image Opacity / Transparency</h1>
                <p>Internet Explorer için saydam görsel özelliği <strong>filter: alpha(opacity=x)</strong> ile sağlanır, 0 ile 100 arası saydamlık değeri verilebilir. Diğer tarayıcılar için ise <strong>opacity: x</strong> ile sağlanır ve 0.0 ile 1.0 arası saydamlık değeri alabilir. Kodumuzun her tarayıcıda aynı sonucu vermesini istiyorsak her iki özelliği birden kullanmalıyız.</p>
                <p><strong>Görselimizin normal halini görelim...</strong></p>
                <img src="../images/portakal.jpg" width="200" height="150" alt="saydam_gorsel" />
                <p><strong>Görselimizin saydam özelliği almış halini görelim...</strong></p>
                <img src="../images/portakal.jpg" width="200" height="150" alt="saydam_gorsel" style="opacity: 0.5; filter: alpha(opacity=50);" />
                <p><strong>Saydam örneğimizin CSS kodunu görelim...</strong></p>
                <pre><code class="language-css">
img { 
    opacity: 0.5; 
    filter: alpha(opacity=50); 
}
                </code></pre>
                <p><strong>Saydam örneğimizin HTML/XHTML kodunu görelim...</strong></p>
                <pre><code class="language-javascript">
&lt;img src="test.jpg" width="200" height="150" alt="yuklenemedi" /&gt;
                </code></pre>
                <!-- #CSS Saydam Görsel -->
                <h2>CSS Mouseover Efekti - Mouseover Effect</h2>
                <p>Görselin üzerine fare işaretçisi ile birlikte geldiğimizde görselin saydam olmasını ya da saydam görselin üzerine fare işaretçisi ile birlikte geldiğimizde görselin normal olmasını <strong>mouseover</strong> efekti ile sağlayabiliriz. Aşağıdaki görsellerin üzerine fare işaretçisi ile gelerek efekti test edebilirsiniz.</p>
                <p>Internet Explorer için <strong>mouseover</strong> ile saydam görsel özelliği <strong>this.filters.alpha.opacity=x</strong> ile sağlanır, 0 ile 100 arası saydamlık değeri verilebilir. Diğer tarayıcılar için ise <strong>this.style.opacity=x</strong> ile sağlanır ve 0.0 ile 1.0 arası saydamlık değeri alabilir. Kodumuzun her tarayıcıda aynı sonucu vermesini istiyorsak her iki özelliği birden kullanmalıyız. </p>
                <p>Kodumuzda <strong>onmouseover</strong> ve <strong>onmouseout</strong> öznitelikleri yer alacak. Fare işaretçisi görsel üzerinde ise <strong>onmouseover</strong> özniteliğine verdiğimiz stil çalışacak, fare işaretçisi görsel üzerinde değil ise <strong>onmouseout</strong> özniteliğine verdiğimiz stil çalışacak. </p>
                <p> Örnek olarak görelim...</p>
                <img src="../images/portakal.jpg" width="200" height="150" alt="saydam_gorsel" style="opacity: 1.0; filter: alpha(opacity=100);" onmouseover="this.style.opacity=0.6; this.filters.alpha.opacity=60;" onmouseout="this.style.opacity=1.0; this.filters.alpha.opacity=100" />
                <img src="../images/portakal.jpg" width="200" height="150" alt="saydam_gorsel" style="opacity: 0.6; filter: alpha(opacity=60);" onmouseover="this.style.opacity=1.0; this.filters.alpha.opacity=100;" onmouseout="this.style.opacity=0.6; this.filters.alpha.opacity=60" />
                <p> <strong>İlk örneğin kodunu görelim...</strong></p>
                <pre><code class="language-javascript">
&lt;img src="test.jpg" width="200" height="150" alt="yuklenemedi" 
style="opacity: 1.0; filter: alpha(opacity=100);" 
onmouseover="this.style.opacity=0.6; this.filters.alpha.opacity=60" 
onmouseout="this.style.opacity=1.0; this.filters.alpha.opacity=100" /&gt;
                </code></pre>
                <p> <strong>İkinci örneğin kodunu görelim...</strong></p>
                <pre><code class="language-javascript">
&lt;img src="test.jpg" width="200" height="150" alt="yuklenemedi" 
style="opacity: 0.6; filter: alpha(opacity=60);" 
onmouseover="this.style.opacity=1.0; this.filters.alpha.opacity=100" 
onmouseout="this.style.opacity=0.6; this.filters.alpha.opacity=60" /&gt;
                </code></pre>
                <!-- #CSS Mouseover Efekti -->
                <h2>CSS Saydam Kutu - Transparent Box</h2>
                <div class="saydamArkaplan">
                    <div class="saydamKutu">
                        <h1>Saydam Kutu</h1>
                        <p>Burada güzel okunması rahat bir içerik var. Burada güzel okunması rahat bir içerik var. Burada güzel okunması rahat bir içerik var. </p>
                        <p>Burada güzel okunması rahat bir içerik var. Burada güzel okunması rahat bir içerik var. Burada güzel okunması rahat bir içerik var.  </p>
                        <p>Burada güzel okunması rahat bir içerik var. </p>
                    </div>
                </div>
                <!-- #saydam_arkaplan -->
                <p> <strong>Yukarıda ki örneğin CSS kodunu görelim.</strong></p>
                <pre><code class="language-css">
.saydamArkaplan {
    background: url('/images/portakal.jpg') no-repeat;
    border: 1px dotted #000;
 }
.saydamKutu {
    margin: 10px;
    border: 1px solid #000;
    background-color: #FFF;
    filter: alpha(opacity=50);
    opacity: 0.5;
}
.saydamKutu p {
    margin: 25px;
    font-weight: 700;
}
                </code></pre>
                <p> <strong>Yukarıda ki örneğin HTML/XHTML kodunu görelim.</strong></p>
                <pre><code class="language-javascript">
&lt;div class="saydamArkaplan"&gt;
    &lt;div class="saydamKutu"&gt;
        &lt;h1&gt;Saydam Kutu&lt;/h1&gt; 
        &lt;p&gt;Burada güzel okunması rahat bir içerik var.&lt;/p&gt; 
        &lt;p&gt;Burada güzel okunması rahat bir içerik var.&lt;/p&gt; 
        &lt;p&gt;Burada güzel okunması rahat bir içerik var.&lt;/p&gt;
    &lt;/div&gt;
&lt;/div&gt;
                </code></pre>
                <!-- #CSS Saydam Kutu -->
                <p><strong>Not: </strong>Etiketlerin içerisinde <strong>style</strong> özniteliği ve <strong>onmouseover</strong> gibi javascript özniteliklerinin <strong>kullanılmaması</strong> gerekmektedir, Burada örneğin açıklaması yapıldığı için kullanılmıştır.</p>
                <a href="/css/index.php?page=sprite_gorsel" class="nextButton">Devam Et</a>
                <!-- #nextButton -->