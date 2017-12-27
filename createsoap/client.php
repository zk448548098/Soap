<?php
/**
 +------------------------------------------------------------------------------
 * HXPHP  
 +------------------------------------------------------------------------------
 * @HXPHP FramWork 
 * @Author ieliwb<ieliwb@gmail.com>
 * @Copyright (c) www.ieliwb.com
 +------------------------------------------------------------------------------
 */

//$client = new SoapClient(null,array('location'=>'http://localhost/createsoap/HelloWorld.class.php','uri'=>'http://localhost/createsoap/HelloWorld.class.php'));


$client = new SoapClient("http://127.0.0.1/createsoap/hello.wsdl");

try {
		$result = $client->serverTimestamp();
		var_dump($result);
		echo "The answer is result";
}
catch (SoapFault $f){
        echo "Error Message: {$f->getMessage()}";
}


?>