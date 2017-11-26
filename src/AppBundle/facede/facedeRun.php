<?php
namespace AppBundle\facede;
use AppBundle\facede\facede;
/**
 * Description of facedeRun
 *
 * @author omerfaruk
 */
class facedeRun{

    protected $facade;

    public function __construct(facede $facade) {
        $this->facade = $facade;
    }

    public function run($_orm) {
        return $this->facade->call($_orm);
    }
}