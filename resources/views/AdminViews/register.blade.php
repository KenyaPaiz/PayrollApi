<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Boss</title>
</head>
<body>
    <form action="{{ route('boss.register') }}" method="POST">
        @csrf
        <input type="text" name="name" >
        <input type="text" name="lastName" >
        <input type="text" name="address" >
        <input type="number" name="phoneNumber" >
        <input type="text" name="userName" >
        <input type="text" name="password" >

        <input type="submit" name="submit" >
    </form>
</body>
</html>