<?php
namespace AppBundle\facede;

/**
 * Description of dolar
 *
 * @author omerfaruk
 */
//Dolar hesaplamaları yapılmaktadır
class dolar{   
    //Satış fiyatı en düşük 
    public function getSellingLow($_orm){
        $usdSelling = $_orm->createQueryBuilder('c')
            ->where('c.type = :t')
            ->setParameter('t', 'USD')
            ->orderBy('c.selling', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
        
        return $usdSelling;
    }
    
    //Alış fiyatı en düşük 
    public function getBuyingLow($_orm){
        $usdBuying = $_orm->createQueryBuilder('c')
            ->where('c.type = :t')
            ->setParameter('t', 'USD')
            ->orderBy('c.buying', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
        
        return $usdBuying;
    }
}