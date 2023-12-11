

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>Inserisci il paragrafo e Valuta se ci sono parole da censurare</h1>
     <form action="evaluation.php" method="GET">
        <label for="message"></label>
        <textarea name="message" id="message" rows="4" cols="50">Insereisci qua il paragrafo da controllare</textarea>
        <button type="submit">Invia</button>
     </form>
</body>
</html>