<!DOCTYPE html>
<html>
<head>
<title>register product</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<h2>REGISTER PRODUCTS</h2>
<form action = "/store" method = "post" class="form-group" style="width:70%; margin-left:15%;" action="/action_page.php">

  <label for="fname">Id:</label><br>
  <input type="text" id="ID1" name="Id" ><br>
  <label for="Name">Name:</label><br>
  <input type="text" id="Name" name="name" ><br>
  <label for="fname">Unit:</label><br>
  <input type="text" id="unit" name="unit" ><br>
  <label for="fname">Quantity:</label><br>
  <input type="text" id="quantity" name="quantity" ><br>
  <label for="Name">Price:</label><br>
  <input type="text" id="price" name="price" ><br><br>
  <input type="submit" value="Register Product">
</form> 



</body>
</html>
