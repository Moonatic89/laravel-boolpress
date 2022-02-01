<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
</head>

<body>

    <h4>Hi Admin,</h4>

    <p>You received a new message.</p>

    <em>From: {{$data['name']}}</em>
    <em>Email: {{$data['email']}}</em>
    <em>Object: {{$data['object']}}</em>

    <em>Message</em>
    <p>{{$data['body']}}</p>


    Thanks,
    {{ config('app.name') }}

</body>

</html>