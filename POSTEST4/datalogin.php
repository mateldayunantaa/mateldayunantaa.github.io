<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <!-- Perbaiki charset yang salah -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA LOGIN</title>
    <link rel="stylesheet" href="datalogin.css">
</head>
<body>
    <div class="container">
    <p>Akun berhasil dibuat!<br>
        Halo <span class="username"><?php echo $_POST["username"]; ?></span>, Welcome<br>
        <span class="name"><?php echo $_POST["name"]; ?></span> <br>
        Your number phone is <span class="phone"><?php echo $_POST["phone"]; ?></span><br>
        Your email address is <span class="email"><?php echo $_POST["email"]; ?></span>
    </p>
    </div>
</body>
</html>
