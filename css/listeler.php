                <h1>CSS Listeler - Lists</h1>
                <p>Sıralı veya Sırasız listelere ( ol - ul ) stil vermek için <strong>" list-style-type "</strong> özelliğini kullanacağız. Bu özellik için aşağıdaki değerleri kullanabiliriz. </p>
                <h2>CSS Sıralı Liste için Değerler ( Ol )</h2>  
                <table>
                    <tr>
                        <th style="width:30%">Değer</th>
                        <th style="width:70%">Açıklama</th>
                    </tr>
                    <tr>
                        <td>armenian</td>
                        <td>Geleneksel Ermeni Numaralandırması</td>
                    </tr>
                    <tr>
                        <td>decimal</td>
                        <td>Normal Numaralandırma</td>
                    </tr>
                    <tr>
                        <td>decimal-leading-zero</td>
                        <td>Sayının Önüne Sıfır Koyarak Artar. (01, 02, 03, vb.)</td>
                    </tr>
                    <tr>
                        <td>georgian</td>
                        <td>Geleneksel Gürcü Numaralandırması (an, ban, gan, vb.)</td>
                    </tr>
                    <tr>
                        <td>lower-alpha</td>
                        <td>Küçük Harflerden Oluşan Alfabe (a, b, c, d, e, vb.)</td>
                    </tr>
                    <tr>
                        <td>lower-greek</td>
                        <td>Küçük Harflerden Oluşan Yunan Alfabesi (alpha, beta, gamma, vb.)</td>
                    </tr>
                    <tr>
                        <td>lower-latin</td>
                        <td>Küçük Harflerden Oluşan Latin Alfabesi (a, b, c, d, e, vb.)</td>
                    </tr>
                    <tr>
                        <td>lower-roman</td>
                        <td>Küçük Harflerden Oluşan Roman Alfabesi (i, ii, iii, iv, v,vb.)</td>
                    </tr>
                    <tr>
                        <td>upper-alpha</td>
                        <td>Büyük Harflerden Oluşan Alfabe (A, B, C, D, E, vb.)</td>
                    </tr>
                    <tr>
                        <td>upper-latin</td>
                        <td>Büyük Harflerden Oluşan Latin Alfabesi (A, B, C, D, E, vb.)</td>
                    </tr>
                    <tr>
                        <td>upper-roman</td>
                        <td>Büyük Harflerden Oluşan Roman Alfabesi  (I, II, III, IV, V, vb.)</td>
                    </tr>
                </table>
                <p><strong>Örnek kullanımı görelim...</strong> </p>
                <pre><code class="language-css">
ul {
    list-style-type: lower-alpha;
}
                </code></pre>
                <!-- #CSS Sıralı Liste için Değerler -->
                <h2>CSS Sırasız Liste için Değerler ( Ul )</h2>
                <table>
                    <tr>
                        <th style="width:30%">Değer</th>
                        <th style="width:70%">Açıklama</th>
                    </tr>
                    <tr>
                        <td>none</td>
                        <td> Liste ikonunu kaldırır.</td>
                    </tr>
                    <tr>
                        <td>disc</td>
                        <td>Madde başlarında siyah yuvarlak ikon çıkarır. Varsayılan.</td>
                    </tr>
                    <tr>
                        <td>circle</td>
                        <td>Madde başlarında siyah yuvarlak içi boş ikon çıkarır.</td>
                    </tr>
                    <tr>
                        <td>square</td>
                        <td>Madde başlarında siyah kare ikon çıkarır.</td>
                    </tr>                
                </table>
                <p><strong>Örnek kullanımı görelim...</strong> </p>
                <pre><code class="language-css">
ul {
    list-style-type: circle;
}
                </code></pre>
                <!-- #CSS Sırasız Liste için Değerler -->
                <h2>CSS Listelere Madde Görseli Ekleme</h2>
                <p>Sırasız Liste ( Ul ) için verilen değerler yetersiz geldiyse <strong>"list-style-image "</strong> özelliği tam size göre. Bu özellik ile madde ikonunun yerine görsel kullanabilirsiniz. Örnek kodu görelim.</p>
                <pre><code class="language-css">
ul {
    list-style-image: url('ornek.jpg');
}
                </code></pre>
                <!-- #CSS Listelere Madde Görseli Ekleme -->
                <h2>CSS Liste Kısa Kod Kullanımı</h2>
                <p>Liste kodlarını yazarken bazı kodları kısaltabiliriz. Örneğin "list-style" yazıp diğer özellikleri arka arkaya bir boşluk bırakarak sıralayabiliriz ve url alanında ki tırnak işaretlerini kullanmayabiliriz.</p>
                <pre><code class="language-css">
ul {
    list-style: lower-alpha url('ornek.jpg');
}
                </code></pre>       
                <!-- #CSS Liste Kısa Kod Kullanımı -->
                <a href="/css/index.php?page=tablolar" class="nextButton">Devam Et</a>
                <!-- #nextButton -->