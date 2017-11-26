<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

//Doctorin kullanılarak oluşturulan currancy entity yapısının saklandığı dosya çağrılıyor.
use AppBundle\Entity\currency;
use Symfony\Component\HttpFoundation\Response;

//facede class eklendi
use AppBundle\facede\facede;
use AppBundle\facede\euro;
use AppBundle\facede\dolar;
use AppBundle\facede\facedeRun;

class CurrancyController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('currancy/index.html.twig');
    }
    
    /**
     * @Route("/currancy/list", name="currancyList")
     */
    public function currancyAction(Request $request)
    {
        $_orm = $this->getDoctrine()
            ->getEntityManager()
            ->getRepository('AppBundle:currency');
        //Facede patterni çalıştırılıyor
        $facede = new facedeRun(new facede(new dolar(),new euro()));
        //en düşük dolar ve euro fiyatları alnıyor
        //$_data değeri 4 boyutlu bir array ile döner
        //$_data[0] => Satış fiayatına göre En düşük dolar verilerini tutar
        //$_data[1] => Alış fiyatına göre En düşün dolar verilerini tutar
        //$_data[2] => Satış fiayatına göre En düşük euro verilerini tutar
        //$_data[3] => Alış fiyatına göre En düşün euro verilerini tutar
        $_data = $facede->run($_orm);//Hesaplama başladı

       
        //Tüm veriler Alınıyor
        $currancies = $_orm
            ->createQueryBuilder('c')
            ->setMaxResults(6)
            ->orderBy('c.date', 'DESC')
            ->getQuery()
            ->getResult();


        if (!$currancies) {
            throw $this->createNotFoundException('Tablo boş!');
        }		
		
        return $this->render('currancy/currancyList.html.twig', 
                array ('curranciesUSDSelling' => $_data[0],
                       'curranciesEURSelling' => $_data[1],
                       'curranciesUSDBuying'  => $_data[2],
                       'curranciesEURBuying'  => $_data[3]
                      )
                );
    }
}
