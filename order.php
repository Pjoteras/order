<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zamówienie online</title>
</head>
<body>
    <h1>Zamówienie online</h1>
    <form action="summary.php" method="post">
        <label for="rogal">
            Ile rogali (0.99 PLN/szt):
        </label> 
        <input type="text" name="rogale" >
        <br>
        <br>
        <label for="bulki">
            Ile bułek (1.29 PLN/szt): 
        </label>
        <input type="text" name="bulki" >
        <br>
        <br>
        <label for="soki">
            Ile soków (4.9 PLN/L): 
        </label>
        <input type="text" name="soki" >
        <br>
        <br>
        <input type="submit" value="Wyślij zamówienie">
    </form>
</body>
</html>
