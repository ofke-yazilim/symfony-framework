# symfony-framework
Örnek Bir Symfony Projesi

<h4>1- Uygulama Hakkında.</h4>
Bu uygulama Symfony 2.8 üzerinde netbeans derleyicisi kullanılarak hazırlanmıştır.<br>
Uygulama Türkiye Cumhuriyeti Merkez Bankası, doviz.com ve doviz.net üzerinden xml ya da json olarak alınan kur bilgilerinin<br>
adapter patterni ile işlendikten sonra command console uygulaması ve doctrine kullanılarak veritabanına yazılması ve sonrasında facede patterni kullanılarak  alış ve satış tutarına göre en düşük tutarların hesaplanarak kullanıcı arayüz kısmında listelenmesinden oluşmuştur.

<h4>2- XML ya da Json Verilerin Adapter Pattern ile İşlenmesi.</h4>
Yukarıda bulunan proje dosyalarından https://github.com/ofke-yazilim/symfony-framework/tree/master/src/AppBundle/Command yolunu takip ederseniz 
kur bilgilerini içeren xml ya da json verilerin işlendiği sınıflara ulaşabilirsiniz. Burada bulunan class dosyalarının gerçeklediği işlemler aşağıda 
listelenmiştir.
<br>
<ul>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/serviceAdapter.php : Bu dosya interface içerir. 
    İnterface ise diğer adapter classlar üzerinde kullanacağımız fonksiyonu barındırır.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/webservices.php : Bu dosya verilerin işlenerek array olarak oluşmasını sağlayan adapter classımızı içerir.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/tcmbAdapter.php : Bu dosya tcmb üzerinden gelen kur bilgilerininin webservices.php içerisinde 
    hangi fonksiyon kullanılarak array olarak oluşturulacağını belirtir.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/dovizcomAdapter.php : Bu dosya doviz.com üzerinden gelen kur bilgilerininin webservices.php içerisinde 
    hangi fonksiyon kullanılarak array olarak oluşturulacağını belirtir.</li>
</ul>