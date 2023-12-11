

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Inserisci e Valuta se ci sono parole da censurare</h1>
     <form action="evaluation.php" method="GET">
        <label for="username">paragrafo</label>
        <input type="text" id="username" name="paragraph">
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
        <button type="submit">Invia</button>
     </form>
</body>
</html>