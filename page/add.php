<form method="POST" action="">
	
	<div class="form-control">
		<label>Username</label>
		<input type="text" name="username" class="form-element">
	</div>
	
	<div class="form-control">
		<label>Password</label>
		<input type="text" name="password" class="form-element">
	</div>

	<div class="form-control">
		<label>Status</label>
		<select name="level" class="form-element">
			<option value="user">User</option>
			<option value="administrator">Administrator</option>
		</select>
	</div>

	<input type="submit" name="add" value="Add Data" class="btn">

</form>

<?php 

// jika 
if(isset($_POST['add']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level	  = $_POST['level'];

	$db->insertData('tbuser', $username, $password, $level);
}