<!DOCTYPE html>
  <html>
  
    <style>
  body {
    margin: 0;
    padding: 0;
    background: url(home.jpg) ;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    font-family: sans-serif;
  }
  .login {
    position: fixed;
    top: 50%;
    left: 40%;
    transform: translate(-30%, -50%);
    background: rgba(233, 230, 230, 0.707);
    padding: 60px;
    width: 270px;
    box-shadow: 0px 0px 25px 10px rgb(106, 104, 104);
    border-radius: 15px;
  }
  .avatar {
    font-size: 30px ;
    background: #ffffffc2;
    width: 100px;
    height: 100px;
    line-height: 100px;
    position: fixed;
    left: 50%;
    top: 11%;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 50%;
  }
  .login h2 {
    text-align: center;
    color: rgb(0, 0, 0);
    font-size: 30px;
    font-family: sans-serif;
    letter-spacing: 1px;
    padding-top: 25%;
    margin-top: -20px;
  }
  .login h3 {
    text-align: center;
    color: rgb(9, 6, 6);
    font-size: 14px;
    font-family: sans-serif;
    letter-spacing: 1px;
    padding-top: 0;
    margin-top: -20px;
  }
  .login p {
    text-align: center;
    color: rgb(86, 84, 84);
    font-size: 16px;
    font-family: sans-serif;
    letter-spacing: 0,5px;
    padding-top: 5%;
    margin-top: -20px;
  }
  .box-login {
    display: flex;
    justify-content:space-between;
    margin: 10px;
    border-bottom: 2px solid rgb(195, 195, 193);
    padding: 8px 0;
  }
  .box-login i {
    font-size: 23px;
    color: rgb(0, 0, 0);
    padding: 5px 0;
  }
  .box-login input {
    width: 85%;
    padding: 5px 0;
    background: none;
    border: none;
    outline: none;
    color: rgb(239, 15, 15);
    font-size: 18px;
  }
  .box-login input::placeholder {
    color: rgb(25, 23, 23);
  }
  .btn-login
  .box-login input:hover{
    background: rgba(10, 10, 10,s 0.5);
  }
  .btn-login {
    margin-left: 10px;
    margin-bottom: 20px;
    background-color: rgba(19, 161, 3, 0.992); 
    border: 1px solid rgb(255, 255, 255);
    width: 92.5%;
    padding: 15px;
    color: rgb(251, 251, 251);
    font-size: 18px;
    letter-spacing: 1px;
    cursor: pointer;
    border-radius: 10px; 
    font-size: 12px;
    font-weight: bold;
  }
  .btn-login:hover{
    background: rgb(8, 149, 3);
  }
  .bottom {
    margin-left: 30px;
    margin-right: 30px;
    display: flex;
    justify-content: space-between;
  }
  .bottom a {
    color: rgb(0, 0, 0);
    font-size: 14px;
    text-decoration: none;
  }
  .bottom a:hover {
  text-decoration: underline;
  }
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>Login</title>
   
    <link rel="stylesheet" href="assets/style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <div class="login">

          <div class="avatar">
            <img src="1.png" style="width: 100px;" alt="Avatar">       
           </div>

          <h2><b>Pembayaran SPP</b></h2>
          <h3>Smk Ma'arif Walisongo Kajoran</h3>
          <br>
          <p>Masukan <b>Username</b> Dan <b>Password</b></p>

          <div class="box-login">
            <i class="fa fa-user"></i>
            <input type="text" placeholder="Username">
          </div>

          <div class="box-login">
            <i class="fas fa-lock"></i>
            <input type="text" placeholder="Password">
          </div>

          <button type="submit" name="login" class="btn-login">SIGN IN</button>
          <div class="bottom">
            <a href="#">© 2024 Smk Ma'arif M-w9</a>
          </div>
      </div>
  </head>
  </html>