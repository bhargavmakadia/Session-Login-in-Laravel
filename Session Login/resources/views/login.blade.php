<html>
<head>
  <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="{{ URL::to('/formprocess') }}">
        @csrf
        <input type="text" name="txt1" placeholder="Enter Name" required>
        <br/>
        <br/>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
