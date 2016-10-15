<?php

$adminUrl='http://127.0.0.1/magento/index.php/rest/V1/integration/admin/token';

//$adminUrl= 'http://ec2-54-209-29-39.compute-1.amazonaws.com/index.php/rest/V1/integration/admin/token';
$ch = curl_init();
$data = array("username" => "wproduto2", "password" => "produto-0001");                                                                    
$data_string = json_encode($data);                       
$ch = curl_init($adminUrl); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");                                                                     
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);                                                                      
curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
    'Content-Type: application/json',                                                                                
    'Content-Length: ' . strlen($data_string))                                                                       
);       
$token = curl_exec($ch);
$info = curl_getinfo($ch);
if ($info['http_code'] != 200) {
	$escreve = fwrite($fp, $token);
	echo $info['http_code'] . "\n";
	echo "erro de torken \n";
	exit($token);
};


$token =  json_decode($token); 
echo var_dump($token);
$setHaders = array('Content-Type:application/json','Authorization:Bearer '.$token);

?>
