<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
</head>
<body>
    <p>Nama User : {{$users[0]->name}}</p>
    <p>Email : {{$users[0]->email}}</p>
    <p>Password: {{$users[0]->password}}</p>
    <p>Total user : {{$totalUser[0]->total}}</p>
</body>
</html>