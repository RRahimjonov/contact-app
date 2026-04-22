<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# About App

Bu Web ilova companiyalar uchun contact app vazifasini o'taydi, bu bilan o'zaro hamkor kompaniyaarning contact ma'lumotlarni saqlash mumkin va qulay

# O'rganilgan yangi tushunchalar va yondashuvlar

## Views va Blades
 - Route bilan yuqori darajada ishlash:
            <ul>
                <li>name berish</li>
                <li>Ma'lumotlar uzatishning: with, compact va associative array usulari</li>
                <li>parametrlarni ushlash</li>
                <li>Url parametrlarini type cheklov o'rnatish: whereNumber, whereAlpha</li>
                <li>Route guruhini yaratish(prefix)</li>
                <li>fallback route</li>
            </ul>
- Html templatedan laravelda foydalanish
- Viewlarni sozlash
- Sub viewlar yaratish
- Include: includeIf, includeWhen, includeUnless metodlari
- View cache ahamiyati va mohiyati
- forelse / empty / endforelse va lopp o'zrgaruvchisi dan foydalanish

## Controllers
- Controller routelarni guruhlash
- Single action controller yaratdim, <b>__invoke()</b> magic methodi bilan tanishdim
- Dependency Injection
- Resource Controller yaratish, resource controller routelar yozish, partiail resource controller route yozish(only va except)
- API resource routes
- Nested resource
- customizing resource names

## Migrations
- Migrationlar bilan table yartish
- Yangi column qo'shish
- Updating tables
- Foreign key qo'shish
- Laravel Query Builder(INSERT, SELECT, WHERE, ORDER, LIMIT, SKIP, UPDATE, DELETE, AGGREGATE, EXIST CHECK)
- Seeding Database(database ni to'ldirish)
- Database Seeder yaratish, run qilish 
- Seeder ichida Faker dan ofydalanish va databaseni fake data bilan to'ldirish

## Eloquent ORM
- Model nomlari qoidasi(singular: model & plural: table)
- Model yaratish(va birdan model, migration va seeder yaratish)
- Eloquent(INSERT, UPDATE, DELTE)
- Eloqunet(upsert)
- Modellarni controllerda chaqirish
- Eloquent Relationships - Querying models

## Model Factories
- Factory lar yaratish
- Factory state lar yaratish
- Factory sequence lar yaratish
- Factory Relationship larini yaratish 
- Factorylarni DatabaseSeederda ishlatish
- 
## Forms, Requests va Responses
- HTML form bilan GET methoddan foydalanish
- HTML form bilan POST methoddan foydalanish
- Interacting with HTTP Request
- Retrieving the incoming request data
- Validating the incoming request data
- Displaying validation error messages
- Handling old inputs
- Handling Http responses
- Exercise 8 - HTML form bilan PUT method ishlatish
- HTML form bilan DELETE method ishlatish
- Searching data - Client side
- Searching data - Server side

## Soft Deletion

- Soft deletionni sozlash
- Soft deleting models
- Querying soft deleted models
- Changing the deletion behaviour
- Displaying soft deleted models
- Restore and force delete soft deleted models
- Searching soft deleted models

## Query Scopes

- Global Scopes yaratish
- Global Scopes ni olib tashlash (Removing global scopes)
- Global Scopes ni reusable qilish
- Local scope yaratish
- Dynamic scope yaratish
- Scopelarni reusable qilish

## Route Model Bindings

- Implicit Bindings
- Implicit Binding on soft deleted models

## Form Request Validation

- Form Request Validation bilan tanishish
- Validation attributelarini o‘zgartirish
- Validation error xabarlarini customize qilish
- Validatsiyadan oldin inputni tayyorlash (Preparing input before validation)

## Authentication
- Laravel Fortify paketini sozlash
- Foydalanuvchilarni ro'yxatdan o'tkazish (Registration)
- Tizimga kirish (Login / Signing in)
- Avtorizatsiyadan o'tgan foydalanuvchi ma'lumotlarini olish (Retrieving authenticated user)
- Foydalanuvchini eslab qolish va tizimdan chiqish (Remembering users and signing out)
- Routelarni himoyalash (Protecting routes from unauthenticated users)
- Parolni tiklash funksiyasi (Password Reset: Request & Resetting)
- Email tasdiqlash funksiyasini qo'shish (Email Verification)
- Foydalanuvchi profil ma'lumotlarini tahrirlash formasi va yangilash
- Profil ma'lumotlarini yangilash funksiyasini customize qilish
- Foydalanuvchi parolini yangilash (Updating the user password)
- Resurslarni foydalanuvchilarga bog'lash (Linking resources to users)
- Faqat joriy foydalanuvchiga tegishli ma'lumotlarni ko'rsatish (Displaying current user's data)

## Working with Laravel File Storage
- File Storage tizimini sozlash (Setting up File Storage)
- Fayllarni o'qish va saqlash (Reading and Storing Files)
- Fayllarni nusxalash, ko'chirish va o'chirish (Copying, moving and deleting files)
- Papkalar bilan ishlash (Working with Directories)
- Ilovada File Storageni implementatsiya qilish
- Fayllarni saqlashning boshqa foydali metodlari
- Yuklangan faylni diskdan olib formada ko'rsatish

## Query Optimization
- Querylarni debug qilish (Debugging queries)
- Lazy loading va Eager Loading farqlari
- Bir nechta munosabatlarni bir vaqtda yuklash (Eager loading multiple relationships)
- Ichma-ich munosabatlarni yuklash (Nested eager loading)
- Eager loadingga cheklovlar qo'yish (Constraint eager loading)
- Lazy eager loading usuli
- Default eager loadingni sozlash
- Bog'langan modellarni sanash (Counting related models)
- Agregat funksiyalar bilan ishlash (Aggregate functions)




