# Routes

## Sprint 1

| URL | HTTP Method | Controller | Method | Title | Content | Comment |
|--|--|--|--|--|--|--|
| `/` | `GET` | `MainController` | `home` | Dans les shoe | 5 categories | - |
| `/catalog/category/[i:category_id]` | `GET` | `CatalogController` | `category` | Dans les shoe | 1 categorie + les articles de cette catégorie | - |
| `/legal-notice/` | `GET` | `MainController` | `notice` | Mentions légales | Description of legal notice | - |
| `/catalog/type/[i:type_id]` | `GET` | `CatalogController` | `type` | Dans les shoe | 1 type + les articles de ce type | - |
| `/catalog/brand/[i:brand_id]` | `GET` | `CatalogController` | `brand` | Dans les shoe | 1 marque + les articles de cette marque | - |
| `/catalog/product/[i:product_id]` | `GET` | `CatalogController` | `product` | Dans les shoe | 1 produit + les articles de ce produit | - |