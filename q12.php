<?php
   
class megicmethod {
    function __construct() {
        echo "This is the construct magic method";
    }
}
 
// Creating object of Magic method class
$obj = new MagicMethod();
    
?>

<?php

class MagicMethod {
	function __destruct() {
		echo "This destruct magic method "
		+ "gets called when object destroys";
	}
}

$obj = new MagicMethod();

?>