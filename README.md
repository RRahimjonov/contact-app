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

## Export va Import
- .csv fayldan ma'lum9otlarni import qilish
- databse da ma'lumotlarni .csv faylga solib export qilish



# Foydalanish

Ushbu loyihani mahalliy (local) kompyuteringizda ishga tushirish uchun quyidagi qadamlarni bajaring:

### 1. Loyihani clone qilish
Avval loyihani GitHub-dan yuklab oling:
```bash
git clone <repository-url>
cd contact-app
```

### 2. Kutubxonalarni o'rnatish
PHP va JavaScript kutubxonalarini o'rnating:
```bash
composer install
npm install
```

### 3. Muhitni sozlash (.env)
`.env.example` faylidan nusxa olib, `.env` faylini yarating:
```bash
cp .env.example .env
```
Keyin quyidagi buyruq orqali ilova kalitini generatsiya qiling:
```bash
php artisan key:generate
```

### 4. Ma'lumotlar bazasini sozlash
`.env` faylida MySQL ma'lumotlarini kiriting (ma'lumotlar bazasi nomini `contact_app` deb yarating yoki o'zingizga moslang):

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=contact_app
DB_USERNAME=root
DB_PASSWORD=sizning_parolingiz
```

Keyin migrationlarni ishga tushiring:
```bash
php artisan migrate --seed
```

### 5. Email (Mailtrap) sozlamalari
Ilovada email xabarlarini (masalan, parolni tiklash yoki email tasdiqlash) test qilish uchun [Mailtrap](https://mailtrap.io/) xizmatidan foydalanishingiz mumkin. 
`.env` faylidagi quyidagi qatorlarni o'zingizning Mailtrap ma'lumotlaringiz bilan to'ldiring:

```env
MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=sizning_username
MAIL_PASSWORD=sizning_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="info@contact-app.uz"
MAIL_FROM_NAME="${APP_NAME}"
```

### 6. Ilovani ishga tushirish
Front-end assetlarni build qiling va serverni ishga tushiring:

```bash
# Birinchi terminalda:
npm run dev

# Ikkinchi terminalda:
php artisan serve
```

Endi brauzeringizda `http://localhost:8000` manziliga kirishingiz mumkin.





