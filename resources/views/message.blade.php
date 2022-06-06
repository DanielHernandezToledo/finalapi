<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Request</title>
</head>
<body>
    <p>New message from: {{ $contact['name'] }}</p>
    <p>E-mail: {{ $contact['email'] }}</p>
    <p>Phone: {{ $contact['phone'] }}</p>
    <p>Message: {{ $contact['message'] }}</p>
</body>
</html>