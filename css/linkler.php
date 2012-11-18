				<h1>CSS Linkler / Bağlantılar - Links</h1>
				<p>CSS ile oluşturduğumuz linklerin / bağlantıların şekillerini değiştirebiliriz. Link / Bağlantı özelliklerini görelim.</p>	
				<ul>
					<li><strong>a:link</strong> (Henüz ziyaret edilmemiş olan linke / bağlantıya stil vermek için kullanılır.)</li>
					<li><strong>a:visited</strong> (Ziyaret edilmiş olan linke / bağlantıya stil vermek için kullanılır.)</li>
					<li><strong>a:hover</strong> (Fare,  link / bağlantı üzerine geldiğinde stil değişsin isteniyorsa bu özellik kullanılır.)</li>
					<li><strong>a:active</strong> (Linke / Bağlantıya tıklandığı anda linkin stili değişsin isteniyorsa bu özellik kullanılır.)</li>
				</ul>
				<p>Bazı link özellikleri tek başına kullanılamaz. Örneğin,</p>
				<ul>
					<li><strong>a:hover</strong> özelliği <strong>a: link</strong> ve <strong>a: visited</strong> özelliklerinden sonra kullanılmalıdır. </li>
					<li><strong>a:active</strong> özelliği ise <strong>a: hover</strong> özelliğinden sonra kullanılmalıdır.</li>
				</ul>
				<pre><code class="language-css">
a:link {
	background-color: #FFFF85;
}
a:visited {
	color: #00FF00;
}
a:hover {
	text-decoration: underline;
}
				</code></pre>
				<div class="note"> 
					<p> <strong>Not: </strong> Yukarıda ki özellikler Internet Explorer 6 ve Internet Explorer 7 'de düzgün çalışmayabilir. Bu sebeple kodunuzu yazdıktan sonra kontrol etmeniz gerekebilir. </p>		
				</div>
				<a href="/css/index.php?page=listeler" class="nextButton">Devam Et</a>
                <!-- #nextButton -->