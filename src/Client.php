<?php

class Client{

    private $key;
    private $url;


    function __construct($apikey, $baseurl = 'https://steamladder.com/api/v1/'){
        $this->key = $apikey;
        $this->url = $baseurl;
    }


    private function get($type,$parametar, $optional = NULL){
        $options = [
            'http' => [
                'method' => 'GET',
                'header' => 'Authorization: Token '.$this->key.'',   
            ]
        ]; 
        $context = stream_context_create($options);
        
        return $file = file_get_contents((($this->url).$type.'/'.$parametar.'/'), false, $context);

    }

    private function post($type,$parametar){
        $options = [
            'http' => [
                'method' => 'POST',
                'header' => 'Authorization: Token '.$this->key.'',   
            ]
        ]; 
        $context = stream_context_create($options);

        return $file = file_get_contents((($this->url).$type.'/'.$parametar), false, $context);
    }

    public function getProfile($steamid64){
        return $this->get('profile', $steamid64);
    }

    public function updateProfile($steamid64){
        return $this->post('profile', $steamid64);
    }

    public function getLadder($type, $regionOrCountry = ''){
        // Case sensitive so this need to be lowecase
        if($regionOrCountry != '')
            return $this->get('ladder', (@strtolower($type).'/'.@strtolower($regionOrCountry)));
        
        return $this->get('ladder', @strtolower($type));     
    }
        

}
