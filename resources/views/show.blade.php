<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table border="1" cellpadding="10">
        <tr>
  <th>card_number</th>
  <th>first_name</th>
  <th>last_name</th>
  <th>phone_number</th>
  <th>email</th>
  <th>address</th>
  <th>date_of_birth</th>
 
        </tr>
        @foreach($customer as $value)
    <tr>
         <td>{{$value->card_number}}</td>
        <td>{{$value->first_name}}</td>
        <td>{{$value->last_name}}</td>
        <td>{{$value->phone_number}}</td>
        <td>{{$value->email}}</td>
        <td>{{$value->address}}</td>
        <td>{{$value->date_of_birth}}</td>  
    </tr>
    @endforeach
    </table>

    accounts
    <table border="1" cellpadding="10">
        <tr>
  <th>account_number</th>
  <th>type</th>
  <th>balance</th>
 
        </tr>
        @foreach($accounts as $value)
    <tr>
         <td>{{$value->account_number}}</td>
        <td>{{$value->type}}</td>
        <td>{{$value->balance}}</td>
       
    </tr>
    @endforeach
    </table>

   
    @if(isset($contacts))

    contacts
    <table border="1" cellpadding="10">
        <tr>
  <th>contact_name</th>
  <th>account_number</th>

        </tr>
        @foreach($contacts as $value)
    <tr>
        
         <td>{{$value->contact_name}}</td>
        <td>{{$value->account_number}}</td>
       
    </tr>
    @endforeach
    @endif
    </table>
    <form action="../contact/create" method="get">
          <input type="hidden"  name="customer_id" value="{{$value->customer_id}}" invisible>

          <input type="submit" value="add new contact">
        </form>
   
        
        <h2>send or recieve money</h2>

        <form action="../transaction" method="post">
            @csrf
        <table border="1" cellpadding="10">
            <tr>
      <th>choose from your accounts</th>
      <th>choose reviever from your contacts</th>
      <th>enter amount to transfer</th>
            </tr>
            <tr>
            <select name="accounts" >
             @foreach($accounts as $value)
             <option>select one account</option>
             <option value="{{$value->account_number}}">{{$value->account_number}}</option>
            @endforeach
            </select>

            </tr>
            <tr>
                
                <select name="contacts" >
                    <option>select one contact</option>
                 @foreach($contacts as $value)
                 <option value="{{$value->contact_id}} ">name:{{$value->contact_name}} ,account number:{{$value->account_number}}  </option>
                @endforeach
                </select>
    
             </tr>
             <tr>
                 <label for="amount"></label>
                 <input type="number" name="amount" >
             </tr>
    </table>
    <button type="submit" name="submit">send money</button>
    @if (Session::has('balance'))
   <div class="alert alert-info">{{ Session::get('balance') }}</div>
@endif
        </form>


       recieved transactions
        <table border="1" cellpadding="10">
            <tr>
      <th>your_account_number</th>
      <th>sender_account_number</th>
      <th>amount</th>
      <th>time</th>
      <th>recieved</th>
      <th>accept</th>
      
            </tr>
           
            @foreach($receivedmoney as $transaction)
            @foreach($transaction as $value)
            <tr>
            <td>{{$value->sender_account_number}}</td>
             <td>{{$value->account_number}}</td>
             <td>{{$value->amount}}</td>
             <td>{{$value->created_at}}</td>
             <td> @if($value->flag==1) yes 
                  @else no 
                  @endif
            </td> 
            <td>
                <form action="../transaction/{{$value->transaction_id}}" method="POST">
                    @method('PUT') 
                    @csrf
                    <button name="accept" value="{{$value->transaction_id}}">accept</button>
                </form>
            </td>

            </tr>
             @endforeach
        
        @endforeach
        
        </table>

        send transactions
        <table border="1" cellpadding="10">
            <tr>
      
      <th>your_account_number</th>
      <th>receiver_account_number</th>
      <th>amount</th>
      <th>time</th>
      <th>recieved</th>
      <th>cancel</th>
    
            </tr>
           
            @foreach($sendmoney as $transaction)
            @foreach($transaction as $value)
            <tr>
            <td>{{$value->account_number}}</td>
            <td>{{$value->receiver_account_number}}</td>
             <td>{{$value->amount}}</td>
             <td>{{$value->created_at}}</td>
             <td> @if($value->flag==1) yes 
                  @else no 
                  @endif
            </td> 
            <td>
                <form action="../transaction/{{$value->transaction_id}}" method="POST">
                    @method('PUT') 
                    @csrf
                    <button name="cancel" value="{{$value->transaction_id}}">cancel</button>
                </form>
            </td>
            </tr>
             @endforeach
        
        @endforeach
        
        </table>
   
</body>
</html>