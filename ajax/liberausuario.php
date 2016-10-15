<?php

// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
 include("db_connection.php");
 $user_id = $_POST['id'];
 echo "\n" . $user_id;
$query = "select sku from visao_produto where chave_produto = " . $user_id;
$query = "select sku, categoria_filha from visao_produto a, visao_categoria b where a.chave_produto =  b.chave_produto and a.chave_produto = " . $user_id;
	if (!$result = mysqli_query($conexao, $query)) {
        exit(mysqli_error($conexao));
    }
    $row = mysqli_fetch_assoc($result);

    // get user id
   

   //Authentication rest API magento2.Please change url accordingly your url
include("token1.php");  

$requestUrl='http://ec2-54-209-29-39.compute-1.amazonaws.com/index.php/rest/vfasol/V1/products/';
/*
 $requestUrl='http://127.0.0.1/magento/index.php/rest/V1/products/';
$requestUrl= 'http://' . $_SERVER['SERVER_NAME'] . '/index.php/rest/V1/products/';

$requestUrl='http://127.0.0.1/magento/index.php/rest/V1/products/';
*/
//$requestUrl='http://127.0.0.1/magento/index.php/rest/V1/products/';

$requestUrl = $requestUrl .$row['sku'];
$form_categoria = $row['categoria_filha'];

$productData = array(
   
   
    'status'             => 1,
    'visibility'         => 4,
    'custom_attributes' => array(
        array( 'attribute_code' => 'category_ids', 'value' => $form_categoria )
        
        )
      
);

    $productData = json_encode(array('product' => $productData));

    switch (json_last_error()) {
            default:
                break;
            case JSON_ERROR_DEPTH:
                exit('Maximum stack depth exceeded');
            break;
            case JSON_ERROR_STATE_MISMATCH:
                exit ('Underflow or the modes mismatch');
            break;
            case JSON_ERROR_CTRL_CHAR:
                exit ('Unexpected control character found');
            break;
            case JSON_ERROR_SYNTAX:
                exit ( 'Syntax error, malformed JSON');
            break;
            case JSON_ERROR_UTF8:
                exit ( 'Malformed UTF-8 characters, possibly incorrectly encoded');
            break;
        };

 $ch = curl_init();      
    curl_setopt($ch,CURLOPT_URL, $requestUrl);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $productData);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $setHaders);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    $info = curl_getinfo($ch);
    $result=  json_decode($result, true);

    if ($info['http_code'] == 200) {
    	echo "Liberado \n";
        var_dump($result);
    }
    else    {
    	echo $row['sku'] . "\n";
        echo  var_dump($result);
    };
  
    curl_close($ch);		
}
//Please note 24-MB01 is sku
/*
$ch = curl_init();
$ch = curl_init($requestUrl); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_HTTPHEADER, $setHaders); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   

$result = curl_exec($ch);
$info = curl_getinfo($ch);

$result=  json_decode($result, true);
$info = curl_getinfo($ch);
  if ($info['http_code'] == 200) {
         echo "Produto Deletado \n";
      //   var_dump($result);
    }
    else    {
		$result=  json_decode($result, true);
        echo "Erro na Deleção \n";
        exit(var_dump($result));
              
    };
//echo "inserido";
curl_close($ch);
}
echo "passou"; */
?>