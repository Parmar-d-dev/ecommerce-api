#  E-Commerce Product CRUD API (Laravel )

<!-- Project Overview -->
This project is a **RESTful CRUD API** built using Laravel  for managing products in an E-Commerce shopping website.

The API allows users to:
- Create products
- View all products
- View a single product
- Update products
- Delete products

All data is stored in a **MySQL database** and the project follows Laravel best practices.

---

<!--  Tech Stack -->
- PHP 8.2+
- Laravel 12
- MySQL
- Git / GitHub
- REST API

---

<!-- Product Fields -->
The `products` table contains the following fields:

| Field | Type |
|-----|-----|
| id | bigint |
| name | string |
| description | text |
| price | decimal |
| stock | integer |
| status | boolean |
| created_at | timestamp |
| updated_at | timestamp |

---
<!-- API Route -->
GET /api/products
POST /api/products 
GET /api/products/{id} 
PUT /api/products/{id} 
DELETE /api/products/{id}

Content-Type: application/json

##  Installation & Setup

###  Clone the Repository
```bash
git clone https://github.com/Parmar-d-dev/ecommerce-api.git
cd ecommerce-api

