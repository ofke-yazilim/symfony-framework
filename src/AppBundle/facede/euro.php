<?php
namespace AppBundle\facede;

/**
 * Description of euro
 *
 * @author omerfaruk
 */
//euro işlemlerini gerçekleştiriyoruz
class euro{
    //Satış fiyatı en düşük 
    public function getSellingLow($_orm){
        $eurSelling = $_orm->createQueryBuilder('c')
            ->where('c.type = :t')
            ->setParameter('t', 'EUR')
            ->orderBy('c.selling', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
        
        return $eurSelling;
    }
    
    //Alış fiyatı en düşük 
    public function getBuyingLow($_orm){
        $eurBuying = $_orm->createQueryBuilder('c')
            ->where('c.type = :t')
            ->setParameter('t', 'EUR')
            ->orderBy('c.buying', 'ASC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
        
        return $eurBuying;
    }
}
