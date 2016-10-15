<?php

function ler_query($select, $link){

    $query = mysqli_query($link, $select);
       
        if (!$query) {
            echo 'Não foi possível executar a consulta do produto: ' . mysqli_error($link);
            echo '</br>' . $select;
         exit;
        }
        $resultado = mysqli_fetch_assoc($query);
        return $resultado;

};

function  ler_loja ($link, $loja, $status){

            if ($status == 1){
            $query_status = "SELECT produto.entity_id as produto,   max(store_id) as loja
                FROM catalog_product_entity_int	produto, 
                        visao_categoria
                where produto.entity_id = chave_produto and produto.attribute_id 	= 94 and   value = 1
                    group by  produto";
           
             };

            if ($status == 2){
            $query_status = "SELECT produto.entity_id as produto,  max(store_id) as loja
                FROM catalog_product_entity_int	produto, 
                        visao_categoria
                where produto.entity_id = chave_produto and produto.attribute_id 	= 94 and value = 2
                    group by  produto";
            };

               if ($status == " "){
                  $query_status = "SELECT produto.entity_id as produto,  max(store_id) as loja
                   FROM catalog_product_entity_int	produto, 
                        visao_categoria
                  where produto.entity_id = chave_produto and produto.attribute_id 	= 94 
                    group by  produto";
            };

            $query_loja = "select * from visao_loja where id_loja = "; 

            $query_produto = "SELECT nome_produto.value	as produto,  max(store_id) as loja" . 
                            " FROM catalog_product_entity_varchar	nome_produto " .
                            
                            "  where  nome_produto.attribute_id 	= 70 and nome_produto.entity_id = " ;

            $query_html = "SELECT html.value as html, max(store_id) as loja " . 
                            "FROM catalog_product_entity_varchar html " .
                                
                            " WHERE  html.attribute_id = 115 and  html.entity_id  = " ;

            $query_descricao = "SELECT texto.value	as descricao, max(store_id) as loja" .
                            " FROM catalog_product_entity_text 	texto " .
                            
                            " WHERE   attribute_id = 72 and entity_id = " ;

            $query_peso = "SELECT peso.value as peso, max(store_id) as loja " . 
                            "FROM catalog_product_entity_decimal peso " .
                                
                            " WHERE peso.attribute_id = 79 and peso.entity_id =  " ;


            $query_valor = "SELECT valor.value as valor, max(store_id) as loja " . 
                            "FROM catalog_product_entity_decimal valor ".
                        
                            " WHERE  valor.attribute_id = 74 and valor.entity_id = " ;

            $query_quantidade = "SELECT qty " . 
                            "FROM cataloginventory_stock_item " .
                                
                            " WHERE product_id = "  ;

            $query_group = " group by  chave_produto;";
            // $query = $query_produto . $query_html . $query_descrico;

            $query_estado = " select estado, cidade, tipo_de_loja  from detalhe_loja  where loja_id =  ";

            $resultado = [];

            $queryx = mysqli_query($link, $query_status);
            if (!$queryx) {
                echo 'Não foi possível executar a consulta do status: ' . mysqli_error($link);
                exit;
            };

           
            $i = 0;
            while($status = mysqli_fetch_assoc($queryx)){

                    $produto = $status["produto"];
                    $loja = $status["loja"];
                                    
                   
                    $select1 = $query_produto . $produto . " group by produto";
                    $select2 = $query_html . $produto ;
                    $select3 = $query_descricao . $produto ." group by entity_id " ;
                    $select4 = $query_peso . $produto ;
                    $select5 = $query_valor . $produto ;
                    $select5 = $query_valor . $produto;
                    $select6 = $query_quantidade . $produto;
                    $select7 = $query_loja . $loja;
                    $select8 = $query_estado . $loja;

                    $resultado["id"][$i] = $status["produto"];
                    $resultado["produto"][$i] = ler_query($select1, $link)["produto"];
                    $resultado["html"][$i] =    ler_query($select2, $link)["html"];
                    $resultado["descricao"][$i] = ler_query($select3, $link)["descricao"];
                    $resultado["peso"][$i] =        ler_query($select4, $link)["peso"];
                    $resultado["valor"][$i] = ler_query($select5, $link)["valor"];
                    $resultado["quantidade"][$i] = ler_query($select6, $link)["qty"];
                    $resultado["loja"][$i] =  ler_query($select7, $link)["id_loja"];
                    $resultado["nome_da_loja"][$i] = ler_query($select7, $link)["nome_da_loja"];
                    $resultado["visao"][$i] = ler_query($select7, $link)["visao"];
                    $resultado["estado"][$i] = ler_query($select8, $link)["estado"];
                    $resultado["cidade"][$i] = ler_query($select8, $link)["cidade"];
                    $resultado["tipo_de_loja"][$i] = ler_query($select8, $link)["tipo_de_loja"];


                    $i++; 
                  /*
                    echo '<pre>';
                    var_export($resultado);
                    echo '</pre>';
                */
                    
            };
            return $resultado;
};

function  ler_item ($link, $produto){

            $query_status = "SELECT produto.entity_id as produto,  max(store_id) as loja
                FROM catalog_product_entity_int	produto, 
                        visao_categoria
                where produto.entity_id = chave_produto and produto.attribute_id 	= 94 and chave_produto  = " . $produto . " LIMIT 1"; 
                    
         

         



            $query_produto = "SELECT nome_produto.value	as produto,  max(store_id) as loja" . 
                            " FROM catalog_product_entity_varchar	nome_produto " .
                            
                            "  where  nome_produto.attribute_id 	= 70 and nome_produto.entity_id = " ;

            $query_html = "SELECT html.value as html, max(store_id) as loja " . 
                            "FROM catalog_product_entity_varchar html " .
                                
                            " WHERE  html.attribute_id = 115 and  html.entity_id  = " ;

            $query_descricao = "SELECT texto.value	as descricao, max(store_id) as loja" .
                            " FROM catalog_product_entity_text 	texto " .
                            
                            " WHERE   attribute_id = 72 and entity_id = " ;

            $query_peso = "SELECT peso.value as peso, max(store_id) as loja " . 
                            "FROM catalog_product_entity_decimal peso " .
                                
                            " WHERE peso.attribute_id = 79 and peso.entity_id =  " ;


            $query_valor = "SELECT valor.value as valor, max(store_id) as loja " . 
                            "FROM catalog_product_entity_decimal valor ".
                        
                            " WHERE  valor.attribute_id = 79 and valor.entity_id = " ;

            $query_quantidade = "SELECT qty " . 
                            "FROM cataloginventory_stock_item " .
                                
                            " WHERE product_id = "  ;

            $query_group = " group by  chave_produto;";
            // $query = $query_produto . $query_html . $query_descrico;



            $resultado = [];

            $queryx = mysqli_query($link, $query_status);
            if (!$queryx) {
                echo 'Não foi possível executar a consulta do status: ' . mysqli_error($link);
                exit;
            };

            $i = 0;
            while($status = mysqli_fetch_assoc($queryx)){

                    $produto = $status["produto"];
                    $select1 = $query_produto . $produto ;
                    $select2 = $query_html . $produto ;
                    $select3 = $query_descricao . $produto ." group by entity_id " ;
                    $select4 = $query_peso . $produto ;
                    $select5 = $query_valor . $produto ;
                    $select5 = $query_valor . $produto;
                    $select6 = $query_quantidade . $produto;
                
                

                    $resultado["id"][$i] = $status["produto"];
                    $resultado["produto"][$i] = ler_query($select1, $link)["produto"];
                    $resultado["html"][$i] = ler_query($select2, $link)["html"];
                    $resultado["descricao"][$i] = ler_query($select3, $link)["descricao"];
                    $resultado["peso"][$i] = ler_query($select4, $link)["peso"];
                    $resultado["valor"][$i] = ler_query($select5, $link)["valor"];
                    $resultado["quantidade"][$i] = ler_query($select6, $link)["qty"];
                    $resultado["loja"][$i] =  ler_query($select5, $link)["loja"];


                    $i++; 
                    /*
                    echo '<pre>';
                    var_export($resultado);
                    echo '</pre>';
            */
                    
            };
            return $resultado;
};


?>
