<?php

class ıdariPersonel extends Personel{
    public $gorev;
    
    public function getAltPersoneller(){
        $personeller = array(
            'orhan Gencebay',
            'ferdi tayfur',
            'mahsun kirmizigul',
            'bulent serttaş',
            'müslüm gürses'
        );
        
        return array_rand($personeller,3);
    }
}