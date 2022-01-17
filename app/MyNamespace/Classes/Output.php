<?php
namespace MyNamespace\Classes;

class Output
{
	
	public function outputText(array $array){
		
		$implode_text = "";
		
		foreach($array as $i => $j){
			
			foreach($j as $v => $s){
			
				if($v == "departure"){
					$implode_text .= "From ";
				}
				
				if($v == "arrival"){
					$implode_text .= " to ";
				}
				
				if($v == "transport"){
					$implode_text .= " take ";
				}
				
				if($v == "gate" && $s !== ""){
					$implode_text .= ", ";
				}
				
				if($v == "seat" && $s !== ""){
					$implode_text .= ", ";
				}
				
				if($v == "baggage" && $s !== ""){
					$implode_text .= ", ";
				}
				
				if($s !== ""){
					$implode_text .= $s;
				}
				
				if($v == "baggage"){
					$implode_text .= ". <br />";
				}
				
			}
	
		}
		
		$implode_text .= "You have arrived at your final destination.";
		
		return $implode_text;
	
	}
}