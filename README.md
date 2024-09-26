# School Management System

A comprehensive school management program built with Laravel, designed to facilitate the management of school operations, including student records and examinations.

## Features

- Admin dashboard for managing users and data
- Student login for accessing exam materials
- Database seeding for initial setup

## Getting Started

### Prerequisites

- PHP >= 7.3
- Composer
- Laravel >= 8.x
- MySQL or other compatible database

### Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/YudistiraAriesSetiawan/school-system-management.git
    ```
### Database Migration

Run the following command in your terminal to create the necessary tables and seed the initial data:

```bash
php artisan migrate --seed
```
### Access the Admin Page: Open your browser and enter the following URL:

```bash
your-localhost/school-admin
```

### Login with this account
- Username: admin@mail.com
- Password : 123456
  
### Access the Exam Page: To log in as a student, go to:

```bash
your-localhost/exam
```
- Username: Enter the student's name.
- Class: Select the class corresponding to the student's name.
