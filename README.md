# Person-Information-Management-webpage
<p align="center">


<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white"/>

<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white"/>

<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white"/>

<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black"/>

<img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white"/>


<img src="https://img.shields.io/badge/License-Educational-blue?style=for-the-badge"/>

</p>

## Overview

This project is a simple web application developed using **HTML, CSS, PHP, JavaScript, and MySQL**. It allows users to add personal information (Name and Age), store it in a MySQL database, display all stored records in a table, and change each user's status using a Toggle button.

The project demonstrates the integration between a front-end user interface and a back-end database using PHP and MySQL.

---

</p>
## Project interface

<img width="1895" height="902" alt="Screenshot 2026-07-28 005627" src="https://github.com/user-attachments/assets/27c8fe08-3d41-4d8f-878d-9704d9befe4b" />
<img width="1892" height="896" alt="Screenshot 2026-07-28 005646" src="https://github.com/user-attachments/assets/c6896112-553f-4819-88d1-7d76e516b811" />


---

## Features

- Simple and user-friendly interface.
- Add a new person by entering:
  - Name
  - Age
- Store submitted data in a MySQL database.
- Automatically assign a default status value (0) to new records.
- Display all records in a table.
- Toggle the status value between **0** and **1**.
- Responsive and modern dark-themed interface.

---

## Technologies Used

- HTML5
- CSS3
- PHP
- JavaScript
- MySQL
- phpMyAdmin
- InfinityFree Hosting

---

## Project Structure

```
Project Folder
│
├── fo.php          # Main page (User Interface + Display Records)
├── in.php          # Insert data into the database
├── toggle.php      # Toggle status value
├── style.css       # User interface design
└── README.md
```

---

## Database Structure

### Database

```
personinfo
```

### Table

```
user
```

### Columns

| Column | Type | Description |
|---------|------|-------------|
| ID | INT | Primary Key (Auto Increment) |
| name | VARCHAR | Person Name |
| age | INT | Person Age |
| status | TINYINT | Status value (0 or 1) |

---

## How It Works

### Step 1

The user opens the main page (**fo.php**).

### Step 2

The user enters:

- Name
- Age

and clicks **Submit**.

### Step 3

The form sends the data to **in.php** using the **POST** method.

### Step 4

The PHP script connects to the MySQL database.

### Step 5

The entered information is inserted into the **user** table.

### Step 6

After successful insertion, the user is redirected back to **fo.php**.

### Step 7

All records stored in the database are displayed in a table.

### Step 8

Clicking the **Toggle** button changes the **status** value:

```
0 → 1
1 → 0
```

The page is then refreshed to display the updated value.

---

## File Description

### fo.php

Responsible for:

- Displaying the user interface
- Showing the input form
- Retrieving records from the database
- Displaying the records in a table

---

### in.php

Responsible for:

- Receiving form data
- Connecting to the database
- Inserting new records
- Redirecting back to the main page

---

### toggle.php

Responsible for:

- Receiving the selected record ID
- Updating the status value
- Redirecting back to the main page

---

### style.css

Responsible for:

- Dark modern interface
- Form styling
- Table styling
- Button styling
- Responsive layout

---

## Installation

1. Upload all project files to your web server.
2. Create a MySQL database.
3. Create the **user** table.
4. Update the database credentials inside:

- fo.php
- in.php
- toggle.php

5. Open:

```
fo.php
```


---

## Learning Outcomes

This task helped in understanding:

- HTML Forms
- CSS Styling
- PHP Programming
- MySQL Database Operations
- PHP & MySQL Integration
- HTTP POST Requests
- Dynamic Web Pages

---

