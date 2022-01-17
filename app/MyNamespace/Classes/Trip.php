<?php
namespace MyNamespace\Classes;

class Trip
{

	public function shuffleArray(array $array)
	{
	  shuffle($array);
		
	  return $array;
	}
	
    private function switchArrayPositions(array $array, int $a, int $b): array
	{
	  //echo "<pre>";
	  //print_r($array[$a]);
	  //print_r($array[$b]);
	  //echo "</pre>";
	  //die();
	  $temp      = $array[$a];
	  $array[$a] = $array[$b];
	  $array[$b] = $temp;
	  
	  return $array;
	}
	
	public function reorderPass(array $array)
	{
		$count = count($array)-1;
		
		for ($a=0;$a<=$count;$a++) {
	
			for ($b=$a+1;$b<=$count;$b++) {
			
				if($array[$a]->arrival == $array[$b]->departure){
					
					$array = $this->switchArrayPositions($array, $a+1, $b);
					
				}
			
			}
			
		}
		
		return $array;
	
	}
}