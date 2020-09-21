<?php
$message="";
if(count($_POST)>0) {
	$conn = mysqli_connect("localhost","root","root","testdb");
	$result = mysqli_query($conn,"SELECT * FROM users WHERE name ='" . $_POST["userName"] . "' and password = '". $_POST["password"]."'");
	$count  = mysqli_num_rows($result);
	if($count==0) {
		$message = "Invalid Username or Password!";
	} else {
		$message = "You are successfully authenticated!";
	}
}
?>





<form name="frmUser" action="" method="post">
  <div class="message"><?php if($message !=""){echo $message;} ?></div>
  <span><pre><?php print_r($_SERVER) ?></pre></span>
  <span></span>
  <table>
    <tr>
      <td>Enter Login Details</td>
    </tr>
    <tr>
      <td>
        <input type="text" name="userName" placeholder="User Name">
      </td>
    </tr>
    <tr>
      <td>
        <input type="password" name="password" placeholder="Password">
      </td>
    </tr>
    <tr>
      <td>
        <button type="submit" name="submit" >Login</button>
      </td>
    </tr>
  </table>
</form>