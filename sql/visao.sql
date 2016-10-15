DROP VIEW IF EXISTS visao_produto; 
DROP VIEW IF EXISTS visao_loja; 
DROP VIEW IF EXISTS visao_categoria; 
DROP VIEW IF EXISTS visao_unificada;
CREATE VIEW visao_produto AS
select distinct
		
		nome_produto.entity_id 		as chave_produto, 
		nome_produto.value 			as produto, 
		descricao.value 			as descricao,
		valor.value					as valor, 
		peso.value					as peso,
		html.value 					as html,
       	sku.sku		 				as sku
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
				
		nome_produto.entity_id = valor.entity_id 	and 
		nome_produto.entity_id = peso.entity_id  	and 
		nome_produto.entity_id = html.entity_id 	and 
		nome_produto.entity_id = valor.entity_id 	and 
		nome_produto.entity_id = sku.entity_id 		and 
		nome_produto.attribute_id 	= 70 			and
		valor.attribute_id = 74 					and
		peso.attribute_id = 79         				and
		html.attribute_id = 115						and	
		descricao.attribute_id = 72;

CREATE VIEW visao_categoria AS
select 
		nome_categoria_pai.value 			as nome_da_categoria_pai,
		nome_categoria_filha.value 			as nome_da_categoria_filha,
		nome_categoria_filha.entity_id 		as categoria_filha,		
		catalogo.parent_id					as categoria_pai , 
		identificacao_produto.product_id	as chave_produto
 from 	
 		catalog_category_entity_varchar nome_categoria_filha,
		catalog_category_entity_varchar nome_categoria_pai, 
	 	catalog_category_product		identificacao_produto, 
		catalog_category_entity			catalogo
		
where 	
					
		nome_categoria_filha.entity_id  	= identificacao_produto.category_id and
		nome_categoria_filha.entity_id  	= catalogo.entity_id and	
		nome_categoria_pai.entity_id  		= catalogo.parent_id and
		nome_categoria_filha.attribute_id 	= 42 	and
		nome_categoria_pai.attribute_id		= 42; 

CREATE VIEW  visao_loja as 
select 
		
		loja_grupo.name 	as nome_da_loja,
		loja.code			as visao,
		loja.store_id		as id_loja,	
		loja_grupo.root_category_id as categoria_pai
from 	 
	
		store_group						loja_grupo,
		store							loja		
where 	
		loja_grupo.default_store_id 	= loja.store_id;
DROP VIEW IF EXISTS visao_unificada;



DROP VIEW IF EXISTS categoria;
CREATE VIEW  categoria as 
SELECT
	default_store_id as id_loja,
	root_category_id,
	name as nome_da_loja, 
	a.entity_id as categoria,
	a.parent_id as pai, 
	value as nome_da_categoria,
	(select value as nome_do_pai from catalog_category_entity_varchar where entity_id = pai and attribute_id = 42) as nome_root

FROM
  store_group loja,
  catalog_category_entity a,
  catalog_category_entity_varchar b
WHERE
  loja.root_category_id = a.parent_id AND 
  b.attribute_id = 42 AND 
  a.entity_id = b.entity_id;



CREATE VIEW  visao_unificada as 
select  
	 visao_produto.chave_produto,
	 produto, 
	 descricao, 
	 valor,
	 peso,
	 html,
	 nome_da_loja,
	 visao, 
	 tipo_de_loja,
	 estado,
	 cidade,
	  sku,
	  id_loja

from 
	 visao_categoria,
	visao_produto,
	visao_loja
left join
	detalhe_loja
on visao_loja.id_loja = detalhe_loja.loja_id
where visao_produto.chave_produto = visao_categoria.chave_produto and
		visao_categoria.categoria_pai = visao_loja.categoria_pai; 
