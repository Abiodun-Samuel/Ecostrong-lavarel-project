<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Ecostrong Company</title>
</head>

<body>
    <h3> Subject: {{ $details['subject'] }} </h3>

    <p> <b>Name:</b> {{ $details['name'] }}</p>
    <p> <b>Email:</b> {{ $details['email'] }} </p>
    <p> <b> Phone Number:</b> {{ $details['phone'] }} </p>
    <p> <b>Message:</b> {{ $details['message'] }} </p>

    <b> <a href="mailto:{{ $details['email'] }}"> Reply {{ $details['name'] }} </a> </b>


</body>

</html>
