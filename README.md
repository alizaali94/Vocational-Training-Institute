# Vocational Training Institute Website

This repository contains the source code for a Vocational Training Institute website developed using Laravel.

## Features

- **Courses Management**: Easily manage courses offered by the institute.
- **Student Registration**: Allow students to register for courses online.
- **Admin Panel**: Admin interface to manage courses, students, and other site content.
- **Authentication**: Secure login system for administrators and students.
- **Responsive Design**: Ensure the website looks great on all devices.

## Requirements

- PHP >= 7.3
- Composer
- Node.js and NPM

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/alizaali94/Vocational-Training-Institute.git
   ```

2. Navigate into the project directory:
```bash
cd vocational-training-site
```

3. Install PHP dependencies:
```bash
composer install
```

4. Copy the .env.example file to .env and configure your environment variables, including the database connection settings.

5. Run database migrations and seed data:
```bash
php artisan migrate --seed
```

6. Serve the application:
```bash
php artisan serve
```

7. Access the application in your web browser at http://localhost:8000.

## Usage
- Visit /admin to access the admin panel and manage courses, students, and other site content.
- Students can register for courses through the public-facing website.
## Contributing
- Contributions are welcome! Please fork this repository, make your changes, and submit a pull request.




