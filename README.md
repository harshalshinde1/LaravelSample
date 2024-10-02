# Customer CRUD Application

This is a simple Laravel application that provides CRUD (Create, Read, Update, Delete) operations for managing customer records.

## Features

- Create a new customer
- View a list of customers
- Edit existing customer details
- Delete a customer

## Requirements

- PHP >= 7.3
- Composer
- MySQL (or another supported database)
- Laravel >= 8.x
### Clone the Repository

```bash
git clone https://github.com/yourusername/customer-crud.git
cd customer-crud


## Installation
Step 1: Install Dependencies

Install XAMPP (or your preferred web server with PHP support).
Install Composer if you haven't already.

Step 2: Configure the Database
Update the database configuration in the .env file:
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=customer_crud
    DB_USERNAME=root
    DB_PASSWORD=your_password

Step 3: Generate Application Key
    Run the following command to generate the application key:
    - php artisan key:generate

Step 4: Create the Database
    Create a new database named customer_crud in your MySQL server.

Step 5: Run Migrations
    Run the migrations to create the necessary tables:
    - php artisan migrate

Step 6: Start the Development Server
    You can start the development server using:
    - php artisan serve


Now, you can access your application at http://localhost:8000.






