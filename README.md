✨QueerReads✨

QueerReads is a web application developed with Laravel that aims to facilitate the discovery, organization, and discussion of Queer literatures.
The platfowm allows users to manage books, organize them into categories, create personal reading lists, and share reviews in a clean, inclusive and user-friendly enviroment.

---

🌈 Project Motivation

Finding Queer literature can often be challenging due to poor categorization and lack of visibility in traditional platforms. ✨QueerReads✨ was designed to address this problem by providing:

-A curated space for queer books
-Personalized reading lists
-Inclusive user profiles (including pronouns)
-A simple and easy to understand user interface

---

📚 Main Features

    ⭐ User Authentication
        -User registration and login (Laravel Breeze)
        -Profile editing
        -Account deletion
        -Optional pronouns field

    ⭐ Books Management (CRUD)
        -Create, read, update and delete books
        -Each book belongs to a category
        -Books include:
            -Title
            -Author
            -Publication year
            -Description
            -Category

    ⭐ Categories
        -Categories to classify books (fiction, autobiography, history, etc)
        -Filter books by category

    ⭐ Personal Reading List
    Each user can add boooks to their personal list with a reading status:
        -'to_read'
        -'reading'
        -'finished'

    ⭐ Reviews & Ratings
        -Reviews and ratings can only be added when a book is marked as finished
        -Ratings are on a 1-5 scale
        -Reviews are visible on the book detail page

    ⭐ Search
        -Search books by title or author

---

🧱 Database Design (MER)

The database is designed following a relational model:
    -Main Entities
        **User**
        **Book**
        **Category**
        **UserBook** (pivot table for personal reading lists)

    -Relationships
        **User** can have many Books through UserBook
        **Book** belongs to one Category
        **Book** can appear in many Users' reaging lists
        **UserBook** table stores:
            -reading status
            -rating
            -review

---

🛠 Technologies Used

- Laravel 12
- PHP 8
- MySQL
- Laravel Breeze (authentication)
- Blade (templating)
- Tailwind CSS (styling)
- Git & GitHub (version control)

---

🎨 UI & UX (User Interface & User Experience)

-Minalist and modern design
-Dark background with floating white cards
-Consistent layout across all views
-Accessible and inclusive design choices
-Responsive layout using Tailwind CSS

---

🔀 Git Workflow

The project follows a GitFlow-inspired workflow:

-'main': final, stable version (delivered)
-'develop': integration branch
-'feature/*': individual features (UI, auth, books, etc)

All changes were developed in feature branches, merged into 'develop', and finally merged into 'main'.

---

🚀 Installation & Setup

### Requirements
- PHP 8+
- Composer
- MySQL
- Node.js & npm

### Steps
```bash
git clone https://github.com/AlexBeltran31/QueerReads.git
cd QueerReads
cp .env.example .env
composer install
php artisan key:generate
touch database/database.sqlite
php artisan migrate --seed
npm install
npm run dev
php artisan serve
php artisan key:generate --force

## Usuario de prueba

Email: admin@queerreads.com
Password: password



💜 Author
Developed by Alex Beltrán
Academic project – Web Development with Laravel