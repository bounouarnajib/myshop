-- إنشاء قاعدة البيانات
CREATE DATABASE IF NOT EXISTS myshop;
USE myshop;

-- إنشاء جدول الطلبات
CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    quantity INT NOT NULL
);

-- إنشاء جدول الاتصالات
CREATE TABLE IF NOT EXISTS contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL
);
