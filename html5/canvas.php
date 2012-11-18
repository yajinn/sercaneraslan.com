				<h1>HTML5 Canvas</h1>
    			<p>&lt;canvas&gt; elemanı web sayfasına grafik çizmek için genellikle JavaScript ile kullanılır. &lt;canvas&gt; "height" ve "width" öznitelikleri ile çizilebilir bir alan oluşturur. Canvas çizmek için kullanılan metodlar: kutular, daireler, karakterler, görseller(images) ve dahası.  </p>
 				<p>&lt;canvas&gt;  elemanını tanımlarken "id", "width" ve "height" öznitelikleri verilmelidir.</p>
				<pre><code class="language-javascript">
&lt;canvas id="myCanvas" width="200" height="100"&gt;&lt;/canvas&gt;
                </code></pre> 
                <h2>JavaScript ile Çizim</h2>
                <p>&lt;canvas&gt; elemanının kendi çizim yetenekleri yoktur. Tüm çizimler JavaScript içinde yapılır.</p>
				<pre><code class="language-javascript">
&lt;script type="text/javascript"&gt;
	var a = document.getElementById("myCanvas");
	var ctx = a.getContext("2d");
		ctx.fillStyle="#FF0000";
		ctx.fillRect(0,0,150,75);
&lt;/script&gt;
                </code></pre>     			
    			<p>JavaScript, id kullanarak &lt;canvas&gt; elemanını bulur.</p>
				<pre><code class="language-javascript">
var a=document.getElementById("myCanvas");
                </code></pre>      			
    			<p>Sonra bir içerik nesnesi oluşturur. GetContext("2d") nesnesi yerleşik bir HTML5 nesnesidir.</p>
				<pre><code class="language-javascript">
var ctx = a.getContext("2d");
                </code></pre>       			
    			<p>Aşağıdaki iki satır, kırmızı bir dikdörtgen çizer:</p>
				<pre><code class="language-javascript">
ctx.fillStyle="#FF0000";
ctx.fillRect(0,0,150,75);
                </code></pre>      			
    			<p>fillStyle özniteliği rengi kırmız yapar, fillRect ise şeklini, konumunu ve boyutunu belirler. ilk iki değer yukarıda ve soldan olan mesafeyi ayarlar son iki değer ise oluşturduğumuz kutunun genişliğini ve yüksekliğini belirler.</p>
    			<p>Örnek 1</p>
				<canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;">
				Tarayıcınız canvas elemanını desteklemiyor.
				</canvas>
				<script type="text/javascript">
					var a=document.getElementById("myCanvas");
					var ctx=a.getContext("2d");
					ctx.moveTo(10,10);
					ctx.lineTo(150,50);
					ctx.lineTo(10,50);
					ctx.stroke();
				</script>
				<pre><code class="language-javascript">
&lt;canvas id="myCanvas" width="200" height="100" style="border:1px solid #c3c3c3;"&gt;
Tarayıcınız canvas elemanını desteklemiyor.
&lt;/canvas&gt;
&lt;script type="text/javascript"&gt;
	var a=document.getElementById("myCanvas");
	var ctx=a.getContext("2d");
	ctx.moveTo(10,10);
	ctx.lineTo(150,50);
	ctx.lineTo(10,50);
	ctx.stroke();
&lt;/script&gt;
                </code></pre>  				
    			<p>Örnek 2</p>
				<canvas id="myCanvas2" width="200" height="100" style="border:1px solid #c3c3c3;">
				Tarayıcınız canvas elemanını desteklemiyor.
				</canvas>
				
				<script type="text/javascript">
					var a=document.getElementById("myCanvas2");
					var ctx=a.getContext("2d");
					ctx.fillStyle="#FF0000";
					ctx.beginPath();
					ctx.arc(70,18,15,0,Math.PI*2,true);
					ctx.closePath();
					ctx.fill();
				</script>
				<pre><code class="language-javascript">
&lt;canvas id="myCanvas2" width="200" height="100" style="border:1px solid #c3c3c3;"&gt;
Tarayıcınız canvas elemanını desteklemiyor.
&lt;/canvas&gt;
&lt;script type="text/javascript"&gt;
	var a=document.getElementById("myCanvas2");
	var ctx=a.getContext("2d");
	ctx.fillStyle="#FF0000";
	ctx.beginPath();
	ctx.arc(70,18,15,0,Math.PI*2,true);
	ctx.closePath();
	ctx.fill();
&lt;/script&gt;
                </code></pre>  				

				<!-- #pages_content_tip_div -->
				<a href="/html5/index.php?page=inlineSVG" class="nextButton">Devam Et</a>
                <!-- #nextButton -->