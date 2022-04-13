<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="{{asset('/css/edit_style.css')}}"  />
      
</head>
<body>
    <header class="header">
        <nav class="nav">
          <div>
              <img class="pt-2"
                  src="../img/bank_icon.png"
                  alt="Bank logo"
              />
              <h2>Transfer Easy</h2>
          </div>
          
          <ul class="nav__links">
            <li class="nav__item">
              <a class="nav__link" href="../../index">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link nav__link--btn" href="../../index"
                >Log out</a>
            </li>
          </ul>
        </nav>
    </header>
    <div class=grid-container>
        <div grid-item>





    <h1>Add New Contact</h1>

   
    
    <form class="update_form" action="/contact" method="post">
        @csrf
        <label for="contact_name">contact name</label><br>
        <input type="text" name="contact_name" ><br>

        <label for="account_number"> account_number</label><br>
        <input type="text" name="account_number" ><br>
        <input type="hidden" name="customer_id" value=" {{$customer_id}}"  >
        <input  type="submit" value="Add Contact">
        </form>
    </div>
  {{--   <form action="/contact" method="post">
        {{ csrf_field() }}
        contact name: <input type="text" name="contact_name">
        <br><br>
        account_number:<input type="text" name="account_number">
        <br><br>
        <input type="hidden" name="customer_id" value=" {{$customer_id}}"  >
        <input type="submit">
        </form>    
     --}}
</body>
</html>

{{-- <form action="../{{$contact->id}}" method="post">
    @method('PUT') 
    @csrf
Name: <input type="text" name="name" value="{{$contact->name}}">
<br><br>
Description:<textarea name="description" cols="60" rows="20" >{{$contact->description}}</textarea>
<br><br>
<input type="submit">
</form>    
</body> --}}
