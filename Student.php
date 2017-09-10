<?php

class Student {

    //constructor
	function __construct() {
    	$this->surname = '';
   	 	$this->first_name = '';
    	$this->emails = array();
    	$this->grades = array();
	}

    //mutator methods
	function add_email($which,$address) {
    	$this->emails[$which] = $address;
	}

	function add_grade($grade) {
    	$this->grades[] = $grade;
	}

    //calculate a grades average
	function average() {
    	$total = 0;
    	foreach ($this->grades as $value)
        	$total += $value;
    	return $total / count($this->grades);
	}

    //add a text representation
	function toString() {
    	$result = $this->first_name . ' ' . $this->surname;
    	$result .= ' ('.$this->average().")\n";
    	foreach($this->emails as $which=>$what)
        	$result .= $which . ': '. $what. "\n";
    	$result .= "\n";
    	return '<pre>'.$result.'</pre>';
	}
}
?>