<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WT Assignment 3 by Sanskar 0120180381</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Restaurant!</h1>
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Food Hub</a>
          </div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="#" onclick="home()">Home</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle"  href="#"onclick="menu()">Menu</a>
            </li>
            <li><a href="https://sanskarzulu.github.io/MyFoodBlog/">Follow us</a></li>
            <li><a href="https://sanskarzulu.github.io/MyFoodBlog/">About Us</a></li>
          </ul>
        </div>
      </nav> 
    <div id="Home" >
        <p1>
            ID: <span id="id"></span><br>
            Short Name: <span id="shortName"></span><br>
            Name: <span id="Name"></span><br>
            Description: <span id="description"></span><br>
            Price Small: <span id="priceSmall"></span><br>
            Price Large: <span id="priceLarge"></span><br>
            Small portion name: <span id="smallPortionN"></span><br>
            Large portion name: <span id="largePortionN"></span><br>
        </p1>
    </div>
    <div id="Menu" style="display:none;">
      <select id="dropdownmenu"placeholder="Search...">
        <option selected="selected" value="-1"onclick="resetting()">None</option>

      </select>

    </div>
    <script src="jquery-3.5.1.min.js"></script>
    <script src="script.js" defer></script>
</body>
</html>