<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecostrong Company</title>
</head>

<body>

    <h3> Application Form Submitted by {{ $applicants['surname'] }}</h3>

    <p> <b>Name:</b> {{ $applicants['surname'] }} {{ $applicants['othernames'] }} </p>
    <p> <b>Email:</b> {{ $applicants['email'] }} </p>
    <p> <b> Phone Number:</b> {{ $applicants['phone'] }} </p>
    <p> <b>Address:</b> {{ $applicants['address'] }} </p>

    <b> <a href="mailto:{{ $applicants['email'] }}"> Reply {{ $applicants['surname'] }} </a> </b>

</body>

</html>
