
# Gestion des Erreurs

##  Importance of Error Management

- **Improved User Experience:**  
  Good error handling provides clear and understandable error messages, preventing user frustration.

- **Prevention of Service Interruptions:**  
  Properly handling errors helps avoid crashes or service disruptions.

- **Simplified Maintenance:**  
  Effective error management allows developers to quickly identify and fix issues.


# Enable Error Display in PHP for XAMPP and Laragon Users  

## Steps for XAMPP Users  

1. **Locate the `php.ini` File**  
   - Navigate to the XAMPP installation directory (e.g., `C:\xampp`).  
   - Open the `php` folder.  
   - Check for the `php.ini` file:  
     - If it doesn’t exist, look for:  
       - `php.ini-development`  
       - `php.ini-production`  
     - Rename `php.ini-development` to `php.ini`.  

2. **Edit the `php.ini` File**  
   - Open the file using a text editor (e.g., Notepad++, VS Code).  
   - Search for the following settings:  
     ```ini
     display_errors
     display_startup_errors
     log_errors
     ```  
   - Remove the semicolon (`;`) at the beginning of these lines (if present) and set their values to `On`:  
     ```ini
     display_errors = On  
     display_startup_errors = On  
     log_errors = On  
     ```  

3. **Restart the Apache Server**  
   - Open the XAMPP Control Panel.  
   - Click **Stop** next to Apache, then click **Start** to restart it.  

---

## Steps for Laragon Users  

1. **Locate the `php.ini` File**  
   - Navigate to the Laragon installation directory (e.g., `C:\laragon`).  
   - Open the folder:  
     ```
     bin\php\php[version]
     ```  
     (Replace `[version]` with your PHP version).  
   - Look for the `php.ini` file.  

2. **Edit the `php.ini` File**  
   - Open the file using a text editor (e.g., Notepad++, VS Code).  
   - Search for the following settings:  
     ```ini
     display_errors  
     display_startup_errors  
     log_errors  
     ```  
   - Remove the semicolon (`;`) at the beginning of these lines (if present) and set their values to `On`:  
     ```ini
     display_errors = On  
     display_startup_errors = On  
     log_errors = On  
     ```  

3. **Restart the Server**  
   - Open the Laragon Control Panel.  
   - Click **Stop** to stop the server, then click **Start** to restart it.  

---

## Create Test Files  

1. **File 1: `index.php`**  
   - Content:  
     ```php
     <?php  
     require 'config.php';  
     echo $undefinedVariable; // This will trigger an undefined variable notice  
     ?>  
     ```  

2. **File 2: `config.php`**  
   - Content:  
     ```php
     <?php  
     ini_set('display_errors', 1);  // enable display errors [true]
     ini_set('display_startup_errors', 1); 
     error_reporting(E_ALL); // displaying all types of errors(ex: error, warning, notice)
     ?>  
     ```  

---

## Verify the Configuration  

1. Place the two files (`index.php` and `config.php`) in the root folder of your web server (e.g., `htdocs` in XAMPP or `www` in Laragon).  
2. Open `index.php` in your browser (e.g., `http://localhost/index.php`).  
   - If an error message appears about the undefined variable, the configuration was successful.  

---

## Important Notes  
- **Only enable error display in development environments.** Displaying errors in production is not recommended due to security risks.  
- If you encounter issues, feel free to ask for help!  


# Importance of Using `config.php` for Error Display

1. **Centralized Configuration**: Manage error settings in one place for the whole application.
2. **Flexibility Between Environments**: Set different error display modes for development and production.
3. **Consistency Across Files**: Ensure uniform error settings across all files.
4. **Error Display Control at Runtime**: Dynamically manage error settings with `ini_set()` and `error_reporting()`.
5. **Easier Debugging**: Ensure visibility of errors during development, even in different files.
6. **Code Reusability**: Reuse error configuration across multiple files for consistency and ease of maintenance.





**Exception**
**ErrorException(transform errors fatal warning to exceptions)**
**DivisionByZeroError**
**TypeError**

// $e->getMessage(): Retrieves the error message.
// $e->getCode(): Retrieves the error code.
// $e->getFile(): Retrieves the file where the exception was thrown.
// $e->getLine(): Retrieves the line number.