# Requêtes SQL

## Récupérer tous les produits

```sql
SELECT * FROM product
```

## Récupérer le produit ayant un id donné (#2)

```sql
SELECT *
FROM product
WHERE id = 2
```

## Home

Récupération des 5 catégories mises en avant sur la Home
```sql
SELECT *
FROM `category`
WHERE `home_order` > 0
ORDER BY `home_order`
LIMIT 5
```

## Navigation

Récupération de toutes les catégories par ordre alphabétique
```sql
SELECT *
FROM `category`
ORDER BY `name`
```

Récupération de tout les types par ordre alphabétique
```sql
SELECT *
FROM `type`
ORDER BY `name`
```

Récupération de toutes les marques par ordre alphabétique
```sql
SELECT *
FROM `brand`
ORDER BY `name`
```

## Page Catégorie

Récupérer les produits de la catégorie #2
```sql
SELECT *
FROM `product`
WHERE `category_id` = 2
```

Récupérer la catégorie #2
```sql
SELECT *
FROM `category`
WHERE `id` = 2
LIMIT 1
```

## Page Type

Récupérer les produits du Type #2
```sql
SELECT *
FROM `product`
WHERE `type_id` = 2
```

Récupérer le Type #2
```sql
SELECT *
FROM `type`
WHERE `id` = 2
LIMIT 1
```

## Page marque

Récupérer les produits de la marque #2
```sql
SELECT *
FROM `product`
WHERE `brand_id` = 2
```

Récupérer la marque #2
```sql
SELECT *
FROM `brand`
WHERE `id` = 2
LIMIT 1
```

## Page Produit (bonus qui pique)

Récupérer les infos du produit #2 + le nom de la marque + le nom de la catégorie
```sql
SELECT 
`product`.*, 
`category`.`name` AS category_name, 
`brand`.`name` AS brand_name
FROM `product`
LEFT JOIN `category` ON `category`.`id` = `product`.`category_id`
LEFT JOIN `brand`    ON `brand`.`id`    = `product`.`brand_id`
WHERE `product`.`id` = 2
```
[Doc SQL jointures](https://sql.sh/cours/jointures)