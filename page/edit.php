<?php 
	// inisialisasi id
	$id = $_GET['id'];

	//ambil hanya satu data pada database
	$data = $db->getSingleData('tbuser', 'id_user', $id);
?>

<form method="POST" action="">
	
	<div class="form-control">
		<label>Username</label>
		<input type="text" name="username" class="form-element"  value="<?php echo $data['username'] ?>">
	</div>
	
	<div class="form-control">
		<label>Password</label>
		<input type="text" name="password" class="form-element" value="<?php echo $data['password'] ?>">
	</div>

	<div class="form-control">
		<label>Status</label>
		<select name="level" class="form-element">
			<option value="user" <?php if($data['level'] == "user"){ echo "selected"; } ?>>User</option>
			<option value="administrator" <?php if($data['level'] == "administrator"){ echo "selected"; } ?>>Administrator</option>
		</select>
	</div>

	<input type="submit" name="update" value="Update Data" class="btn">

</form>

<?php 
// update data Ketika tombol update data di klik
if(isset($_POST['update']))
{
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level	  = $_POST['level'];

	// update data
	$db->updateData('tbuser', $username, $password, $level, 'id_user', $id);
	
}

?>