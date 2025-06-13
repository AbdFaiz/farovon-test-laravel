<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

<p align="center">
  <a href="#"><img src="https://img.shields.io/badge/build-passing-brightgreen" alt="Build Status"></a>
  <a href="#"><img src="https://img.shields.io/badge/license-MIT-blue.svg" alt="License"></a>
  <a href="#"><img src="https://img.shields.io/badge/api-json-lightgrey" alt="API Format"></a>
  <a href="#"><img src="https://img.shields.io/badge/auth-JWT-orange" alt="Auth Type"></a>
</p>

---

## 📌 About This Project

This is a Laravel RESTful API project for managing **Customers**, their **Contacts**, and **Sales records**.  
It features full **CRUD operations**, **JWT Authentication**, **Eloquent Relationships**, and supports testing with **Thunder Client** or **Postman**.

---

## 🚀 Features

- ✅ JWT Authentication (Login, Logout, Me)
- 👥 Customer & Contact Management (One-to-Many)
- 💰 Sales Management
- 🔍 Search Customer by name/email
- 📈 Sales Report with date filter
- 🌱 Seeder & Factory for dummy data
- 📦 JSON API

---

## ⚙️ Installation

```bash
git clone https://github.com/AbdFaiz/farovon-test-laravel.git
cd customer-api
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
````

---

## 🔐 API Authentication

### 📥 Login Route

```http
POST http://127.0.0.1:8000/api/login
```

### 📨 Request Body:

```json
{
  "email": "admin@gmail.com",
  "password": "admin"
}
```

### 📋 Header for testing Protected Routes
Use tools like **Thunder Client** or **Postman**, and include headers:

```http
Accept: application/json  
Authorization: Bearer <token_from_login>
```

---

## 📡 Example API Endpoints

| Method | Endpoint                                      | Description          |
| ------ | --------------------------------------------- | -------------------- |
| POST   | `/api/login`                                  | Get JWT token        |
| GET    | `/api/customers`                              | List all customers   |
| GET    | `/api/customers?search=john`                  | Search customer      |
| POST   | `/api/customers`                              | Create new customer  |
| GET    | `/api/customers/{id}`                         | Get customer details |
| PUT    | `/api/customers/{id}`                         | Update customer      |
| DELETE | `/api/customers/{id}`                         | Delete customer      |
| GET    | `/api/report?start=2025-01-01&end=2025-06-01` | Filter sales report  |

---
