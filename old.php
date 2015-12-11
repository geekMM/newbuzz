<html><head><link rel="stylesheet" type="text/css" href="bootstrap.css"></head>
<body><div class="panel panel-primary"><p class="panel-heading">
<button class="btn btn-warning">Call</button><button class="btn btn-primary">Pause</button><button class="btn btn-danger">Disconnect</button>
<button class="btn btn-info">Record</button></p></div></br></br><div class="row"><div class="col-sm-3"></div>
<div class="col-sm-2">
<?php
$username = "root";
$password = "buzzworks";
$hostname = "127.0.0.1"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password)
  or die("Unable to connect to MySQL");
$selected = mysql_select_db("world",$dbhandle)
  or die("Could not select examples");
$record=mysql_query('select * from state');
?>
  <form class="form-group" method="post" action="process.php">
        Your Name<input name="userName" id="userName" type="text"></br></br>
          Address    <textarea name="userAddr" id="userAddr"  type="textarea" style="width: 181px; height: 81px;"></textarea></br></br>
          State        <select class="form-control" name="userState" id="userState"><?php
while($row = mysql_fetch_array($record))
{?>
<option value="<?php echo $row['StateID'];?>"<?php if(($row['StateID'])==10) echo " selected='selected'";?>"><?php echo $row['StateName'];?></option><?php } ?></select></br></br> <input type="Submit" class="btn btn-success" value="Submit"></br></br><input type="hidden"></form>
</div></div></body></html>
