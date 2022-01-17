<!DOCTYPE html>
<html>
<body>
<?php 
require 'vendor/autoload.php';

use MyNamespace\Classes\Trip as Trip;
use MyNamespace\Classes\Output as Output;

$journey = new Trip();
$output = new Output();

$json_file = file_get_contents("boardingpass.json");
$decode = json_decode($json_file);

$shuffle_array = $journey->shuffleArray($decode);

$reorder_array = $journey->reorderPass($shuffle_array);

$output_text = $output->outputText($reorder_array);

echo $output_text;
?>
</body>
</html>
