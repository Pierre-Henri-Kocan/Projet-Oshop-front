SELECT * FROM category
SELECT * FROM category WHERE id=2
SELECT * FROM category WHERE id=3
SELECT * FROM category WHERE id=1
SELECT * FROM category WHERE id=6
SELECT * FROM category WHERE id=4
SELECT * FROM category WHERE id=7
SELECT * FROM category WHERE id=5

SELECT * FROM product
SELECT * FROM product ORDER BY id ASC
SELECT * FROM product ORDER BY name ASC
SELECT * FROM product ORDER BY rate ASC
SELECT * FROM product ORDER BY price ASC
SELECT * FROM product WHERE type_id=8
SELECT * FROM product WHERE type_id=2
SELECT * FROM product WHERE type_id=1
SELECT * FROM product WHERE type_id=4
SELECT * FROM product WHERE type_id=7
SELECT * FROM product WHERE type_id=6
SELECT type.name, product.name, price FROM product JOIN type ON type.id = product.type_id WHERE product.id=1;
SELECT type.name, product.name, price FROM product JOIN type ON type.id = product.type_id WHERE product.id=2;
SELECT type.name, product.name, price FROM product JOIN type ON type.id = product.type_id WHERE product.id=3;
SELECT type.name, product.name, price FROM product JOIN type ON type.id = product.type_id WHERE product.id=20;

SELECT * FROM brand
SELECT * FROM brand WHERE id=2
SELECT * FROM brand WHERE id=5
SELECT * FROM brand WHERE id=1
SELECT * FROM brand WHERE id=8
SELECT * FROM brand WHERE id=6
SELECT * FROM brand WHERE id=7

SELECT * FROM type