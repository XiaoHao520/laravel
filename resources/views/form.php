
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
</head>
<body>
<form method="post" action="/add">

    <input name="username"  type="text">
    <input type="submit" value="提交">


  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

</form>
</body>
</html>