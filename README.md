# symfony-framework
Örnek Bir Symfony Projesi

<h4>1- Uygulama Hakkında.</h4>
Bu uygulama Symfony 2.8 üzerinde netbeans derleyicisi kullanılarak hazırlanmıştır. Uygulama üzerinde local windows makinası üzerine Wamp server kurularak çalışılmıştır.
Uygulama Türkiye Cumhuriyeti Merkez Bankası, doviz.com ve doviz.net üzerinden xml ya da json olarak alınan kur bilgilerinin
adapter patterni ile işlendikten sonra command console uygulaması ve doctrine kullanılarak veritabanına yazılması ve sonrasında facede patterni kullanılarak  alış ve satış tutarına göre en düşük tutarların hesaplanarak kullanıcı arayüz kısmında listelenmesinden oluşmuştur.

<h4>2- XML ya da Json Verilerin Adapter Pattern ile İşlenmesi.</h4>
Yukarıda bulunan proje dosyalarından https://github.com/ofke-yazilim/symfony-framework/tree/master/src/AppBundle/Command yolunu takip ederseniz 
kur bilgilerini içeren xml ya da json verilerin işlendiği sınıflara ulaşabilirsiniz. Burada bulunan class dosyalarının gerçeklediği işlemler aşağıda 
listelenmiştir.(Not : doviz.net verileri adapter pattern ile işlenmemiştir. Command console uygulaması yazılırken direk olarak dahil edilmiştir.)
<br><br>
<ul>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/serviceAdapter.php : Bu dosya interface içerir. 
    İnterface ise diğer adapter classlar üzerinde kullanacağımız fonksiyonu barındırır.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/webservices.php : Bu dosya verilerin işlenerek array olarak oluşmasını sağlayan adapter classımızı içerir.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/tcmbAdapter.php : Bu dosya tcmb üzerinden gelen kur bilgilerininin webservices.php içerisinde 
    hangi fonksiyon kullanılarak array olarak oluşturulacağını belirtir.</li>
<li>https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/dovizcomAdapter.php : Bu dosya doviz.com üzerinden gelen kur bilgilerininin webservices.php içerisinde 
    hangi fonksiyon kullanılarak array olarak oluşturulacağını belirtir.</li>
</ul>

<h4>3- Veritabanı ve Console Command İşlemleri.</h4>
Adapter pattern kullanarak işlediğim ve array olarak almış olduğum verileri, oluşturduğum currancy veritabanı üzerindeki currency
tablosu üzerine ekledim. Bu ekleme işlemini console command kullanarak yaptım. Yazmış olduğum console command kodlarına https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Command/CreateCurrancyCommand.php
adresini tıklayarak ulaşabilirsiniz. Currency entity sınıfına ise https://github.com/ofke-yazilim/symfony-framework/blob/master/src/AppBundle/Entity/currency.php tıklayarak ulaşabilirsiniz.
Yazmış olduğum console command uygulamasına <strong>create-currency</strong> ismini verdim bu uygulamayı çalıştırmak console ekranında projenin bulunduğu dosya yoluna gidilerek 
<strong>php app/console app:create-currency</strong> yazmamız yeterli olacaktır. Bu sayede xml ya da json üzerinden array olarak alınan veriler veritabanı üzerine kayıt edilir.
Veri Tabanı İçeriğini : https://github.com/ofke-yazilim/symfony-framework/blob/master/currancy.sql adresinden inceleyebilirsiniz.

<h4>4- Kullanıcı Arayüz Ayaları.</h4>
app/config/routing.yml içerisinde kurların <strong>your-domain-adres/currancy/list</strong> adresinde listelenmesini sağlamak ve 
<strong>src/Controller/CurrancyController.php</strong> controller sınıfının içerisinde bulunan <strong>currancyAction</strong> fonksiyonunun kulanılmasının sağlanması için 
gerekli tanımlar yapıldı. İncelemek için : https://github.com/ofke-yazilim/symfony-framework/blob/master/app/config/routing.yml adresini tıklayın.

Kullanıcı arayüz kısmında kullanılan verilerin veritabanı üzerinde çekilesi işlemleri ise Facede Patterni kullanılarak yapıldı. Facede sınıflarına ulaşmak ve 
incelemek için https://github.com/ofke-yazilim/symfony-framework/tree/master/src/AppBundle/facede adresini tıklayabilirsiniz.
