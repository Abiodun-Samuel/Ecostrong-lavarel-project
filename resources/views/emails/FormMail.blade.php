<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecostrong Company</title>
</head>

<body>


    <h3> Registration Form Submitted by {{ $formDetails['surname'] }}</h3>

    <p> <b>Name:</b> {{ $formDetails['surname'] }} {{ $formDetails['othernames'] }} </p>
    <p> <b>Email:</b> {{ $formDetails['email'] }} </p>
    <p> <b> Phone Number:</b> {{ $formDetails['phone'] }} </p>
    <p> <b>Address:</b> {{ $formDetails['address'] }} </p>

    <b> <a href="mailto:{{ $formDetails['email'] }}"> Reply {{ $formDetails['surname'] }} </a> </b>


</body>

</html>
