<?php
echo "passou inicio";
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    // include Database connection file
 include("db_connection.php");
 $user_id = $_POST['id'];
 echo "\n" . $user_id;
$query = "select sku from visao_produto where chave_produto = " . $user_id;

	if (!$result = mysqli_query($conexao, $query)) {
        exit(mysqli_error());
    }
    $row = mysqli_fetch_assoc($result);

    // get user id
   

   //Authentication rest API magento2.Please change url accordingly your url
include("token1.php");  

$requestUrl='http://ec2-54-209-29-39.compute-1.amazonaws.com/index.php/rest/V1/products/';
/*
 $requestUrl='http://127.0.0.1/magento/index.php/rest/V1/products/';
$requestUrl= 'http://' . $_SERVER['SERVER_NAME'] . '/index.php/rest/V1/products/';

$requestUrl='http://127.0.0.1/magento/index.php/rest/V1/products/';
*/

$requestUrl = $requestUrl .$row['sku'];

		
//Please note 24-MB01 is sku

$ch = curl_init();
$ch = curl_init($requestUrl); 
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
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
echo "passou";
?>