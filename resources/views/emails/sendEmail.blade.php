<!DOCTYPE html>
<html>
<head>
    <title>Nuova richiesta di contatto</title>
</head>
<body>
    <h1>Richiesta di contatto</h1>
    <p>Nome: {{ $details['name'] }}</p>
    <p>Cognome: {{ $details['surname'] }}</p>
    <p>Email: {{ $details['email'] }}</p>
    <p>Messaggio: {{ $details['message'] }}</p>
</body>
</html>
