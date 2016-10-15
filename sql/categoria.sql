DROP VIEW IF EXISTS categoria;
CREATE VIEW  categoria as 
SELECT
	default_store_id as id_loja,
	root_category_id,
	name as nome_da_loja, 
	a.entity_id as categoria,
	a.parent_id as pai, 
	value as nome_da_categoria,
	(select value as nome_do_pai from catalog_category_entity_varchar where entity_id = pai and attribute_id = 45) as nome_root

FROM
  store_group loja,
  catalog_category_entity a,
  catalog_category_entity_varchar b
WHERE
  loja.root_category_id = a.parent_id AND 
  b.attribute_id = 45 AND 
  a.entity_id = b.entity_id;

