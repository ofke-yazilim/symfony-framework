<?php
/**
 * Description of facede
 *
 * @author omerfaruk
 */
namespace AppBundle\facede;
use AppBundle\facede\dolar;
use AppBundle\facede\euro;

class facede {
    protected  $dolar;
    protected  $euro;
    
    public function __construct(dolar $dolar,euro $euro){
        $this->dolar = $dolar;
        $this->euro  = $euro;
    }
    
    public function call($_orm){
        //Fonksiyonlar çağrılıyor
        $_data[] =  $this->dolar->getBuyingLow($_orm);
        $_data[] =  $this->dolar->getSellingLow($_orm);
        $_data[] =  $this->euro->getBuyingLow($_orm);
        $_data[] =  $this->euro->getSellingLow($_orm);
		
        return $_data;
    }
}
