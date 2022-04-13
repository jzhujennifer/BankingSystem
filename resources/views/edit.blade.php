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
                  src="../../img/bank_icon.png"
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

    <h1>Change Address</h1>
    <form class="old_form"action ="edit.html" method="get">
    <label for="address">Current Address</label><br>
    <input type="text" name="address" value="{{$customer->address}}">
    </form>
    
    <form class="update_form"action ="../{{$customer->customer_id}}" method="post">
        @method('PUT') 
        @csrf
        <label for="address">New Address</label><br>
        <input type="text" name="address" ><br>
        <input  type="submit" value="Update_address">
        </form>
    </div>
    <div grid-item>
        <h1>Change Email Address</h1>
        <form class="old_form "action ="edit.html" method="get">
        <label for="Email">Current Email</label><br>
        <input type="email" name="email" value="{{$customer->email}}">
        </form>
        <form class="update_form"action ="../{{$customer->customer_id}}" method="post">
            @method('PUT') 
            @csrf
            <label for="address">New Email Address</label><br>
            <input type="email" name="email" ><br>
            <input  type="submit"  value="Update_email">
            </form>
        </div>
        <div grid-item>
            <h1>Change Phone Number</h1>
            <form class="old_form"action ="edit.html" method="get">
            <label for="phoneNumber">Current Phone Number</label><br>
            <input type="text" name="phone_number" value="{{$customer->phone_number}}">
            </form>
            
            <form class="update_form"action ="../{{$customer->customer_id}}" method="post">
                @method('PUT') 
                @csrf
                <label for="phoneNumber">New Phone Number</label><br>
                <input type="text" name="phone_number" ><br>
                <input  type="submit"  value="Update_phone">
                </form>
            </div>
     </div>
    
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
