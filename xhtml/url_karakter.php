                <h1>XHTML URL Karakterleri - URL Encode</h1>
                <h2>URL (Link) Nedir?</h2>
                <p>  Web adreslerinin resmi ismi <strong>URL</strong> 'dir. Açılımı ise <strong>( Uniform Resource Locator ) </strong>dır. Türkçesi ise  <strong>"Standart Kaynak Bulucu"</strong> anlamına gelmektedir. Bu adresler sayesinde aradığımız Web sayfalarını buluruz. Her Web sayfası kendine ait bir <strong>URL</strong> 'e sahiptir. Örneğin " http://www.sercaneraslan.com/index.php" bir URL'dir. URL üç bölümden oluşur; </p>
                <ul>
                    <li> <strong>Protokol</strong> ( http://, ftp://, news: vb. ) </li> 
                    <li> <strong>Alan adı</strong> ( protokolden sonra ki bölü işaretine kadar olan kısım; www.sercaneraslan.com gibi. ) </li>  
                    <li><strong>Dosya yolu</strong> ( ilk bölü işaretinden sonraki kısım. ) </li> 
                </ul>
                <!-- #URL (Link) Nedir? -->
                <h2>URL Karakterleri Nedir?</h2>
                <p> URL'ler, güvenllik sebebiyle güvenli karakterlere dönüştürülmektedir. URL'lerde sadece ASCII karakter seti kullanılabilmektedir. Örneğin, bir Web sayfasından bir link / URL aldınız ve sayfanızda paylaştınız sonra <a href="/xhtml/index.php?page=gecerli_kod">kodunuz geçerli mi</a> diye kontrol ettiniz ve  kodunuzda hatalar çıktığını gördünüz. İşte bu durumda kodunuzda hata veren karakteri güvenli karakter ile değiştirerek huzura kavuşabilirsiniz. </p>
                <table>
                    <tr>
                      <th>URL'de Hata Veren Karakter</th>
                      <th>Yerine Geçecek Kod</th>
                      <th>Açıklama</th>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td>&amp;#32;</td>
                      <td>boşluk</td>
                    </tr>
                    <tr>
                      <td>!</td>
                      <td>&amp;#33;</td>
                      <td>exclamation mark</td>
                    </tr>
                    <tr>
                      <td>&quot;</td>
                      <td>&amp;#34;</td>
                      <td>quotation mark</td>
                    </tr>
                    <tr>
                      <td>#</td>
                      <td>&amp;#35;</td>
                      <td>number sign</td>
                    </tr>
                    <tr>
                      <td>$</td>
                      <td>&amp;#36;</td>
                      <td>dollar sign</td>
                    </tr>
                    <tr>
                      <td>%</td>
                      <td>&amp;#37;</td>
                      <td>percent sign</td>
                    </tr>
                    <tr>
                      <td>&amp;</td>
                      <td>&amp;#38;</td>
                      <td>ampersand</td>
                    </tr>
                    <tr>
                      <td>'</td>
                      <td>&amp;#39;</td>
                      <td>apostrophe</td>
                    </tr>
                    <tr>
                      <td>(</td>
                      <td>&amp;#40;</td>
                      <td>left parenthesis</td>
                    </tr>
                    <tr>
                      <td>)</td>
                      <td>&amp;#41;</td>
                      <td>right parenthesis</td>
                    </tr>
                    <tr>
                      <td>*</td>
                      <td>&amp;#42;</td>
                      <td>asterisk</td>
                    </tr>
                    <tr>
                      <td>+</td>
                      <td>&amp;#43;</td>
                      <td>plus sign</td>
                    </tr>
                    <tr>
                      <td>,</td>
                      <td>&amp;#44;</td>
                      <td>comma</td>
                    </tr>
                    <tr>
                      <td>-</td>
                      <td>&amp;#45;</td>
                      <td>hyphen</td>
                    </tr>
                    <tr>
                      <td>.</td>
                      <td>&amp;#46;</td>
                      <td>period</td>
                    </tr>
                    <tr>
                      <td>/</td>
                      <td>&amp;#47;</td>
                      <td>slash</td>
                    </tr>
                    <tr>
                      <td>0</td>
                      <td>&amp;#48;</td>
                      <td>digit 0</td>
                    </tr>
                    <tr>
                      <td>1</td>
                      <td>&amp;#49;</td>
                      <td>digit 1</td>
                    </tr>
                    <tr>
                      <td>2</td>
                      <td>&amp;#50;</td>
                      <td>digit 2</td>
                    </tr>
                    <tr>
                      <td>3</td>
                      <td>&amp;#51;</td>
                      <td>digit 3</td>
                    </tr>
                    <tr>
                      <td>4</td>
                      <td>&amp;#52;</td>
                      <td>digit 4</td>
                    </tr>
                    <tr>
                      <td>5</td>
                      <td>&amp;#53;</td>
                      <td>digit 5</td>
                    </tr>
                    <tr>
                      <td>6</td>
                      <td>&amp;#54;</td>
                      <td>digit 6</td>
                    </tr>
                    <tr>
                      <td>7</td>
                      <td>&amp;#55;</td>
                      <td>digit 7</td>
                    </tr>
                    <tr>
                      <td>8</td>
                      <td>&amp;#56;</td>
                      <td>digit 8</td>
                    </tr>
                    <tr>
                      <td>9</td>
                      <td>&amp;#57;</td>
                      <td>digit 9</td>
                    </tr>
                    <tr>
                      <td>:</td>
                      <td>&amp;#58;</td>
                      <td>colon</td>
                    </tr>
                    <tr>
                      <td>;</td>
                      <td>&amp;#59;</td>
                      <td>semicolon</td>
                    </tr>
                    <tr>
                      <td>&lt;</td>
                      <td>&amp;#60;</td>
                      <td>less-than</td>
                    </tr>
                    <tr>
                      <td>&#61;</td>
                      <td>&amp;#61;</td>
                      <td>equals-to</td>
                    </tr>
                    <tr>
                      <td>&#62;</td>
                      <td>&amp;#62;</td>
                      <td>greater-than</td>
                    </tr>
                    <tr>
                      <td>?</td>
                      <td>&amp;#63;</td>
                      <td>question mark</td>
                    </tr>
                    <tr>
                      <td>@</td>
                      <td>&amp;#64;</td>
                      <td>at sign</td>
                    </tr>
                    <tr>
                      <td>A</td>
                      <td>&amp;#65;</td>
                      <td>uppercase A</td>
                    </tr>
                    <tr>
                      <td>B</td>
                      <td>&amp;#66;</td>
                      <td>uppercase B</td>
                    </tr>
                    <tr>
                      <td>C</td>
                      <td>&amp;#67;</td>
                      <td>uppercase C</td>
                    </tr>
                    <tr>
                      <td>D</td>
                      <td>&amp;#68;</td>
                      <td>uppercase D</td>
                    </tr>
                    <tr>
                      <td>E</td>
                      <td>&amp;#69;</td>
                      <td>uppercase E</td>
                    </tr>
                    <tr>
                      <td>F</td>
                      <td>&amp;#70;</td>
                      <td>uppercase F</td>
                    </tr>
                    <tr>
                      <td>G</td>
                      <td>&amp;#71;</td>
                      <td>uppercase G</td>
                    </tr>
                    <tr>
                      <td>H</td>
                      <td>&amp;#72;</td>
                      <td>uppercase H</td>
                    </tr>
                    <tr>
                      <td>I</td>
                      <td>&amp;#73;</td>
                      <td>uppercase I</td>
                    </tr>
                    <tr>
                      <td>J</td>
                      <td>&amp;#74;</td>
                      <td>uppercase J</td>
                    </tr>
                    <tr>
                      <td>K</td>
                      <td>&amp;#75;</td>
                      <td>uppercase K</td>
                    </tr>
                    <tr>
                      <td>L</td>
                      <td>&amp;#76;</td>
                      <td>uppercase L</td>
                    </tr>
                    <tr>
                      <td>M</td>
                      <td>&amp;#77;</td>
                      <td>uppercase M</td>
                    </tr>
                    <tr>
                      <td>N</td>
                      <td>&amp;#78;</td>
                      <td>uppercase N</td>
                    </tr>
                    <tr>
                      <td>O</td>
                      <td>&amp;#79;</td>
                      <td>uppercase O</td>
                    </tr>
                    <tr>
                      <td>P</td>
                      <td>&amp;#80;</td>
                      <td>uppercase P</td>
                    </tr>
                    <tr>
                      <td>Q</td>
                      <td>&amp;#81;</td>
                      <td>uppercase Q</td>
                    </tr>
                    <tr>
                      <td>R</td>
                      <td>&amp;#82;</td>
                      <td>uppercase R</td>
                    </tr>
                    <tr>
                      <td>S</td>
                      <td>&amp;#83;</td>
                      <td>uppercase S</td>
                    </tr>
                    <tr>
                      <td>T</td>
                      <td>&amp;#84;</td>
                      <td>uppercase T</td>
                    </tr>
                    <tr>
                      <td>U</td>
                      <td>&amp;#85;</td>
                      <td>uppercase U</td>
                    </tr>
                    <tr>
                      <td>V</td>
                      <td>&amp;#86;</td>
                      <td>uppercase V</td>
                    </tr>
                    <tr>
                      <td>W</td>
                      <td>&amp;#87;</td>
                      <td>uppercase W</td>
                    </tr>
                    <tr>
                      <td>X</td>
                      <td>&amp;#88;</td>
                      <td>uppercase X</td>
                    </tr>
                    <tr>
                      <td>Y</td>
                      <td>&amp;#89;</td>
                      <td>uppercase Y</td>
                    </tr>
                    <tr>
                      <td>Z</td>
                      <td>&amp;#90;</td>
                      <td>uppercase Z</td>
                    </tr>
                    <tr>
                      <td>[</td>
                      <td>&amp;#91;</td>
                      <td>left square bracket</td>
                    </tr>
                    <tr>
                      <td>\</td>
                      <td>&amp;#92;</td>
                      <td>backslash</td>
                    </tr>
                    <tr>
                      <td>]</td>
                      <td>&amp;#93;</td>
                      <td>right square bracket</td>
                    </tr>
                    <tr>
                      <td>^</td>
                      <td>&amp;#94;</td>
                      <td>caret</td>
                    </tr>
                    <tr>
                      <td>_</td>
                      <td>&amp;#95;</td>
                      <td>underscore</td>
                    </tr>
                    <tr>
                      <td>`</td>
                      <td>&amp;#96;</td>
                      <td>grave accent</td>
                    </tr>
                    <tr>
                      <td>a</td>
                      <td>&amp;#97;</td>
                      <td>lowercase a</td>
                    </tr>
                    <tr>
                      <td>b</td>
                      <td>&amp;#98;</td>
                      <td>lowercase b</td>
                    </tr>
                    <tr>
                      <td>c</td>
                      <td>&amp;#99;</td>
                      <td>lowercase c</td>
                    </tr>
                    <tr>
                      <td>d</td>
                      <td>&amp;#100;</td>
                      <td>lowercase d</td>
                    </tr>
                    <tr>
                      <td>e</td>
                      <td>&amp;#101;</td>
                      <td>lowercase e</td>
                    </tr>
                    <tr>
                      <td>f</td>
                      <td>&amp;#102;</td>
                      <td>lowercase f</td>
                    </tr>
                    <tr>
                      <td>g</td>
                      <td>&amp;#103;</td>
                      <td>lowercase g</td>
                    </tr>
                    <tr>
                      <td>h</td>
                      <td>&amp;#104;</td>
                      <td>lowercase h</td>
                    </tr>
                    <tr>
                      <td>i</td>
                      <td>&amp;#105;</td>
                      <td>lowercase i</td>
                    </tr>
                    <tr>
                      <td>j</td>
                      <td>&amp;#106;</td>
                      <td>lowercase j</td>
                    </tr>
                    <tr>
                      <td>k</td>
                      <td>&amp;#107;</td>
                      <td>lowercase k</td>
                    </tr>
                    <tr>
                      <td>l</td>
                      <td>&amp;#108;</td>
                      <td>lowercase l</td>
                    </tr>
                    <tr>
                      <td>m</td>
                      <td>&amp;#109;</td>
                      <td>lowercase m</td>
                    </tr>
                    <tr>
                      <td>n</td>
                      <td>&amp;#110;</td>
                      <td>lowercase n</td>
                    </tr>
                    <tr>
                      <td>o</td>
                      <td>&amp;#111;</td>
                      <td>lowercase o</td>
                    </tr>
                    <tr>
                      <td>p</td>
                      <td>&amp;#112;</td>
                      <td>lowercase p</td>
                    </tr>
                    <tr>
                      <td>q</td>
                      <td>&amp;#113;</td>
                      <td>lowercase q</td>
                    </tr>
                    <tr>
                      <td>r</td>
                      <td>&amp;#114;</td>
                      <td>lowercase r</td>
                    </tr>
                    <tr>
                      <td>s</td>
                      <td>&amp;#115;</td>
                      <td>lowercase s</td>
                    </tr>
                    <tr>
                      <td>t</td>
                      <td>&amp;#116;</td>
                      <td>lowercase t</td>
                    </tr>
                    <tr>
                      <td>u</td>
                      <td>&amp;#117;</td>
                      <td>lowercase u</td>
                    </tr>
                    <tr>
                      <td>v</td>
                      <td>&amp;#118;</td>
                      <td>lowercase v</td>
                    </tr>
                    <tr>
                      <td>w</td>
                      <td>&amp;#119;</td>
                      <td>lowercase w</td>
                    </tr>
                    <tr>
                      <td>x</td>
                      <td>&amp;#120;</td>
                      <td>lowercase x</td>
                    </tr>
                    <tr>
                      <td>y</td>
                      <td>&amp;#121;</td>
                      <td>lowercase y</td>
                    </tr>
                    <tr>
                      <td>z</td>
                      <td>&amp;#122;</td>
                      <td>lowercase z</td>
                    </tr>
                    <tr>
                      <td>{</td>
                      <td>&amp;#123;</td>
                      <td>left curly brace</td>
                    </tr>
                    <tr>
                      <td>|</td>
                      <td>&amp;#124;</td>
                      <td>vertical bar</td>
                    </tr>
                    <tr>
                      <td>}</td>
                      <td>&amp;#125;</td>
                      <td>right curly brace</td>
                    </tr>
                    <tr>
                      <td>~</td>
                      <td>&amp;#126;</td>
                      <td>tilde</td>
                    </tr>
                </table>
                <!-- #URL Karakterleri Nedir? -->   
                <a href="/xhtml/index.php?page=head" class="nextButton">Devam Et</a>                
                <!-- #nextButton -->