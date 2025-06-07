### 📄 Page Descriptions

#### 🏠 `index.php` – Homepage

The main landing page of the PayPal Redesign Project. It introduces the redesigned interface and provides a welcoming overview of the site. Includes a modern header, navigation menu, and user-friendly layout to improve the user experience.

#### 📝 `Sign Up.php` – User Registration

This page allows new users to create an account. It includes:

* A registration form with fields like Full Name, Email, Password, etc.
* Client-side and server-side validation
* Password strength recommendations
* Stores user data securely in the database

#### 🔐 `Login.php` – User Login

The login page for registered users. It provides:

* Email and password login form
* Authentication logic using PHP and MySQL
* Error handling for incorrect credentials
* Session management for secure user login

#### 🛠️ `Services.php` – Services Offered

Showcases a list of services provided by the redesigned PayPal platform. Each service includes:

* A title, brief description, and icon/image
* A clean, responsive grid layout
* Hover effects and animations for better engagement

#### 📬 `Contact Us.php` – Contact Page

This page enables users to send messages or inquiries. Features include:

* A contact form (Name, Email, Message)
* Form submission handled via `contact_process.php`
* Secure data handling and storage in MySQL
* Success/failure messages with automatic redirection

#### ⚙️ `contact_process.php` – Form Submission Handler

Handles the backend logic for the Contact Us page. It:

* Validates and sanitizes user input
* Uses prepared statements to prevent SQL injection
* Inserts messages into the `contact_messages` database table
* Displays success or error feedback
* Redirects the user back to the contact form

#### 📎 `footer.php` – Reusable Footer

A reusable footer included across all pages using PHP `include()`. It contains:

* Company or project branding
* Basic contact info or copyright
* A clean design consistent with the overall theme

---


