<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (empty($_POST["name"])) {
        $username = "Name is required";
      } else {
        $username = $_POST["name"];
      }
    
    if (empty($_POST["email"])) {
    $mail = "Email is required";
    } else {
    $mail = $_POST["email"];
    }
};


?>
<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="email">E-mail:</label><br>
            <input type="text" id="email" name="email"><br>
            <input type="submit" value="Send">
        </form>

        <p>This should send something to the file? idk lol</p>

        <h1>Data:</h1>
        <p><? echo $username; ?></p>
        <p><? echo $mail; ?></p>


    </body>
</html>
</body>
</html>