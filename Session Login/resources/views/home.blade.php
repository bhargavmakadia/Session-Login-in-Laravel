<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <p class="text-center" id="msg">{{$sessionmsg}}</p>
    <form action="{{ URL::to('/logoutsession') }}" method="POST">
        @csrf
        <input type="submit" name="logout" value="Logout" id="logout">
    </form>
</body>
</html>
