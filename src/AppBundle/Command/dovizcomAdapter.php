<?php
namespace AppBundle\Command;
use AppBundle\Command\webservices;
use AppBundle\Command\serviceAdapter;

/**
 * Description of dovizcomAdapter
 *
 * @author Lenovo
 */
//Doviz.com class
class dovizcomAdapter implements serviceAdapter {
     
    private $service;
 
    public function __construct(webservices $service) {
        $this->service = $service;
    }
     
    public function getData(){
        return $this->service->dovizcomData();
    }

}