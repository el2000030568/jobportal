<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<style> 
body{
  background-image: url('img1.jpg');
  background-size: cover;
}
form{
  background-color: #fff;
   margin-top: 6em;
   margin-left: 40em;
   margin-right: 2em;
   padding: 30px;
   box-shadow: 5px 5px 8px 5px #888888;
}
</style>    
<title> Register    </title>
</head>
<body>
    <div class="container">
    <form action="config.php">
    <div class="mb-3">
    <label for="exampleInputName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="name">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPhonenumber" class="form-label">Phonenumber</label>
    <input type="number" class="form-control" id="exampleInputEmail1" name="phone_no">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3">
    <label for="exampleInputConfrompassword" class="form-label">confrom Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
  <br>
  Already Register <a href="login.php"> Login </a>
</form>
    </div>


</body>
</html>