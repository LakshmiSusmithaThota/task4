CREATE DATABASE food_db;

USE food_db;

CREATE TABLE users(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
email VARCHAR(100),
password VARCHAR(255),
role ENUM('admin','user') DEFAULT 'user'
);

CREATE TABLE foods(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(100),
price INT,
description TEXT
);

CREATE TABLE orders(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
food_id INT,
order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
FOREIGN KEY(user_id) REFERENCES users(id),
FOREIGN KEY(food_id) REFERENCES foods(id)
);