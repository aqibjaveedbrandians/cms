<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>User View</h1>
    <h1>User Name {{ $name }}</h1>
    <p>{{ $users['name'] }}</p>
    <p>{{ $users['email'] }}</p>
    <p>{{ $users['phone'] }}</p>
</body>
</html>