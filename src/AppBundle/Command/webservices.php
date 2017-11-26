<?php
namespace AppBundle\Command;
/**
 * Description of webservices
 *
 * @author omerfaruk
 */
class webservices {
    public function __construct() {
        // Your Code here //
    }
    
    //İMKB web xml işlmleri yapılacak
    public function tcmbData() {
        //Günlük kur bilgileri alınıyor
        $xml = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
        $currency = array();
        foreach ($xml->Currency as $Currency) {
            // USD ALIŞ-SATIŞ
            if ($Currency['Kod'] == "USD") {
                $currency["USD"]['SEL'] = $usd_DS = $Currency->BanknoteSelling;
                $currency["USD"]['BUY'] = $usd_DA = $Currency->BanknoteBuying;
            }
            // EURO ALIŞ-SATIŞ
            if ($Currency['Kod'] == "EUR") {
                $currency["EUR"]['SEL'] = $eur_DS = $Currency->BanknoteSelling;
                $currency["EUR"]['BUY'] = $eur_DA = $Currency->BanknoteBuying;
            }
        }

        //Kur bilgileri döndürülüyor
        return $currency;
    }
    
    //doviz.com verileri işleniyor
    public function dovizcomData() {
        $content = file_get_contents("https://www.doviz.com/api/v1/currencies/all/latest"); //json içerik alınıyor
        $decode  = json_decode($content, true); /* eğer buradaki true yazan yer false yapılırsa veya tamamen kaldırılırsa nesne olarak işlem yapılabilir. */
        $currency = array();
        foreach ($decode as $Currency) {            
            // USD ALIŞ-SATIŞ
            if($Currency['code'] == "USD") {
                $currency["USD"]['SEL'] = $usd_DS = $Currency['selling'];
                $currency["USD"]['BUY'] = $usd_DA = $Currency['buying'];
            }
            // EURO ALIŞ-SATIŞ
            if ($Currency['code'] == "EUR") {
                $currency["EUR"]['SEL'] = $eur_DS = $Currency['selling'];
                $currency["EUR"]['BUY'] = $eur_DA = $Currency['buying'];
            }
        }
        return $currency;
    }
    
    //Deneme uygulamsı dikkate alma
    public function denemeData() {
        return "denemedir";
    }
}

//kullanımları
//$serviceTcmb = new tcmbAdapter(new webservices());
//var_dump($serviceTcmb->getData());
//
//$serviceDovizcom = new dovizcomAdapter(new webservices());
//var_dump($serviceDovizcom->getData());
