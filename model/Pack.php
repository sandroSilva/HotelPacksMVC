<?php

class Pack {
	public $title_pack;
	public $date_pack;
	public $amount_pack;
	
	public function __construct($title_pack, $date_pack, $amount_pack) {  
        $this->title_pack = $title_pack;
	    $this->date_pack = $date_pack;
	    $this->amount_pack = $amount_pack;
    } 
}

?>