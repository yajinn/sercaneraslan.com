				<h1>CSS Kaydırma - Float</h1>
				<p>Bölümleme yaparken kullandığımız <strong>div</strong> 'leri, metinleri, görselleri vb. sağa veya sola yaslayabiliriz, bunu da <strong>float</strong> özelliği ile yapacağız. Kaydırmalar tam sol ve tam sağ olarak yapılır. Örneğin bir elemanı sola yasladığımızda o mümkün olduğunca en sola yaslanacaktır. </p>
				<p><strong>left</strong> (Sol) ve <strong>right</strong> (Sağ) olmak üzere iki değeri mevcuttur.</p>
				<pre><code class="language-css">
.div {
	float: left;
}
				</code></pre>
                <h2>CSS Clear Özelliği - Clear Property</h2>
				<p> <strong>float</strong> özelliği verilen elemandan sonra ki yazılan içeriklerde/kodlarda kaymalar yaşanabilmektedir. Bu sebeple <strong>float</strong> kullanımından sonra <strong>clear: both;</strong> özelliği kullanılabilir. <strong>clear: both;</strong> özelliği bir <strong>div</strong> 'e stil olarak verilmelidir. </p>
				<p> CSS Kodu: </p>
				<pre><code class="language-css">
.floatTemizle {
	clear: both; 
}
				</code></pre>
				<p> HTML/XHTML Kodu: </p> 
				<!-- CSS Clear Özelliği -->
                <pre><code class="language-javascript">
&lt;div class="floatTemizle"&gt; &lt;/div&gt;
				</code></pre>
				<p>Not: Eğer düzgün bir şekilde kodlama yaparsanız, <strong>clear: both;</strong> özelliğini kullanmanıza gerek kalmaz. Eğer bu özelliği kullanmak zorunda kalırsanız kodunuzu tekrar gözden geçirmeniz gerekmektedir.</p>
				<a href="/css/index.php?page=sozde_siniflar" class="nextButton">Devam Et</a>
                <!-- #nextButton -->