<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Command;
use AppBundle\Command\webservices;
use AppBundle\Command\serviceAdapter;
/**
 * Description of denemeAdapter
 *
 * @author omerfaruk
 */
class denemeAdapter implements serviceAdapter {
     
    private $service;
 
    public function __construct(webservices $service) {
        $this->service = $service;
    }
     
    public function getData(){
        return $this->service->denemeData();
    }

}