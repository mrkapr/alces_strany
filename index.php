<!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<title>Přihlášení</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
<style>
body {
    font-family: 'Poppins', sans-serif;
    background: #111;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
form {
    display: flex;
    flex-direction: column;
    gap: 12px;
    width: 260px;
}
input, button {
    padding: 10px;
    border-radius: 10px;
    border: none;
}
button {
    background: #444;
    color: white;
    cursor: pointer;
}
</style>
</head>

<body>
<form action="login.php" method="post">
    <input type="text" name="username" placeholder="Uživatelské jméno" required>
    <input type="password" name="password" placeholder="Heslo" required>
    <button type="submit">Přihlásit se</button>
</form>
</body>
</html>
