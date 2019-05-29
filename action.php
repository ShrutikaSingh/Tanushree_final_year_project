<?php
$response = array(); 
if($_SERVER['REQUEST_METHOD']=='POST'){	
	//checking the required params 
	if(isset($_POST['patient']) and isset($_POST['var1']) and isset($_POST['var2'])) {

		$data = "" . $_POST['patient'] . "," . $_POST['var1'] . "," . $_POST['var2'] . "\n";
		$myfile =  fopen('data.csv', 'a');
		fwrite($myfile,$data);
		
		echo "Success";
	}
}
