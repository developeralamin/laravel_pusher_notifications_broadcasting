<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="https://getbootstrap.com/docs/5.0/examples/blog/blog.css">

    <style>
      

    </style>
  </head>
   <body>
    
    <main class="container">
      <p>Dear Username,{{ $user->name }}</p>
      <p>Your account has been created . Please click the following to activate your account</p>
      <a href="{{ url('verificationEmailUseToken',$user->email_verification_token) }}">
          {{ url('verificationEmailUseToken',$user->email_verification_token) }}
      </a>

      <br/>
      <p>Thanks </p>
      
    </main>

  </body>
</html>