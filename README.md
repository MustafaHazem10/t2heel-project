# Ta2heel Project

## Overview

Ta2heel is a simple PHP web project designed to support job seekers, graduates, and employment providers through registration forms and informational pages.

## Project Structure

- `index.php` - Basic login page.
- `index1.php` - Main landing page with site information and navigation.
- `jobseekers.php` - Job seeker registration form.
- `career.php` - Career consultant request form.
- `employment.php` - Employment services provider form.
- `courses.php` - Courses listing page.
- `insert.php` - Handles user login/register submission.
- `insert-jobseekers.php` - Saves job seeker form data to the database.
- `insert-career.php` - Saves career consultation request data.
- `insert-employment.php` - Saves employment provider form data.
- `connect.php` - MySQL database connection settings.

## Requirements

- PHP-capable web server (e.g. XAMPP, WAMP)
- MySQL or MariaDB
- Web browser

## Database Setup

1. Start MySQL using XAMPP/WAMP.
2. Create a database named `t2heel`.
3. Create tables based on project needs. Example schema:

```sql
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) NOT NULL,
  password VARCHAR(255) NOT NULL
);

CREATE TABLE missions (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255),
  age VARCHAR(50),
  location VARCHAR(255),
  skills TEXT,
  hobbies TEXT,
  Q1 TEXT,
  Q2 TEXT,
  Q3 TEXT,
  Q4 TEXT,
  Q5 TEXT,
  Q6 TEXT,
  Q7 TEXT,
  Q8 TEXT,
  Q9 TEXT,
  Q10 TEXT,
  Q11 TEXT
);
```

> You may need to adjust table definitions based on actual project requirements.

## Run the Project

1. Copy the project folder into `htdocs` for XAMPP or `www` for WAMP.
2. Start Apache and MySQL.
3. Open your browser and navigate to:
   - `http://localhost/t2heel-project-main/index1.php` for the main site page
   - `http://localhost/t2heel-project-main/index.php` for login

## Notes

- Database connection details are in `connect.php`.
- Some form handling scripts use direct SQL query interpolation and are not fully protected from SQL injection.
- Update connection credentials in `connect.php` if your MySQL username or password differs.

## Suggested Improvements

- Use prepared statements properly to prevent SQL injection.
- Hash passwords using `password_hash` and verify with `password_verify`.
- Add pages to display stored user or form submission data.
- Improve file structure and naming for clearer functionality.

---

Ta2heel Web Project
