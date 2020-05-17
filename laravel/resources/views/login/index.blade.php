<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户登录</title>
</head>
<body>
    <form action="{{ route('login') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div>
            <input type="text" name="username" placeholder="用户名">
        </div>
        <div>
            <input type="password" name="password" placeholder="密码">
        </div>
        <div>
            <input type="file" name="file">
        </div>
        <div>
            <input type="submit" >
        </div>
    </form>
</body>
</html>