<!doctype html>
<html>
    <head>
        <title>Thank you</title>
    </head>
    <body>
        Inquiry from: {{ $contact->name }}
        <p> Email: {{ $contact->email }} </p>
        <p> Message: {{ $contact->message }} </p>
    </body>
</html>

