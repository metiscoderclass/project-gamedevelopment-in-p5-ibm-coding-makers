<!DOCTYPE html>	
<html>
  <head>
        <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="index.css" type="text/css" />  
      <script type="text/javascript" src="index.js"></script>
  </head>
  <body>
    <div class="user">
    <header class="user__header">
        <h1 class="user__title">Registreren</h1>
    </header>
    
    <form class="form">
        <div class="form__group">
            <input type="text" placeholder="Username" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="email" placeholder="Email" class="form__input" />
        </div>
        
        <div class="form__group">
            <input type="password" placeholder="Password" class="form__input" />
        </div>
        
        <button class="btn" type="button" onclick="register()">Register</button>
    </form>
</div>
  </body>
</html>
