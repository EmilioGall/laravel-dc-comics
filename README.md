# Laravel DC Comics

A Laravel-based application that serves as a content management system (CMS) for managing a collection of DC Comics information, including comic titles, series, and related data. This project demonstrates the integration of CRUD functionalities with Laravel's robust framework.

## Table of Contents

- [Dependencies](#dependencies)
- [Features](#features)
- [Environment Variables](#environment-variables)
- [Installation](#installation)
- [Milestones](#milestones)
- [Contributing](#contributing)

## Dependencies

This project utilizes the following technologies:

- **Laravel (v8.x)**: The PHP framework for building modern web applications.
- **MySQL**: Database management system for storing comic-related data.
- **Composer**: Dependency manager for PHP packages.
- **Bootstrap (v5.x)**: For styling the frontend interface.

## Features

1. **CRUD Functionality**:
   - Create, read, update, and delete comic records.

2. **Dynamic Routing**:
   - Utilize Laravel's routing to manage resourceful routes for comics and related data.

3. **Validation**:
   - Form inputs are validated for correctness before saving to the database.

4. **Database Integration**:
   - Persistent storage for comic titles, series, publication years, and more using MySQL.

5. **UI Framework**:
   - Leverage Bootstrap for a responsive and user-friendly interface.

## Environment Variables

The application requires certain environment variables for configuration. Define these in the `.env` file:

- `DB_CONNECTION`: Set to `mysql`.
- `DB_HOST`: The database server host.
- `DB_PORT`: The port for the database server (default is 3306).
- `DB_DATABASE`: Name of the database.
- `DB_USERNAME`: Database username.
- `DB_PASSWORD`: Database password.

Refer to `.env.example` for a template of required variables.

## Installation

To set up the project locally:

1. Clone the repository:
   ```bash
   git clone https://github.com/EmilioGall/laravel-dc-comics.git
   cd laravel-dc-comics
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Configure the `.env` file:
   ```bash
   cp .env.example .env
   # Update .env with database credentials and other necessary values.
   ```

4. Generate the application key:
   ```bash
   php artisan key:generate
   ```

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

8. Open the application in your browser:
   ```
   http://localhost:8000
   ```

## Milestones

1. **Database Design**:
   - Design the database schema to include tables for comics, series, and other related data, ensuring proper relationships between entities.
   - Create migrations to define and manage the schema structure.

2. **CRUD Implementation**:
   - Develop functionality for creating, reading, updating, and deleting comic records using Laravel's resourceful controllers.
   - Implement pagination for listing comics to improve performance and user experience.

3. **Frontend Integration**:
   - Build responsive and interactive interfaces using Blade templates and Bootstrap for managing comics.
   - Add navigation menus, forms, and tables for better user interaction.

4. **Data Validation**:
   - Integrate Laravel's validation system to ensure accurate and complete data entry for comic records.
   - Provide user feedback through error messages and form hints.

5. **Database Seeding**:
   - Create seeders to populate the database with sample data for development and testing purposes.
   - Include default comic titles, series, and publication years to illustrate the application's capabilities.

6. **Error Handling**:
   - Implement error handling for scenarios such as invalid input, missing resources, or database connectivity issues.
   - Display user-friendly error pages and messages.

7. **Testing**:
   - Write unit and feature tests to verify the correctness of CRUD operations and ensure the stability of the application.

8. **Deployment**:
   - Prepare the application for deployment by configuring environment settings, optimizing assets, and ensuring database migrations are ready.
   - Deploy to a hosting platform such as Heroku, AWS, or DigitalOcean.

9. **Future Enhancements**:
   - Add search and filter functionality to allow users to find specific comics or series.
   - Implement user authentication and authorization to manage access to certain features.
   - Explore API development to enable integration with other applications.

## Contributing

Contributions are welcome! Follow these steps:

1. Fork the repository.
2. Create a new feature branch:
   ```bash
   git checkout -b feature/your-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add new feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/your-feature
   ```
5. Open a pull request.

For more details, visit the [GitHub repository](https://github.com/EmilioGall/laravel-dc-comics).

---

Happy coding!

