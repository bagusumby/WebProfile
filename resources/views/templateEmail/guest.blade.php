<!DOCTYPE html>
<html lang="en">

  <head>
  </head>

  <body>
    <div class="container">
      <div class="header">
        <h1>Hi, {{ $name }}</h1>
      </div>
      <div class="content">
        <p>Thank you for getting in touch with us. Here is the message we received from you:</p>
        <p>{!! $guest_message !!}</p>
      </div>
      <div class="footer">
        Test
      </div>
    </div>
  </body>

</html>
