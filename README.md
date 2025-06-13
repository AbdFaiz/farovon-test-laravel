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

## About This Project

This is a Laravel RESTful API project for managing **Customers**, their **Contacts**, and **Sales records**.  
It features full **CRUD operations**, **JWT Authentication**, **Eloquent Relationships**, and supports testing with **Thunder Client** or **Postman**.

---

## Features

- ✅ JWT Authentication (Login, Logout, Me)
- 👥 Customer & Contact Management (One-to-Many)
- 💰 Sales Management
- 🔍 Search Customer by name/email
- 📈 Sales Report with date filter
- 🌱 Seeder & Factory for dummy data
- 📦 JSON API, ready for client consumption

---

## Installation

```bash
git clone https://github.com/username/customer-api.git
cd customer-api
composer install
cp .env.example .env
php artisan key:generate
