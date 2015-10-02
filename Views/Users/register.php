<?= $model->error ? $model->error : '' ;?>

<form action="" method="post">
    <input type="text" name="username" placeholder="Username"/>
    <input type="password" name="password" placeholder="Password"/>
    <input type="email" name="email" placeholder="email" />
    <input type="submit" value="Register" />
</form>