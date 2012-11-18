				<h1>CSS İç Kenar Boşluğu - Padding</h1>
				<p><strong>padding</strong> , div ile div içerisinde ki içeriğin arasında ki mesafeyi belirlemek için kullanılır. <strong>padding</strong>, div 'in arkaplan renginden etkilenmektedir. </p>
				<p><strong>padding</strong> kullanıldığında 4 iç kenarda boşluk oluşacaktır. Üst, sağ, alt ve sol kenarlarda da birbirinden bağımsız olarak boşluklar verilebilir.</p>
				<ul>
					<li><strong>padding</strong></li>
					<li><strong>padding-top</strong></li>
					<li><strong>padding-right</strong></li>
					<li><strong>padding-bottom</strong></li>
					<li><strong>padding-left</strong></li>
				</ul>
				<p>Tüm <strong>padding</strong> özelliklerinde <strong>piksel</strong> (padding:10px;), <strong>yüzde</strong> (padding-top:50%;) ve <strong>em</strong> (padding-left:1.5em) kullanılabilmektedir.</p>
				<!-- #CSS İç Kenar Boşluğu -->
                <h2>CSS Çoklu İç Kenar Boşluğu Kullanımı - Padding Individual Sides</h2>
				<p>Bir kutunun her açısında farklı padding kullanmak mümkündür. (top=üst, right=sağ, bottom=alt, left=sol)</p>
                <pre><code class="language-css">
div {
	padding-top: 100px;
	padding-right: 50px;
	padding-bottom: 100px;
	padding-left: 50px;
}
				</code></pre>		
				<!-- #CSS Çoklu İç Kenar Boşluğu Kullanımı -->
                <h2>CSS İç Kenar Boşluğu Kısa Yazım - Padding Shorthand Property</h2>
				<p>İç kenar boşluğu / padding için kısa yazımı görelim.</p>
				<ul>
					<li><strong>padding: 25px 50px 75px 100px;</strong> (üst 25 piksel, sağ 50 piksel, alt 75 piksel, sol 100 piksel olur.)</li>
					<li><strong>padding: 25px 50px 75px;</strong> (üst 25 piksel, sağ ve sol 50 piksel, alt 75 piksel olur.)</li>
					<li><strong>padding: 25px 50px;</strong> (üst ve alt 25 piksel, sağ ve sol 50 piksel olur.)</li>
					<li><strong>padding: 25px;</strong> (Tüm iç kenar boşlukları 25 piksel olur.)</li>
				</ul>
                <!-- #CSS İç Kenar Boşluğu Kısa Yazım -->
				<a href="/css/index.php?page=gruplama_yerlestirme" class="nextButton">Devam Et</a>
                <!-- #nextButton -->