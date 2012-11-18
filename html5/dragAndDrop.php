				<h1>HTML5 Drag and Drop - Sürükle ve Bırak</h1>
				<p>Sürükle ve bırak artık HTML5'in bir parçası oldu. Sürükle ve bırak ortak bir özelliktir, diğer dillerde de vardır. Bir nesneyi tutup diğer bir konuma taşıyarak "Sürükle ve bırak" olayı gerçekleşir.</p>
    			<p>Aşağıdaki örnek üzerinde sürükle bırak özelliğini test edebilirsiniz. ( Logo'yu mouse ile kutu içerisine taşıyarak test edebilirsiniz.)</p>
    			<style type="text/css">
    				#dragBox { height: 200px;}
					#div1 {float:left; width:150px; height:150px; margin-right: 20px; padding:10px; border:1px solid #aaaaaa;}
					#drag1{float:left;}
				</style>
    			<script type="text/javascript">
				function allowDrop(ev){
					ev.preventDefault();
				}
			
				function drag(ev){
					ev.dataTransfer.setData("Text",ev.target.id);
				}
				
				function drop(ev){
					ev.preventDefault();
					var data=ev.dataTransfer.getData("Text");
					ev.target.appendChild(document.getElementById(data));
				}
				</script>
				<div id="dragBox">
					<div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"></div>
					<img id="drag1" src="../images/logo.jpg" draggable="true" ondragstart="drag(event)" width="150" height="150" />
				</div>
				<pre><code class="language-javascript">
&lt;script type="text/javascript"&gt;
function allowDrop(ev){
	ev.preventDefault();
}

function drag(ev){
	ev.dataTransfer.setData("Text",ev.target.id);
}

function drop(ev){
	ev.preventDefault();
	var data=ev.dataTransfer.getData("Text");
	ev.target.appendChild(document.getElementById(data));
}
&lt;/script&gt;

&lt;div id="div1" ondrop="drop(event)" ondragover="allowDrop(event)"&gt;&lt;/div&gt;
&lt;img id="drag1" src="../images/logo.jpg" draggable="true" ondragstart="drag(event)" width="150" height="150" /&gt;
                </code></pre>  
                <h3>draggable Özniteliği</h3>
                <p>Elemana "draggable" özniteliğini "true" olarak verdiğimizde elemanımız artık sürüklenebilir olacaktır.</p>
				<pre><code class="language-javascript">
&lt;img draggable="true" /"&gt;
                </code></pre>                  
                <h3>ondragstart ve setData()</h3>
                <p>Yukarıda ki örnekte img etiketi içinde ondragstart="drag(event)" kullanmıştık bu, şu anlama geliyor; ondragstart, sürükleme başladığında demektir, tırnak içerisinde ki değerde drag fonksiyonunu "event" parametresini alarak çalıştır demektir. Burada ki "event" Tarayıcı event'idir. (Google'dan JavaScript Events'i yada JavaScript Olaylar'ını aratarak bilgi alabilirsiniz)</p>                
				<p>dataTransfer.setData() yöntemi, veri türü ve sürüklenen veri değerini belirler:</p>
				<pre><code class="language-javascript">
function drag(ev){
	ev.dataTransfer.setData("Text",ev.target.id);
}
                </code></pre>
                <p>Bu durumda veri türü "Text" ve değeri "drag1" oldu. Yani "drag1" id'li elemanı "Text" formatında sürüklenebilir hale getirmiş olduk.</p>
                <p>Not: Tarayıcı event'lerini fonksiyonlarda kullanırken "ev" şeklinde kısaltabilirsiniz.</p>
                <h3>ondragover</h3>
                <p>Ondragover olayı sürüklenen verilerin bırakıldığını bildirir. Varsayılan olarak veri/elemanlar diğer öğelerin içine bırakılamaz. Bunun için event.preventDefault() metodunu çağırarak izin vermeliyiz.</p>             	
				<pre><code class="language-javascript">
event.preventDefault();
                </code></pre>				
                <h3>ondrop</h3>
                <p>Sürüklenen veri bırakıldığında, bırak olayı oluşur. Yukarıdaki örnekte ondrop özniteliği drop(event) fonksiyonunu çağırmıştı.</p>             	
				<pre><code class="language-javascript">
function drop(ev){
	var data=ev.dataTransfer.getData("Text");
	ev.target.appendChild(document.getElementById(data));
	ev.preventDefault();
}
                </code></pre>					
				<p>Kod Açıklaması:</p>
				<ul>
					<li>dataTransfer.getData("Text") metodu ile sürüklenen veriler alınır.</li>
					<li>Sürüklenen eleman, bırakılan elemanın içine eklenir.</li>
					<li>event.preventDefault() metoduyla tekrar izin veriyoruz.</li>
				</ul>
				
				<h3>Tarayıcı Desteği</h3>
				<p>Internet Explorer 9, Firefox, Chrome, ve Safari Sürükle ve Bırak özelliğini desteklemektedir.</p>
				<p>Not: Sürükle ve Bırak özelliği Safari 5.1.2 sürümünde çalışmamaktadır.</p>
				<!-- #pages_content_tip_div -->
				<a href="/html5/index.php?page=canvas" class="nextButton">Devam Et</a>
                <!-- #nextButton -->