<!DOCTYPE html>
<html>
<head>
    <title>Verification Email</title>
</head>

    <body>
         <div style="max-width: 600px; margin: 0 auto; background-color :black"  class="email-container">
             <h4  valign="top" align="center" style="color: white; padding-top: 20px">Welcome to MathayoFunds </h4>
             <div width="100" height="100" valign="top" align="center">
                 <div class="contentEditableContainer contentImageEditable">
                     <div class="contentEditable" align='center'>
                         <img src="{{asset('mat_logo.png')}}" alt='Logo'
                              data-default="placeholder"/>
                     </div>
                 </div>
             </div>
             <h5  valign="top" align="center" style="color: orange; padding-top: 20px">Mathayo Funds Support Service </h5>
             <div style="max-width: 600px; margin: 0 auto; background-color : #23272b"  class="email-container">
                 <div width="200"  align="center">
                     <br>
                     <p style="color: white">
                         <strong>Dear {{$user->username}},</strong><br>
                         <br/>
                         Kindly click on the link below to verify your email
                         address <br><br>
                         <a href="{{route('verify-account', ['token' => $user->token])}}" style="display: block;
                            width: 115px;
                            height: 25px;
                            background: orange;
                            padding: 10px;
                            text-align: center;
                            border-radius: 5px;
                            color: white;
                            font-weight: bold;
                            line-height: 25px;
                            text-decoration: none"
                            >
                             Verify Email</a>
                     </p>
                     <br>
                 </div>
             </div>
             <div style="max-width: 600px; margin: 0 auto; background-color : black"  class="email-container">
                 <div width="200"  align="center">
                     <br>
                     <h5 style="color: white">
                         <strong>Contact Address:</strong><br>
                         <br/>
                         4 Salako street. Magodo-Isheri, Isheri Magodo, Kosofe, Lagos
                         <br>
                         +2348038103697
                     </h5>
                     <br>
                     <p style="color: white">&copy; 2020 MathayoFunds. All Rights Reserved</p>
                     <br>
                 </div>
             </div>
         </div>
    </body>

</html>
