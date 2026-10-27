<?php

    $cookie_name = 'password';

    /* Your password */
    $cookie_value = 'ใส่password';

    /* Redirects here after login */
    $redirect_after_login = 'index.php';

    /* Will not ask password again for */
    //$remember_password = strtotime('+30 days'); // 30 days

    if (isset($_POST['password']) && $_POST['password'] == $cookie_value) {
        //setcookie("password", $password, $remember_password);


        setcookie($cookie_name, $cookie_value, time() + (86400 * 5), "/"); // 86400 = 1 day




        // Open the page
        header('Location: ' . $redirect_after_login);

        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Password protected</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div style="text-align:center;margin-top:50px;">
        You must enter the password to view this content.
        <br/><br/>
        <form method="POST">
            <input type="password" name="password">

            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>