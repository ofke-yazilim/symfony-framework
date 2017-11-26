<?php
namespace AppBundle\Command;
use AppBundle\Command\webservices;
use AppBundle\Command\serviceAdapter;

/**
 * Description of tcmbAdapter
 *
 * @author omerfaruk
 */

//tcmb class
class tcmbAdapter implements serviceAdapter {
     
    private $service;
 
    public function __construct(webservices $service) {
        $this->service = $service;
    }
     
    public function getData(){
        return $this->service->tcmbData();
    }

}

