<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>account page</title>
    <link rel="stylesheet" href="css/dashboard_style.css"  />
   
</head>
<body>
    <header class="header">
        <nav class="nav">
        <div>
            <img class="pt-2"
                src="img/bank_icon.png"
                alt="Bankist logo"
            />
            <h2>Transfer Easy</h2>
        </div>
          
          <ul class="nav__links">
            <li class="nav__item">
              <a class="nav__link" href="index.html">Home</a>
            </li>
            <li class="nav__item">
              <a class="nav__link nav__link--btn" href="index.html"
                >Log out</a>
            </li>
          </ul>
        </nav>
    </header>
        <h1> My profile </h1>
        <h2>Welcome: {{$customer->first_name}} , {{$customer->last_name}}</h2>

        <div class="grid-container">
            <div class="grid-item">
            <h3 class="grid-header">Card Number</h3>
            <h3 class= "grid-content">{{$customer->card_number}}<br></h3> 
             
            </div>
             <div class="grid-item">
              
            <h3 class="grid-header">Date Of Birth</h3>
            <h3 class= "grid-content">{{$customer->date_of_birth}}<br> 
            </div>
            <div class="grid-item">
               
            <h3 class="grid-header">Phone Number</h3>
            <h3 class= "grid-content">{{$customer->phone_number}}<br></h3>
            <form action="/edit">
              <button class="edit">Edit</button>  
            </form> 
             
            </div>
           
            <div class="grid-item">
              
            <h3 class="grid-header">Email</h3>
            <h3 class= "grid-content">{{$customer->email}}<br></h3> 
            <form action="../edit" method="get">
            {{csrf_field()}}
              <button class="edit">Edit</button>  
            </form>  
            </div>
            <div class="grid-item">
             
            <h3 class="grid-header">Address</h3>
            <h3 class= "grid-content">{{$customer->address}}</h3> 
            <form action="/edit">
              <button class="edit">Edit</button>  
            </form>   
            </div>
           
          </div>
          <h1>banking</h1>
          @foreach($accounts as $account)
          <div class="grid-container">
            <div class="grid-item1">
            <h3 class="grid-header1">Account Number</h3>
            <h4 class= "grid-content1">{{$account->account_number}}<br></h4> 
            </div>
            <div class="grid-item1">
                <h3 class="grid-header1">Type</h3>
                <h4 class= "grid-content1">{{$account->type}}<br></h4> 
                </div>
                <div class="grid-item1">
                    <h3 class="grid-header1">Balance </h3>
                    <h4 class= "grid-content1">{{$account->balance}}</h4>
                    </div>
             
          </div>
          @endforeach

        <h1>My Contact List</h1>
          <div class="table">
           <table>
               <thead>
               <tr>
                   <th>Name</th>
                   <th>Account Number</th>
               </tr>
            </thead>

            @if(isset($contacts)) 
            <tbody>
              @foreach($contacts as $value)
               <tr>
                <td>{{$value->contact_name}}</td>
                <td>{{$value->account_number}}</td>
               </tr>
               @endforeach
            </tbody>
            @endif 
           </table>
          
          <div class="grid-item1" style="margin-left: 30px">
          <form action="../contact/create" method="get">
            <input type="hidden"  name="customer_id" value="{{$value->customer_id}}" invisible>
  
            <input type="submit" class="edit" value="add new contact">
          </form>
          </div>
        </div> 
<br><br>

          <h1> Send Money</h1>
          <div class="table">
            <form action="transaction" method="post">
              @csrf
            <table>
                <thead>
                <tr>
                    <th>Option</th>
                    <th>FROM</th>
                    <th>TO</th>
                    <th>AMOUNT</th>
                    <th>Transfer</th>
                   
                </tr>
             </thead>
             <tbody>
                <tr>
                    <td><input type ="checkbox" name=checkbox></td>
                 <td>
                  <select name="accounts" >
                    @foreach($accounts as $value)
                    <option>select from your accounts</option>
                    <option value="{{$value->account_number}}">{{$value->account_number}}</option>
                   @endforeach
                   </select>
                 </td>
                 <td>
                  <select name="contacts" >
                    <option>select from your contacts</option>
                 @foreach($contacts as $value)
                 <option value="{{$value->contact_id}} ">name:{{$value->contact_name}} ,account number:{{$value->account_number}}  </option>
                @endforeach
                </select>
                 </td>
                 <td><input type="number" name="amount"/></td>
                 <td><button type="submit"  name="submit" >Send Money</button></td>
                </tr>
             </tbody>
            </table>
          </form>
           </div>

           <h1>Money Send transactions</h1>

           <div class="table">
            <form method="Post" id="my_form"></form>
          <table>
              <thead>
              <tr>
                  <th>Option</th>
                  <th>Contact Name</th>
                  <th>Account Number</th>
                  <th>Amount</th>
                  <th>Confirm</th>
                 
              </tr>
           </thead>
           <tbody>
              <tr>
                  <td><input type ="checkbox" name=checkbox></td>
               <td>Tom</td>
               <td>1234567</td>
               <td>$300</td>
               <td><button type="button" form="my_form">Accept</button></td>
              </tr>
           </tbody>
          </table>
         </div>

          <footer class="footer">
            <ul class="footer__nav">
              <li class="footer__item">
                <a class="footer__link" href="#">About</a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="#">Terms of Use</a>
              </li>
              <li class="footer__item">
                <a class="footer__link" href="#">Contact Us</a>
              </li>
            </ul>
            
            <p class="footer__copyright">
              &copy; Copyright by Blue Team. 
            </p>
          </footer>
      
    
</body>
</html>