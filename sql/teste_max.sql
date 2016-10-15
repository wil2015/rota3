select 
		
		nome_produto.entity_id 		as chave_produto, 
		nome_produto.value 			as produto, 
		descricao.value 			as descricao,
		max(nome_produto.store_id)
      
from 	
		(catalog_product_entity  sku,
         catalog_product_entity_varchar	nome_produto)
		
join
		catalog_product_entity_text 	descricao
		on nome_produto.entity_id = descricao.entity_id 
where 					
				
		
		nome_produto.entity_id = sku.entity_id 		and 
		nome_produto.attribute_id 	= 70 			and
		
		descricao.attribute_id = 72;