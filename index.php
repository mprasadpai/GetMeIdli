<!DOCTYPE HTML>
<html>

<head>
  <title>GetMeIdliSambar</title>

  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="All.css">
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script><base>
  <script type="text/javascript" src="Feedback/FeedBack.js"></script>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine&amp;v1" />
  <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz" />



</head>

<body>

  <div id="main">
    <div id="header">
      <div id="logo">

        <h1>Get Me Idli @ HSR</h1>
        <div class="slogan">Idli delivered in a jiffy...</div>
        <br/>
     </div>

       <div class="quote">
        "Get Idli on click of a button! "
        </div>





      <div id="content">


      <form action="add_order.php" method="get">
      <table class="CSSTableGenerator">
      <tr><td>Order Form</td><tr>
           <tr><td>Name: <input type="text" name="name"></td></tr>
  	<tr><td>Email: <input type="varchar" name="email"></td></tr>
  <tr><td>Number: <input type="int" name="number"></td></tr>
  <tr><td>Address: <input type="varchar" name="address"></td></tr>
  <tr><td>Phone: <input type="int" name="phone"></td></tr>
          <TR><TD><input type="submit"/></TD></TR>
      </table>
      </form>



         <h2>Customer Details</h2>
        <?php
		include ( $_SERVER['DOCUMENT_ROOT'] . '/Order_Tracker/display_order.php');
		showVisitors($visitors);
	?>
                </div>


    </div>





</body>
</html>
