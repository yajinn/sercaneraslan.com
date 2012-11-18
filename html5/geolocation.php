				<h1>HTML5 Geolocation - Konumlandırma</h1>
				<p>HTML5 Geolocation API'ı, kullanıcının coğrafi konumunu almak için kullanılır. Tabi bu kullanıcının güvenliğini tehlikeye sokabilir, o yüzden kullanıcılardan konumunu öğrenmek için onay alınır. Kullanıcı onay vermeden kullanıcının konumu öğrenilemez. Gelişmiş tüm tarayıcılar bu özelliği destekler. </p>
    			<p>Bu özelliği GPS'i olan aygıtlarda kullanmak daha doğru olur.</p>
    			<h2>HTML5 - Geolocation'ı / Konumlandırmayı Kullanma</h2>
                <p>getCurrentPosition() metoduyla kullanıcının yeri saptanabilir. Aşağıdaki örnek basit bir şekilde enlem ve boylam olarak kullanıcının konumunu döndürür:</p>
				<p id="demo">Butona tıklayarak koordinat bilgilerinizi alabilirsiniz:</p>
				<button onclick="getLocation()">Dene</button>
				<script>
				var x=document.getElementById("demo");
				function getLocation()
				  {
				  if (navigator.geolocation)
				    {
				    navigator.geolocation.getCurrentPosition(showPosition);
				    }
				  else{x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";}
				  }
				function showPosition(position)
				  {
				  x.innerHTML="Enlem: " + position.coords.latitude + 
				  " Boylam: " + position.coords.longitude;	
				  }
				</script>                
                <pre><code class="language-javascript">
var x=document.getElementById("demo");

function getLocation() {
	if (navigator.geolocation) {
	navigator.geolocation.getCurrentPosition(showPosition);
	}else{
		x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";
	}
}

function showPosition(position) {
	x.innerHTML="Enlem: " + position.coords.latitude +
	" Boylam: " + position.coords.longitude;
}
                </code></pre>                	
                <p>Örneğin Açıklaması:</p>
                <ul>
                	<li>Tarayıcının Geolocation özelliğini desteklekleyip desteklemediği kontrol ediliyor.</li>
                	<li>Destekliyorsa getCurrentPosition() metodu çalışırılıyor desteklemiyorsa kullanıcıya özelliğin desteklenmediği mesajı gösterilir.</li>
                	<li>getCurrentPosition() metodu başarılıysa parametre olarak verilen ShowPosition() fonksiyonu geriye koordinatları döndürür.</li>
                	<li>ShowPosition() fonksiyonu enlem ve boylamı alır ve gösterir.</li>
                </ul>
				<h2>Handling Errors and Rejections - Hataları ve Reddedilmeleri İşleme</h2>
				<p>GetCurrentPosition() metodunun ikinci parametresi hataları işlemek için kullanılır. Kullanıcı konumunu kullanmamıza engel olduğunda yapılması gereken kodları burada yazacağız.</p>
                <pre><code class="language-javascript">
function showError(error){
	switch(error.code){
	case error.PERMISSION_DENIED:
		x.innerHTML="Kullanıcı Geolocation isteğini reddetti."
		break;
	case error.POSITION_UNAVAILABLE:
		x.innerHTML="Konum bilgileri kullanılamıyor."
		break;
	case error.TIMEOUT:
		x.innerHTML="Kullanıcı yerini almak için yapılan istek zaman aşımına uğradı."
		break;
	case error.UNKNOWN_ERROR:
		x.innerHTML="Bilinmeyen bir hata oluştu."
		break;
	}
}
                </code></pre> 
                <h2>Haritada Konum Gösterme</h2> 
                <p>Konumu haritada gösterebilmek için enlem, boylam verilerine ve bir harita servisine ihtiyacımız olacak (Google Maps gibi).</p>
                <p>Aşağıdaki kod bize enlem ve boylam verilerine göre Google Maps tarafından oluşturulmuş sabit bir görsel(image) verecektir.</p>
				<p id="demo">Lütfen butona tıklayınız:</p>
				<button onclick="getLocation()">Dene</button>
				<div id="mapholder"></div>
				<script>
				var x=document.getElementById("demo");
				
				function getLocation(){
					if (navigator.geolocation){
						navigator.geolocation.getCurrentPosition(showPosition,showError);
					}else{
						x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";
					}
				 }
				
				function showPosition(position){
					var latlon=position.coords.latitude+","+position.coords.longitude;

					var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
					+latlon+"&zoom=14&size=400x300&sensor=false";
					document.getElementById("mapholder").innerHTML="<img src='"+img_url+"' />";
				}
				
				function showError(error){
				  switch(error.code){
				    case error.PERMISSION_DENIED:
				      x.innerHTML="Kullanıcı Geolocation isteğini reddetti."
				      break;
				    case error.POSITION_UNAVAILABLE:
				      x.innerHTML="Konum bilgileri kullanılamıyor."
				      break;
				    case error.TIMEOUT:
				      x.innerHTML="Kullanıcı yerini almak için yapılan istek zaman aşımına uğradı."
				      break;
				    case error.UNKNOWN_ERROR:
				      x.innerHTML="Bilinmeyen bir hata oluştu."
				      break;
				    }
				}
				</script>
                <pre><code class="language-javascript">
&lt;p id="demo"&gt;Lütfen butona tıklayınız:&lt;/p&gt;
&lt;button onclick="getLocation()"&gt;Dene&lt;/button&gt;
&lt;div id="mapholder">&lt;/div&gt;
&lt;script&gt;
	var x=document.getElementById("demo");

	function getLocation(){
		if (navigator.geolocation){
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		}else{
			x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";
		}
	}

	function showPosition(position){
		var latlon=position.coords.latitude+","+position.coords.longitude;

		var img_url="http://maps.googleapis.com/maps/api/staticmap?center="
		+latlon+"&zoom=14&size=400x300&sensor=false";
		document.getElementById("mapholder").innerHTML="&lt;img src='"+img_url+"' /&gt;";
	}

	function showError(error){
		switch(error.code){
		case error.PERMISSION_DENIED:
			x.innerHTML="Kullanıcı Geolocation isteğini reddetti."
			break;
		case error.POSITION_UNAVAILABLE:
			x.innerHTML="Konum bilgileri kullanılamıyor."
			break;
		case error.TIMEOUT:
			x.innerHTML="Kullanıcı yerini almak için yapılan istek zaman aşımına uğradı."
			break;
		case error.UNKNOWN_ERROR:
			x.innerHTML="Bilinmeyen bir hata oluştu."
			break;
		}
	}
&lt;/script&gt;
                </code></pre>
                <p>Harita üzerinde gezinme ve zoom'u kullanmak için aşağıdaki script'i kullanabilirsiniz.</p>
                <p id="demo2">Lütfen butona tıklayınız:</p>  
				<button onclick="getLocation()">Dene</button>  
				<div id="mapholder2"></div>  
				<script src="http://maps.google.com/maps/api/js?sensor=false"></script>  
				<script>  
				var x=document.getElementById("demo2");  
				function getLocation()  
				  {  
				  if (navigator.geolocation)  
				    {  
				    navigator.geolocation.getCurrentPosition(showPosition,showError);  
				    }  
				  else{x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";}  
				  }  
				  
				function showPosition(position)  
				  {  
				  lat=position.coords.latitude;  
				  lon=position.coords.longitude;  
				  latlon=new google.maps.LatLng(lat, lon)  
				  mapholder=document.getElementById('mapholder2')  
				  mapholder.style.height='250px';  
				  mapholder.style.width='500px';  
				  
				  var myOptions={  
				  center:latlon,zoom:14,  
				  mapTypeId:google.maps.MapTypeId.ROADMAP,  
				  mapTypeControl:false,  
				  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}  
				  };  
				  var map=new google.maps.Map(document.getElementById("mapholder2"),myOptions);  
				  var marker=new google.maps.Marker({position:latlon,map:map,title:"Buradasın!"});  
				  }  
				  
				function showError(error){  
				  switch(error.code){  
				    case error.PERMISSION_DENIED:  
				      x.innerHTML="Kullanıcı Geolocation isteğini reddetti."  
				      break;  
				    case error.POSITION_UNAVAILABLE:  
				      x.innerHTML="Konum bilgileri kullanılamıyor."  
				      break;  
				    case error.TIMEOUT:  
				      x.innerHTML="Kullanıcı yerini almak için yapılan istek zaman aşımına uğradı."  
				      break;  
				    case error.UNKNOWN_ERROR:  
				      x.innerHTML="Bilinmeyen bir hata oluştu."  
				      break;  
				    }  
				}  
				</script>  
                <pre><code class="language-javascript">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;body&gt;
&lt;p id="demo"&gt;Lütfen butona tıklayınız:&lt;/p&gt;
&lt;button onclick="getLocation()"&gt;Dene&lt;/button&gt;
&lt;div id="mapholder"&gt;&lt;/div&gt;
&lt;script src="http://maps.google.com/maps/api/js?sensor=false"&gt;&lt;/script&gt;
&lt;script&gt;
	var x=document.getElementById("demo");

	function getLocation() {
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(showPosition,showError);
		}else{
			x.innerHTML="Tarayıcınız bu özelliği desteklemiyor.";
		}
	}

	function showPosition(position) {
		lat=position.coords.latitude;
		lon=position.coords.longitude;
		latlon=new google.maps.LatLng(lat, lon)
		mapholder=document.getElementById('mapholder')
		mapholder.style.height='250px';
		mapholder.style.width='500px';

		var myOptions={
			center:latlon,zoom:14,
			mapTypeId:google.maps.MapTypeId.ROADMAP,
			mapTypeControl:false,
			navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
		};
		var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
		var marker=new google.maps.Marker({position:latlon,map:map,title:"Buradasın!"});
	}

	function showError(error){
		switch(error.code){
		case error.PERMISSION_DENIED:
			x.innerHTML="Kullanıcı Geolocation isteğini reddetti."
			break;
		case error.POSITION_UNAVAILABLE:
			x.innerHTML="Konum bilgileri kullanılamıyor."
			break;
		case error.TIMEOUT:
			x.innerHTML="Kullanıcı yerini almak için yapılan istek zaman aşımına uğradı."
			break;
		case error.UNKNOWN_ERROR:
			x.innerHTML="Bilinmeyen bir hata oluştu."
			break;
		}
	}
&lt;/script&gt;
</body>
</html>
                </code></pre>              
                <h2>getCurrentPosition() Metodu - Dönen Veri (Return Data)</h2>
    			<table>
					<tbody>
						<tr>
						  <th>Özellik</th>
						  <th>Açıklama</th>
						</tr>
						<tr>
						  <td>coords.latitude</td>
						  <td>Ondalık sayı olarak enlemi verir.</td>
						</tr>
						<tr>
						  <td>coords.longitude</td>
						  <td>Ondalık sayı olarak boylamı verir.</td>
						</tr>
						<tr>
						  <td>coords.accuracy</td>
						  <td>Pozisyonun hassasiyetini/doğruluğunu verir.</td>
						</tr>
						<tr>
						  <td>coords.altitude</td>
						  <td>Deniz seviyesinden ortalama yüksekliği verir.</td>
						</tr>
						<tr>
						  <td>coords.altitudeAccuracy</td>
						  <td>Pozisyonun yükseklik hassasiyetini/doğruluğunu verir.</td>
						</tr>
						<tr>
						  <td>coords.heading</td>
						  <td>Kuzeye saat yönünde kaç derece olduğunu verir.</td>
						</tr>
						<tr>
						  <td>coords.speed</td>
						  <td>Saniyede ki hızı verir.</td>
						</tr>
						<tr>
						  <td>timestamp</td>
						  <td>Cevabın tarihini / saatini verir.</td>
						</tr>
					</tbody>
				</table>                  		
				<!-- #pages_content_tip_div -->
				<a href="/html5/index.php?page=webStorage" class="nextButton">Devam Et</a>
                <!-- #nextButton -->