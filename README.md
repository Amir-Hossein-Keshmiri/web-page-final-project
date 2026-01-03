
<p align="center">
  <img src="screenshots/welcome_car.jpg" width="180" alt="ShopCar Logo">
</p>

<h1 align="center">ShopCar 🚗🛒</h1>

<p align="center">
  <strong>A modern, secure, and responsive authentication system built with Laravel</strong>
</p>

<p align="center">
  <a href="https://laravel.com" target="_blank"><img src="https://img.shields.io/badge/Laravel-10-red" alt="Laravel Version"></a>
  <a href="https://www.php.net" target="_blank"><img src="https://img.shields.io/badge/PHP-8.3-blue" alt="PHP Version"></a>
  <img src="https://img.shields.io/badge/Status-University_Project-success" alt="Project Status">
  <img src="https://img.shields.io/badge/License-MIT-green" alt="License">
</p>

## 🌟 Project Overview

**ShopCar** is a Laravel-based web application built as a **university project**.  
Its main purpose is to demonstrate a **full authentication flow** with a modern, clean interface and email notifications.

The project covers:

- Secure **user registration**
- **Login system** with hashed passwords
- **Profile management**
- **Email notifications** on login and registration
- Clean and responsive **Blade UI templates**
- SQLite database for easy setup

## 🚀 Features

- **User Registration:** Email + Password  
- **Login & Logout** functionality  
- **Profile Page:** Shows user's account info  
- **Email Notifications:** Sent on registration and login  
- **Password Hashing:** Security best practices  
- **CSRF Protection:** Secure forms  
- **Responsive UI:** Works on mobile and desktop  

## 📸 Screenshots

### Welcome Page
![Welcome Page](screenshots/welcome.png)

### Welcome Page
![Welcome Page](screenshots/welcome2.png)

### Welcome Page
![Welcome Page](screenshots/welcome3.png)

### Login Page
![Login Page](screenshots/login.png)

### Register Page
![Register Page](screenshots/register.png)

### Profile Page
![Profile Page](screenshots/profile.png)

### Add Balance Page
![Profile Page](screenshots/add_balance.png)

### Add Balance Confirm Page
![Profile Page](screenshots/add_balance_confirm.png)

### Admin Page
![Profile Page](screenshots/admin.png)

### Users List Page
![Profile Page](screenshots/users_list.png)

### Prpduct List Page
![Profile Page](screenshots/product_list.png)

## 🛠️ Tech Stack

- **Framework:** Laravel 10  
- **Backend Language:** PHP 8.3  
- **Frontend:** Blade + CSS  
- **Database:** SQLite  
- **Email:** Gmail SMTP / Log Driver for testing  

## ⚙️ Installation & Setup

1. Clone the repository:
```bash
git clone https://github.com/your-username/shopcar.git
cd shopcar
```

2. Install dependencies:
```bash
composer install
```

3. Setup environment file:
```bash
cp .env.example .env
php artisan key:generate
```

4. Run migrations (this will reset database):
```bash
php artisan migrate:fresh
```

5. Start the development server:
```bash
php artisan serve
```

6. Access the app:
```
http://127.0.0.1:8000
```

## 📧 Email Configuration

**For testing (no real email sent):**
```env
MAIL_MAILER=log
```

**For real Gmail notifications:**
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your_gmail@gmail.com
MAIL_PASSWORD=your_app_password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your_gmail@gmail.com
MAIL_FROM_NAME="ShopCar"
```

> ⚠️ Make sure **2-step verification** is enabled on your Gmail account  
> and you generate an **App Password** for Laravel to send emails.

## 🔒 Security Features

- Passwords stored with **bcrypt hashing**
- CSRF protection for all forms
- Input validation for email and password
- Unique email enforcement
- No plain text credentials stored

## 🎓 Academic Notes

This project demonstrates:

- Laravel MVC architecture  
- Authentication flow  
- Email notifications integration  
- Database migrations & Eloquent ORM  
- Secure web application development

## 💡 Future Improvements

- Add **password reset** functionality  
- Add **email verification**  
- Implement **user roles & permissions**  
- Enhance **UI/UX with Tailwind CSS or Bootstrap**  
- Add **multi-language support**

## 📜 License

This project is open-source and **developed for educational purposes** under the [MIT License](https://opensource.org/licenses/MIT).

<p align="center">
  Made with ❤️ using Laravel & PHP
</p>
