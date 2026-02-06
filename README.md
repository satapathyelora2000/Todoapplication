# PHP Todo App

A simple Todo application built using Core PHP and MySQL.

## Features
- Add todo
- Edit todo
- Delete todo
- View todo list

## Technologies
- PHP
- MySQL
- HTML
- CSS

## Database
Database name: `todo_db`

Table:
```sql
CREATE TABLE todos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    task VARCHAR(255) NOT NULL
);
