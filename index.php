<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
/*
This PHP code snippet demonstrates the use of several predefined PHP arrays, often referred to as superglobals, which are used to access various types of data sent to the server or stored by the server. Here's a brief explanation of each:

1. $_SERVER: This array contains information about the server environment and the current request, such as headers, paths, and script locations. It can be used to retrieve information like the IP address of the server ($_SERVER['SERVER_ADDR']), the current script name ($_SERVER['SCRIPT_NAME']), and more.

2. $_GET: This array contains variables sent to the current script via the URL parameters (i.e., in the query string). For example, if your URL is http://example.com/index.php?id=5, $_GET['id'] would contain the value 5.

3. $_POST: This array contains variables sent to the current script via HTTP POST method when a form is submitted with method="post". You can access form data submitted with POST using this array, like $_POST['username'] to access a form field named "username".

4. $_REQUEST: This array contains the contents of both $_GET, $_POST, and $_COOKIE. It can be used to access data regardless of the request method (GET or POST).

5. $_FILES: This array contains information about uploaded files via HTTP POST method. It allows you to access properties such as file name, file type, and file size of the uploaded file.

6. $_COOKIE: This array contains variables sent to the current script via HTTP cookies. It can be used to retrieve cookie values set by the client browser.

7. $_SESSION: This array contains variables stored in the current session. Session variables are used to store user-specific information across multiple pages.

8. $_ENV: This array contains environment variables passed to the PHP script. These variables are typically set by the web server or the operating system.

It's important to note that when accessing data from these superglobal arrays, you should validate and sanitize the data to prevent security vulnerabilities such as SQL injection or cross-site scripting (XSS) attacks.
*/


    $_SERVER[""];
    $_GET[""];
    $_POST[""];
    $_REQUEST[""];
    $_FILE[""];
    $_COOKIE[""];
    $_SESSION[""];
    $_ENV[""];
    ?>
    

</body>
</html>