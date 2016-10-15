<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST)){}
else{
	return "sem formulario";
};

    // get values
    $id = $_POST['id'];
 //   $produto = $_POST['produto'];
  

    // Updaste User details
     $user_id = $_POST['id'];
    $query = "select sku from visao_produto where chave_produto = " . $user_id;
     $query = "select sku, categoria_filha from visao_produto a, visao_categoria b where a.chave_produto =  b.chave_produto and a.chave_produto = " . $user_id;

	if (!$result = mysqli_query($conexao, $query)) {
        exit(mysqli_error());
    }
    $row = mysqli_fetch_assoc($result);
   
include("token1.php");



$form_valor = $_POST['valor'];
$form_descricao = $_POST['descricao'];
$form_peso = $_POST['peso'];
$form_quantidate = $_POST['quantidade'];
$form_categoria = $row['categoria_filha'];
/*
$productData = array(

    'price'             => $valor,
    'weight'            => $peso,
    'custom_attributes' => array(
        array( 'attribute_code' => 'category_ids', 'value' => $categoria ),
        array( 'attribute_code' => 'description', 'value' => $descricao )
        
        ) 
);
*/



/*
'stored_id'          => 0,
*/
$productData = array(
   
   
    'price'             => $form_valor,
    'weight'            => $form_peso,
    
    'extensionAttributes' =>  array('stock_item'=> array('isInStock'=> 1,'qty'  => $form_quantidate )),
    'custom_attributes' => array(
        array( 'attribute_code' => 'category_ids', 'value' => $form_categoria ),
        array( 'attribute_code' => 'description', 'value' => $form_descricao ) 
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


   

    $requestURL = "http://ec2-54-209-29-39.compute-1.amazonaws.com/index.php/rest/default/V1/products";
 //   $requestURL = "http://localhost/magento/index.php/rest/V1/products";
    
  
    $requestURL =  $requestURL . '/' . $row['sku'];
    

    $ch = curl_init();      
    curl_setopt($ch,CURLOPT_URL, $requestURL);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $productData);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $setHaders);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch); 
    $info = curl_getinfo($ch);
    $result=  json_decode($result, true);

    if ($info['http_code'] == 200) {
    	echo "Atualizado \n";
        var_dump($result);
    }
    else    {
    	echo $row['sku'] . "\n";
        echo  var_dump($result);
    };
  
    curl_close($ch);

?>