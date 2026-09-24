# User Management System

A simple web-based **User Management System** built using **HTML, CSS, JavaScript, AJAX, PHP, and MySQL**. The application demonstrates CRUD (Create, Read, Update, Delete) operations for managing user records.

## 🚀 Features

* Add new users
* Display user records
* Edit/update user information
* Delete user records
* CRUD operations using PHP and MySQL
* AJAX-based requests without full page reloads
* Simple and responsive user interface
* MySQL database integration

## 🛠️ Technologies Used

* **HTML5** – Structure
* **CSS3** – Styling and layout
* **JavaScript** – Client-side functionality
* **AJAX** – Asynchronous server requests
* **PHP** – Backend/server-side logic
* **MySQL** – Database management
* **XAMPP** – Local development environment

## 📂 Project Structure

```text
User-Management-System/
│
├── index.php
├── css/
│   └── style.css
├── js/
│   └── script.js
├── ajax/
│   └── ...
├── php/
│   └── ...
└── database/
    └── database.sql
```

> The exact file structure may vary depending on the current project files.

## ⚙️ How to Run the Project

### 1. Install XAMPP

Download and install **XAMPP** on your computer.

### 2. Start Apache and MySQL

Open the XAMPP Control Panel and start:

* Apache
* MySQL

### 3. Clone the Repository

```bash
git clone https://github.com/ArjunKumarYadav/User-Management-System.git
```

Move the project into the XAMPP `htdocs` folder:

```text
C:\xampp\htdocs\User-Management-System
```

### 4. Create the Database

Open **phpMyAdmin**:

```text
http://localhost/phpmyadmin
```

Create a database for the project and import the provided `.sql` file if available.

### 5. Configure Database Connection

Update the PHP database connection file with your local MySQL credentials.

Example:

```php
$conn = mysqli_connect("localhost", "root", "", "user_management");
```

### 6. Run the Application

Open your browser and visit:

```text
http://localhost/User-Management-System/
```

## 🔄 CRUD Operations

| Operation | Description                    |
| --------- | ------------------------------ |
| Create    | Add a new user                 |
| Read      | Display user records           |
| Update    | Edit existing user information |
| Delete    | Remove a user record           |

## 🎯 Project Purpose

This project was developed to practice and demonstrate:

* PHP backend development
* MySQL database operations
* CRUD functionality
* AJAX requests
* JavaScript DOM manipulation
* Frontend and backend integration

## 📸 Screenshots

Add screenshots of the application here to demonstrate the user interface and functionality.

## 👨‍💻 Author

**Arjun Kumar Yadav**

GitHub: [ArjunKumarYadav](https://github.com/ArjunKumarYadav)
# User-Management-System
