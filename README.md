

# 📦 Laravel Livewire Examples

This repository contains practical examples of using **Laravel Livewire 3** to build dynamic, real-time applications. The current project includes:

- ✅ Product creation form with Livewire
- ✅ File upload with validation
- ✅ File download section with search & pagination
- ✅ Clean and responsive UI (Bootstrap)

---

## 🖼️ Screenshot

![Livewire App UI](https://github.com/user-attachments/assets/e2874b11-bce6-4a55-a4bb-98ff168074a4)

> _Rename your screenshot file to `livewire-app-ui.png` and place it in the root of your repo so it renders above._

---

## ✨ Features

- Livewire Components:
  - `ProductForm` – Create product with name, price, and details
  - `PhotoUpload` – Upload photos/files
  - `DownloadTable` – Download file list with pagination and search
- Real-time interaction with no page reloads
- Laravel 10+ backend with MySQL/SQLite
- Bootstrap 5 styling

---

## ⚙️ Tech Stack

- PHP 8.2
- Laravel 10 / 11
- Livewire 3
- MySQL / SQLite
- Bootstrap 5

---

## 🚀 Getting Started

To run the project locally:

```bash
git clone https://github.com/lavirana/Laravel-Livewires-examples.git
cd Laravel-Livewires-examples
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve


