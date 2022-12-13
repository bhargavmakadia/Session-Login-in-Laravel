<html>
<head>
  <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <form method="POST" action="<?php echo e(URL::to('/formprocess')); ?>">
        <?php echo csrf_field(); ?>
        <input type="text" name="txt1" placeholder="Enter Name" required>
        <br/>
        <br/>
        <input type="submit" name="submit" value="Login">
    </form>
</body>
</html>
<?php /**PATH C:\Users\HP\session-login\resources\views/login.blade.php ENDPATH**/ ?>