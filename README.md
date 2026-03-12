# task4


# 🍔 Food Ordering Management System

A simple **Full Stack Web Application** developed as part of **Task-4 – Real-World Web Application Project** for the **ApexPlanet Internship Program**.

This project demonstrates core full-stack development concepts including **authentication, CRUD operations, database integration, search functionality, and an admin panel**.

---

# 📌 Project Overview

The **Food Ordering Management System** allows users to browse food items and place orders through a simple web interface.
An **Admin Panel** allows administrators to manage food items and view customer orders.

The system demonstrates **real-world web development concepts** such as user authentication, database relationships, and dynamic content generation using PHP and MySQL.

---

# 🚀 Features

### 👤 User Features

* User Registration
* User Login Authentication
* View Food Menu
* Search Food Items
* Place Food Orders
* Secure Logout

### 👑 Admin Features

* Admin Dashboard
* Add Food Items
* Edit Food Details
* Delete Food Items
* View All Orders
* View System Statistics

---

# 🛠️ Technologies Used

**Frontend**

* HTML
* CSS
* JavaScript

**Backend**

* PHP

**Database**

* MySQL

**Development Tools**

* XAMPP
* Visual Studio Code
* phpMyAdmin

---

# 🗄️ Database Structure

### Users Table

| Column   | Description        |
| -------- | ------------------ |
| id       | User ID            |
| name     | User Name          |
| email    | Email Address      |
| password | Encrypted Password |
| role     | Admin/User         |

### Foods Table

| Column      | Description      |
| ----------- | ---------------- |
| id          | Food ID          |
| name        | Food Name        |
| price       | Food Price       |
| description | Food Description |

### Orders Table

| Column     | Description        |
| ---------- | ------------------ |
| id         | Order ID           |
| user_id    | User placing order |
| food_id    | Ordered food       |
| order_date | Date of order      |

---

# 📂 Project Structure

```
task4-project
│
├── db.php
├── register.php
├── login.php
├── logout.php
├── dashboard.php
├── order.php
├── search.php
│
├── admin
│   ├── dashboard.php
│   ├── add_food.php
│   ├── edit_food.php
│   ├── delete_food.php
│   └── orders.php
│
└── database.sql
```

---

# ⚙️ Installation & Setup

### 1️⃣ Install XAMPP

Download and install XAMPP.

### 2️⃣ Start Server

Start:

* Apache
* MySQL

### 3️⃣ Move Project

Place the project folder inside:

```
C:\xampp\htdocs\
```

### 4️⃣ Create Database

Open:

```
http://localhost/phpmyadmin
```

Create database:

```
food_db
```

Import:

```
database.sql
```

### 5️⃣ Run the Project

Open in browser:

```
http://localhost/task4-project/register.php
```

---

# 📊 Application Workflow

```
User Registration
        ↓
User Login
        ↓
View Food Menu
        ↓
Search Food Items
        ↓
Place Order
        ↓
Admin Dashboard
        ↓
Manage Foods & View Orders
```

---

# 🎥 Demo

A demonstration video showing the complete workflow including:

* User Registration
* Login
* Food Ordering
* Admin Dashboard
* CRUD Operations

---

# 📚 Learning Outcomes

Through this project, the following skills were practiced:

* Full Stack Web Development
* PHP & MySQL Integration
* CRUD Operations
* Session Management
* Database Relationships
* Basic Admin Panel Development

---

# 👩‍💻 Author

**Lakshmi Susmitha Thota**
B.Tech – Information Technology

Project developed as part of the **ApexPlanet Virtual Internship Program**.

---
