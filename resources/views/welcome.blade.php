<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form id="send-form" action="/send" method="post">
        @csrf
        <label for="sender">Tên: </label>
        <input type="text" name="sender" id="sender">
        <label for="content">Nội dung: </label>
        <input type="text" name="content" id="content"> 
        <button id="send">Gửi thông báo</button>
    </form>

    <div>
        <h2>Thông báo</h2>
        <div id="notis">

        </div>
    </div>

</body>
<script src="{{ asset('app.js') }}"></script>
</html>