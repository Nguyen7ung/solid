<?php

class SumCalculatorOutputter {

    protected $result;

    public function __construct($result = array()) {
        $this->result = $result;
    }
    
    public function JSON (){
        $myJSON = json_encode($this->result);
        return "Data of JSON: ". $myJSON;
    }
    
    public function HAML (){
        
    }
    
    public function HTML (){
        
    }
    
    public function JADE (){
        
    }
     
}
