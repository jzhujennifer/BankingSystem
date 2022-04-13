<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<form action="/contact" method="post">
{{ csrf_field() }}
contact name: <input type="text" name="contact_name">
<br><br>
account_number:<input type="text" name="account_number">
<br><br>
<input type="hidden" name="customer_id" value=" {{$customer_id}}"  >
<input type="submit">
</form>    

</body>
</html>