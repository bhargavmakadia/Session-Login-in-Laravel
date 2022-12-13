<html>
<head>
    <title>Homepage</title>
</head>
<body>
    <p class="text-center" id="msg"><?php echo e($sessionmsg); ?></p>
    <form action="<?php echo e(URL::to('/logoutsession')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <input type="submit" name="logout" value="Logout" id="logout">
    </form>
</body>
</html>
<?php /**PATH C:\Users\HP\session-login\resources\views/home.blade.php ENDPATH**/ ?>