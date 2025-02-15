# IT Test Univerre

## 📝 Project Description
This project is a landing page developed using **Laravel** and **Tailwind CSS**. It provides a modern and responsive interface to showcase Univerre's services.

---

## 🚀 Technologies Used
- **Laravel** (PHP Framework)
- **Tailwind CSS** (Utility-first CSS Framework)
- **Vite.js** (Asset Compilation)
- **Blade** (Laravel's Template Engine)

---

## 📂 Project Structure
```
📁 it-test-univerre
│── 📁 app/               # Backend Laravel code
│── 📁 resources/
│   ├── 📁 views/         # Blade templates (HTML)
│   │   ├── home.blade.php
│   │   ├── sections/
│   │       ├── letter.blade.php
│   │       ├── contact.blade.php
│   ├── 📁 css/           # Tailwind CSS files
│── 📁 public/            # Public assets (compiled CSS, JS)
│── 📁 routes/            # Laravel routes (web.php)
│── 📁 storage/           # Laravel storage and cache
│── tailwind.config.js    # Tailwind CSS configuration
│── package.json          # Frontend dependencies (Vite.js, Tailwind)
│── composer.json         # Laravel dependencies
│── .env                  # Environment variables
```

---

## ⚡ Installation and Setup

### 🔹 1️⃣ **Clone the Project**
```sh
git clone https://github.com/axelker/univerre
cd univerre
```

### 🔹 2️⃣ **Install Laravel Dependencies**
```sh
composer install
```

### 🔹 3️⃣ **Create the `.env` File**
Copy the example file and set up your environment:
```sh
cp .env.example .env
php artisan key:generate
```

### 🔹 4️⃣ **Install Tailwind CSS and Vite.js**
```sh
npm install
```

### 🔹 5️⃣ **Run Laravel**
```sh
php artisan serve
```
📌 **Access the site at** `http://127.0.0.1:8000`

### 🔹 6️⃣ **Run Vite (Compile CSS & JS)**
```sh
npm run dev
```

---

## 🎨 **Customization**
- **CSS**: Modify styles in `resources/css/app.css`
- **HTML Sections**: Modify `resources/views/sections/`
- **Text & Content**: Modify `resources/views/home.blade.php`

---

## 📌 Useful Commands
| **Command** | **Description** |
|-------------|----------------|
| `php artisan serve` | Starts the Laravel server |
| `npm run dev` | Starts Vite in development mode |
| `npm run build` | Compiles assets for production |
| `php artisan config:clear` | Clears Laravel configuration cache |
| `php artisan route:list` | Displays all available routes |

---

## 🛠 Deployment
1. **Compile Assets**
```sh
npm run build
```
2. **Use a Server like Apache or Nginx with PHP 8+**
3. **Set Up `.env` for Production**
```env
APP_ENV=production
APP_DEBUG=false
```

---

