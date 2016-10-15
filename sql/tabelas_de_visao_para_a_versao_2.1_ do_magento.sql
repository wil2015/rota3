DROP VIEW IF EXISTS visao_produto; 
CREATE VIEW visao_produto AS
select 
		
		nome_produto.entity_id 		as chave_produto, 
		nome_produto.value 		as produto, 
		descricao.value 		as descricao,
		valor.value			as valor, 
		peso.value			as peso,
		html.value 			as html,
       		 sku.sku 			as sku
from 	
		(catalog_product_entity  sku,
        	 catalog_product_entity_varchar	nome_produto,
		catalog_product_entity_varchar	html,
		catalog_product_entity_decimal	valor,
		catalog_product_entity_decimal	peso)
join
		catalog_product_entity_text 	descricao
		on nome_produto.entity_id = descricao.entity_id 
where 					
				
		nome_produto.entity_id = valor.entity_id and 
		nome_produto.entity_id = peso.entity_id  and 
		nome_produto.entity_id = html.entity_id  and 
		nome_produto.entity_id = valor.entity_id and 
		nome_produto.entity_id = sku.entity_id and 
		nome_produto.attribute_id 	= 73 	and
		valor.attribute_id = 77 		and
		peso.attribute_id = 82         and
		html.attribute_id = 119	and
		descricao.attribute_id = 75

DROP VIEW IF EXISTS visao_categoria;
CREATE VIEW visao_categoria AS
select 
		nome_categoria_pai.value 	as nome_da_categoria_pai,
		nome_categoria_filha.value 		as nome_da_categoria_filha,
		nome_categoria_filha.entity_id 	 as categoria_filha,		
		catalogo.parent_id as categoria_pai , 
		identificacao_produto.product_id as chave_produto
 from 		catalog_category_entity_varchar nome_categoria_filha,
		catalog_category_entity_varchar nome_categoria_pai, 
	 	/*llll*/
		catalog_category_product		identificacao_produto, 
		catalog_category_entity			catalogo
		
		where 	
					
				nome_categoria_filha.entity_id  	= identificacao_produto.category_id and
				nome_categoria_filha.entity_id  	= catalogo.entity_id and	
				nome_categoria_pai.entity_id  	= catalogo.parent_id and
				nome_categoria_filha.attribute_id = 45 	and
				nome_categoria_pai.attribute_id = 45; 
