<?php
// src/AppBundle/Command/CreateCurrancyCommand.php
namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use AppBundle\Entity\currency;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;

//Adapter sınıfları kullanılmak için ekleniyor
use AppBundle\Command\webservices;
use AppBundle\Command\denemeAdapter;
use AppBundle\Command\tcmbAdapter;
use AppBundle\Command\dovizcomAdapter;

class CreateCurrancyCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
        ->setName('app:create-currency')
        ->setDescription('Kur Bilgileri Yazıldı.')
        ->setHelp('Kur Bilgilerinin yazılmasını sağlar...');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
       
        //Deneme kullanımı için dikkate almayın
        $deneme = new denemeAdapter(new webservices());
        echo $deneme->getData();
        
        //ORM
        $doctrine = $this->getContainer()->get('doctrine');
        $em = $doctrine->getManager();
        
        //Merkez bankası kur bilgileri alınmak için $tcmb nesnemiz oluşturuluyor.
        $tcmb     = new tcmbAdapter(new webservices());
        $tcmbData = $tcmb->getData();//merkez bankası kur bilgileri api üzerinden array olarak alınıyor.
        
        //Merkez bankasından alınan kur bilgileri database üzerine ekleniyor.
        foreach ($tcmbData as $key=>$value) {
            $currency = new currency();
            if($key=="USD"){echo $key;
                $currency ->setType("USD"); //Hangi para
                $currency ->setSelling($value['SEL'][0]);//Alış Tutarı Ekleniyor.
                $currency ->setBuying($value['BUY'][0]);//Satış Tutarı Ekleniyor.
                $currency ->setLocation(1);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
                $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi
                
            } elseif($key=="EUR"){echo $key;
                $currency ->setType("EUR"); //Hangi para türü
                $currency ->setSelling($value['SEL'][0]);//Alış Tutarı Ekleniyor.
                $currency ->setBuying($value['BUY'][0]);//Satış Tutarı Ekleniyor.
                $currency ->setLocation(1);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
                $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi
 
            }
                            
            // Sonuç olarak ürün kaydı yapmak istediğinizi Doctrine'e bildirme (Henüz bir sorgulama (query) yapılmadı)
            $em->persist($currency);
                
        }
        //Sorgulamayı gerçekleştirme
        $em->flush();

        //Merkez bankası kur bilgileri alınmak için $tcmb nesnemiz oluşturuluyor.
        $dovizcom     = new dovizcomAdapter(new webservices());
        $dovizcomData = $dovizcom->getData();//merkez bankası kur bilgileri api üzerinden array olarak alınıyor.
        
        //doviz.com kur bilgileri ekleniyor
        foreach ($dovizcomData as $key=>$value) {
            $currency = new currency();
            if($key=="USD"){
                $currency ->setType("USD"); //Hangi para
                $currency ->setSelling($value['SEL']);//Alış Tutarı Ekleniyor.
                $currency ->setBuying($value['BUY']);//Satış Tutarı Ekleniyor.
                $currency ->setLocation(2);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
                $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi

            } elseif($key=="EUR"){
                $currency ->setType("EUR"); //Hangi para türü
                $currency ->setSelling($value['SEL']);//Alış Tutarı Ekleniyor.
                $currency ->setBuying($value['BUY']);//Satış Tutarı Ekleniyor.
                $currency ->setLocation(2);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
                $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi

            }
           
            // Sonuç olarak ürün kaydı yapmak istediğinizi Doctrine'e bildirme (Henüz bir sorgulama (query) yapılmadı)
            $em->persist($currency);
        }
        //Sorgulamayı gerçekleştirme
        $em->flush();
        
        $content       = file_get_contents("http://www.doviz.gen.tr/doviz_json.asp"); //json içerik alınıyor
        $doviznetData  = json_decode($content, true); /* eğer buradaki true yazan yer false yapılırsa veya tamamen kaldırılırsa nesne olarak işlem yapılabilir. */
        
        //Doviz.net dolar bilgileri ekleniyor
        $currency = new currency();
        $currency ->setType("USD"); //Hangi para türü
        $currency ->setSelling($doviznetData['dolar']);//Alış Tutarı Ekleniyor.
        $currency ->setBuying($doviznetData['dolar2']);//Satış Tutarı Ekleniyor.
        $currency ->setLocation(3);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
        $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi
        
        // Sonuç olarak ürün kaydı yapmak istediğinizi Doctrine'e bildirme (Henüz bir sorgulama (query) yapılmadı)
        $em->persist($currency);
        
        //Doviz.net euro bilgileri ekleniyor
        $currency = new currency();
        $currency ->setType("EUR"); //Hangi para türü
        $currency ->setSelling($doviznetData['euro']);//Alış Tutarı Ekleniyor.
        $currency ->setBuying($doviznetData['euro2']);//Satış Tutarı Ekleniyor.
        $currency ->setLocation(3);//Hangi web servis üzerinden gönderilmiş. 1 TCMB xml 2 doviz.com 3 doviz.net
        $currency ->setDate(new \DateTime(date("Y-m-d")));//Eklenme tarihi
        
        // Sonuç olarak ürün kaydı yapmak istediğinizi Doctrine'e bildirme (Henüz bir sorgulama (query) yapılmadı)
        $em->persist($currency);
        
        //Sorgulamayı gerçekleştirme
        $em->flush();

    }
}