				<h1>CSS Dış Kenar Boşluğu - Margin</h1>
				<p><strong>margin</strong> etiketlerin/elemanların çevresini temizler/boşaltır. <strong>margin</strong> tamamen şeffaftır ve bir arkaplan rengi yoktur. </p>
				<p><strong>margin</strong> kullanıldığında etiketlerin/elemanların 4 bir yanıda temizlenir/boşaltılır. Üst, sağ, alt ve sol kenarlar birbirinden bağımsız olarakta kullanılabilir.</p>
				<ul>
					<li><strong>margin</strong></li>
					<li><strong>margin-top</strong></li>
					<li><strong>margin-right</strong></li>
					<li><strong>margin-bottom</strong></li>
					<li><strong>margin-left</strong></li>
				</ul>
				<p>Tüm <strong>margin</strong> özelliklerinde <strong>piksel</strong> (margin:10px;), <strong>yüzde</strong> (margin-top:50%;) ve <strong>em</strong> (margin-left:1.5em) kullanılabilmektedir. Ayrıca <strong>auto</strong> özelliği de kullanılabilmektedir. <strong>auto</strong> özelliği kullanıldığında mesafeyi tarayıcı/browser kendi ayarlayacaktır. Eksi kullanımı mümkündür (margin-bottom:-10px;).</p>
				<h2>CSS Çoklu Dış Kenar Boşluğu Kullanımı - Margin Individual Sides</h2>
				<p>Bir kutunun her açısında farklı margin kullanmak mümkündür. (top=üst, right=sağ, bottom=alt, left=sol)</p>
                <pre><code class="language-css">
div {
	margin-top: 100px;
	margin-right: 50px;
	margin-bottom: 100px;
	margin-left: 50px;
}
				</code></pre>			
				<!-- #CSS Çoklu Dış Kenar Boşluğu Kullanımı -->
                <h2>CSS Dış Kenar Boşluğu Kısa Yazım - Margin Shorthand Property</h2>
				<p>Dış kenar boşluğu / margin için kısa yazımı görelim.</p>
				<ul>
					<li><strong>margin: 25px 50px 75px 100px;</strong> (üst 25 piksel, sağ 50 piksel, alt 75 piksel, sol 100 piksel olur.)</li>
					<li><strong>margin: 25px 50px 75px;</strong> (üst 25 piksel, sağ ve sol 50 piksel, alt 75 piksel olur.)</li>
					<li><strong>margin: 25px 50px;</strong> (üst ve alt 25 piksel, sağ ve sol 50 piksel olur.)</li>
					<li><strong>margin: 25px;</strong> (Tüm dış kenar boşlukları 25 piksel olur.)</li>
				</ul>
				<!-- #CSS Dış Kenar Boşluğu Kısa Yazım -->
                <a href="/css/index.php?page=ic_kenar_boslugu" class="nextButton">Devam Et</a>
                <!-- #nextButton -->