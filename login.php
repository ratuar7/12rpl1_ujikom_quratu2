<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="login-box">
        <h1>FORM LOGIN</h1>

        <form  method="post">
            
            <p>Username</p>
            <input type="text" name="username" required>

            <p>Password</p>
            <input type="password" name="password" required>

            <p>Login Sebagai</p>
            <select name="level" required>
                <option value="">-- Pilih Role --</option>
                <option value="admin">Admin</option>
                <option value="siswa">Siswa</option>
            </select>

            <br><br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
