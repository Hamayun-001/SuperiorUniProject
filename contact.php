<!doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/contact.css">


<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<div style="color:#999" style="background-color:#999">
        <br><br><br><br><br><br><br><br><br>
        <p align="center" style="color:#999"><h1 align="center"> CONTACT </h1></p>
    </div>
<br><br><br><br>
<div class="container">
  <form action="action_page.php">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">

  </form>
</div>
</body>
</html>
