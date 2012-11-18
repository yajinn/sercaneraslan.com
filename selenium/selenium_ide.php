				<h1>Selenium IDE Nedir ?</h1>
                <ul>
                    <li>Selenium IDE Firefox için geliştirilmiş bir eklentidir.</li>
                    <li>Selenium Web tabanlı uygulamaların testlerini browser/tarayıcı üzerinden yapmamızı sağlayan bir araçtır.</li>
                    <li>Tüm web testlerinin yapılabileceği açık kaynak kodlu bir test aracıdır (Veri tabanı bağlantısı ile yapılabilecek testler hariç).</li>
                    <li>Diğer test araçlarına göre daha fazla gelişmiştir.</li>
                </ul>
                <p>Selenium IDE ile Firefox'ta ki hareketlerimizi kayıt edebiliriz ve sonra ürettiğimiz test kodlarını otomatik testler için kullanabiliriz.</p>
                <p>Örneğin; www.deneme.com sayfasına gidilmesi, login olmak için gerekli linke tıklanması, login formunun doldurulması ve submit butonuna tıklanması aşağıdaki kodlardan oluşur:</p>
                <table>
                    <tr>
                        <th>Komut</th>
                        <th>Element</th>
                        <th>Değişken</th>
                    </tr>
                    <tr>
                        <td>open</td>
                        <td>http://www.deneme.com</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>clickAndWait</td>
                        <td>link=login</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>username</td>
                        <td>sercaneraslan</td>
                    </tr>
                    <tr>
                        <td>type</td>
                        <td>password</td>
                        <td>123456</td>
                    </tr>
                    <tr>
                        <td>clickAndWait</td>
                        <td>//button[@type=&#039;submit&#039;]</td>
                        <td></td>
                    </tr>
                </table>
                <!-- #table -->
				<div class="note"> 
					<p><strong>Not:</strong> Her zaman otomatik test yapmak iyi değildir, bazı önemli sayfaların manuel olarak test edilmesi daha uygundur. Ayrıca yazılan testler bir süre sonra sayfaların değişikliğe uğraması sebebiyle geçerliliğini yitirecektir o yüzden testlerin güncel tutulması önemlidir.</p>		
				</div>
                <a href="/selenium/index.php?page=kurulum" class="nextButton">Devam Et</a>
                <!-- #nextButton -->