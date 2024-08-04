# 👄 Speech to Text Recognition using Web Speech API 🤖

<img width="1679" alt="UI" src="https://github.com/user-attachments/assets/7e5771bb-29c9-46de-8f37-20613eafdaef">


https://github.com/user-attachments/assets/15f2dad2-20ea-40c5-86eb-0bcb72c6f655

#### This project converts speech to text continuously using the Web Speech API and stores the converted text in a MySQL database.

### Prerequisites

- [XAMPP](https://www.apachefriends.org/index.html) (Apache, MySQL, PHP)

### Step 1: Set Up XAMPP

### Step 2: Create Database and Table

1. Open `phpMyAdmin` at `http://localhost/phpmyadmin`.
2. Create a new database named `speechtotext`.
3. Create a table named `commands` with the following columns:
   - `id` (INT, Primary Key, Auto Increment)
   - `command` (VARCHAR(255))
   - `timestamp` (TIMESTAMP, default `CURRENT_TIMESTAMP`)

### Step 3: Create the Files
1. Create and place the `index.html`, `style.css`, `store_text.php`, and `README.md` files in the `htdocs/speech-to-text` directory of your XAMPP installation

### Step 4: Open the Web Interface
1. Open your browser and navigate to `http://localhost/speech-to-text/index.html`.

### Step 5: Test the Continuous Speech-to-Text
1. Speak into your microphone and observe the continuous conversion of speech to text
2. Check the database to ensure the text is being stored correctly

## File Descriptions

- [**index.html**](index.html): The main HTML file that includes the speech recognition script and displays the interface
- [**style.css**](style.css): The CSS file that styles the interface
- [**store_text.php**](store_text.php): The PHP script that stores the transcribed text into the MySQL database

