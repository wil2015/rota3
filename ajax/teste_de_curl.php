<?php
// include Database connection file


$adminUrl='http://ec2-54-82-174-123.compute-1.amazonaws.com/index.php/rest/V1/integration/admin/token';
$adminUrl='http://localhost/magento/index.php/rest/V1/integration/admin/token';

$ch = curl_init();
$data = array("username" => "wproduto", "password" => "produto-0001");                                                                    
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
echo 'porra = ' . $token; 
$token =  json_decode($token);  
var_dump($token); 
//Use above token into header




$peso  = 66669;
$valor = 123;
$descricao = 'erer';
$sku = 'Arroz - t0001 - vprimavera';
$sku = "Arroz-t0001-vprimavera";

    $productData = array(
   /*    'sku'               => $sku , */  
        'price'             => $valor,
        'weight'            => $peso,
   /*  'description'       => $descricao, */  
         'custom_attributes' => array(
            array( 'attribute_code' => 'description', 'value' => $descricao ),
         	array( 'attribute_code' => 'short_description', 'value' => 'Simple  Short Description' )
            ) 
    );

    $productData = json_encode(array('product' => $productData));

    switch (json_last_error()) {
            default:
                break;
            case JSON_ERROR_DEPTH:
                echo 'Maximum stack depth exceeded';
            break;
            case JSON_ERROR_STATE_MISMATCH:
                echo 'Underflow or the modes mismatch';
            break;
            case JSON_ERROR_CTRL_CHAR:
                echo 'Unexpected control character found';
            break;
            case JSON_ERROR_SYNTAX:
                echo 'Syntax error, malformed JSON';
            break;
            case JSON_ERROR_UTF8:
                echo 'Malformed UTF-8 characters, possibly incorrectly encoded';
            break;
        };


    $setHaders = array('Content-Type:application/json','Authorization:Bearer '.$token);

    $requestURL = "http://ec2-54-82-174-123.compute-1.amazonaws.com/index.php/rest/V1/products";
    $requestURL = "http://127.0.0.1/magento/index.php/rest/V1/products";
    
    $requestURL =  $requestURL . '/' . $sku;
    
    echo '<br>';
    echo 'solicitacao = ' . $requestURL;

  /*  $requestURL =  $requestURL . '/' . $row['sku']; */
  

    $ch = curl_init();      
    curl_setopt($ch,CURLOPT_URL, $requestURL);

    curl_setopt($ch,CURLOPT_POSTFIELDS, $productData);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $setHaders);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    $info = curl_getinfo($ch);
    $result=  json_decode($result, true);

    if ($info['http_code'] == 200) {
        var_dump($result);
    }
    else    {
        echo 'erroUUUU = ' . $result['message'] . ' restorn = ' . $info['http_code'];
        var_dump($result);
    };
  /*  if(curl_exec($ch)===false){
        echo "Curl error: " . curl_error($ch)."\n";
    }else{
        $response = curl_exec($ch) ?: "";
    }*/
    curl_close($ch);
