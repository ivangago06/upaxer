<link rel="stylesheet" href="css/style.css" />

<form action="iniciar_sesion.php" method="post" id="forma" name="forma">
<div class="login-form">
     <h1>UpaxEr</h1>
     <div class="form-group ">
       <input type="text" class="form-control" placeholder="Username " id="UserName" name="username" />
       <i class="fa fa-user"></i>
     </div>
     <div class="form-group log-status">
       <input type="password" class="form-control" placeholder="Password" id="Passwod" name="password" />
       <i class="fa fa-lock"></i>
     </div>
      <span class="alert">Invalid Credentials</span>
      <a class="link" href="#">Lost your password?</a>
     <button type="submit" class="log-btn" >Log in</button>
     
    
</div>
</form>