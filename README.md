# Dardos Tech: Blog Application with Role-Based Access Control

## Objective

The goal of this project is to build a simple blog application with role-based access control. The application supports two user roles: **Admin** and **User**. Admins can manage blog posts, while Users can view posts and add comments.

## Features

- **User Roles:**
  - **Admin:** Can add, edit, and delete blog posts.
  - **User:** Can view posts and add comments to any post.

- **Authentication:**
  - Implemented authentication to ensure only logged-in users can perform actions.

- **Post Management (Admin):**
  - Admins can add, edit, and delete blog posts. Each post includes a title, content, and timestamp.

- **Commenting (User):**
  - Logged-in users can comment on any post.
  - Comments are associated with both the user who posted them and the post they belong to.

- **User Interface:**
  - Simple and user-friendly UI using Blade templates.
  - Basic validation and error handling in controller.

- **Database:**
  - Managed using Eloquent ORM.
  - Database tables created via migrations.
  - Seeded with sample data for testing.

## Installation

Follow these steps to set up the application on your local machine:

1. **Clone the Repository**

   ```bash
   git clone https://github.com/Sujood-Mohammad/laravel-blog24.git
   cd laravel-blog24
   cd blog-app
   composer install
   cp .env.example .env
   php artisan key:generate

## Open the .env file and set your database connection details:
   ```ف
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_blog
DB_USERNAME=root
DB_PASSWORD=

## open terminal
php artisan migrate
php artisan migrate --seed
php artisan serve




   
