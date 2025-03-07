# Employee Management System

This document provides a full flow and setup guide for using the Employee Management System built with Laravel. 

## Prerequisites

Before you begin, ensure you have the following installed:

- PHP (version 7.3 or higher)
- Composer
- Laravel (version 8.x or higher)
- A database (MySQL, SQLite, etc.)

## Installation Steps

1. **Clone the Repository**

   Open your terminal and run the following command to clone the repository:

   ```bash
   git clone https://github.com/Dharunraj57/employee-management.git
   ```

   Navigate into the project directory:

   ```bash
   cd employee-management
   ```

2. **Install Dependencies**

   Use Composer to install the required dependencies:

   ```bash
   composer install
   ```

3. **Set Up Environment File**

   Copy the `.env.example` file to create your own `.env` file:

   ```bash
   cp .env.example .env
   ```

   Open the `.env` file and configure your database settings:

   ```plaintext
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

4. **Generate Application Key**

   Run the following command to generate the application key:

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**

   To create the necessary database tables, run:

   ```bash
   php artisan migrate
   ```

6. **Seed the Database (Optional)**

   If you want to populate the database with sample data, you can run:

   ```bash
   php artisan db:seed
   ```

7. **Start the Development Server**

   You can start the Laravel development server with the following command:

   ```bash
   php artisan serve
   ```

   Your application will be accessible at `http://localhost:8000`.

## Application Flow

1. **Home Page**: The home page displays a list of employees with options to create, edit, or delete an employee.

2. **Create Employee**: Clicking the "Create Employee" button takes you to a form where you can enter employee details.

3. **Edit Employee**: Each employee has an "Edit" button that opens a form pre-filled with their information for updates.

4. **Delete Employee**: The "Delete" button allows you to remove an employee from the list.

5. **Authentication**: The application uses Laravel's built-in authentication system to manage user access.

## Conclusion

This guide provides a comprehensive overview of setting up and using the Employee Management System. For further customization and features, refer to the Laravel documentation.

Feel free to reach out if you have any questions or need assistance!

