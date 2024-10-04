<!doctype html>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Dream Riser Builders</title>
    </head>

  <body>
  <div class= "container">
  <form method="post">
  <div class="form-group">
    <label>Email address</label>
    <input type="text" class="form-control" id="email" placeholder="Enter Your Email">
  </div>

  <div class="form-group">
    <label for="pass">Password</label>
    <input type="password" class="form-control" id="pass" placeholder="Enter Your Password">
  </div>

  <div class="form-group"> 
<div class="item1">
    <label for="FirstName">First Name</label>
    <input type="text" class="form-control" id="FirstName" placeholder="Enter Your First Name">

    <label for="LastName">Last Name</label>
    <input type="text" class="form-control" id="LastName" placeholder="Enter Your Last Name">
</div>

<div class="form-group">
    <label for="address">Address</label>
    <input type="text" class="form-control" id="address" placeholder="Enter Your Address">
  </div>

<div class="form-group">
<label for="role">Job</label>
    <select id="role" name="role">
      <option placeholder="Staff Roles">Roles</option>
      <option value="Admin">Admin</option>
      <option value="logistics">Logistics</option>
      <option value="onsite">On-Site</option>
      <option value="purchasing">Purchasing</option>
      <option value="warehousing">Warehouse</option>
    </select>

</div>

</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>  

  </body>
</php>