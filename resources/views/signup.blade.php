<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="{{asset('/css/signup_style.css')}}"  />
</head>
<body>
    <div class="modal hidden">
        <button class="btn--close-modal">&times;</button>
        <h2 class="modal__header">
          Open your online banking account <br />
          in just <span class="highlight">5 minutes</span>
        </h2>
        <form class="modal__form" action="../index" method="get">
          <label>card number</label>
          <input type="number"  name="card_number"/>
          <label>First Name</label>
          <input type="text" name="first_name" />
          <label>Last Name</label>
          <input type="text" name="last_name" />
          <label>Phone Number</label>
          <input type="text" name="Phone_number" />
          <label>Email</label>
          <input type="email" name="email" />
          <label> Address</label>
          <input type="email" name=“address/>
          <label> date of birth</label>
          <input type="date" name=“date_of_birth/>
          <button class="btn" >Sign up</button>
        </form>
      </div>
     {{ Session::flash('signup', "you successfully registered we will send you log in information");}}
      
</body>
</html>