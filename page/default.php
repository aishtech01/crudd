<?php 
// deklarasi variabel untuk switch 
$action = @$_GET['action'];

switch ($action) {
	// tambah ada 
	case 'add':
		require_once 'add.php';
	break;

	// edit data
	case 'edit':
		require_once 'edit.php';
	break;

	// hapus data
	case 'delete':
		$id = $_GET['id'];
		$db->deleteData("tbuser", "id_user", $id);
	break;

	// tampilan default bila parameter $_GET['action'] tidak ada
	default:
	?>
		<table class="table">
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Password</th>
				<th>Action</th>
			</tr>

			<?php
				// variabel untuk nomor barus
				$no = 1; 
				
				// mengambil data dari database
				foreach ($db->getData("tbuser") as $data): 
			?>
				<tr>
					<td align="center"><?php echo $no ?></td>
					<td align="center"><?php echo $data['username']; ?></td>
					<td align="center"><?php echo $data['password']; ?></td>
					<td align="center">
						<a href="index.php?action=edit&id=<?php echo $data['id_user']; ?>" class="btn btn-yellow">Edit</a> 
						<a href="index.php?action=delete&id=<?php echo $data['id_user']; ?>" class="btn btn-orange">Delete</a>
					</td>
				</tr>	
			<?php 
				// tambahkan nilai variabel no dengan satu selama nilai data sama dengan true
				// bila seluruh data telah di load berhenti menambah kan nilai variabel no
				$no++;
				endforeach; 
			?>
		
		</table>
	<?php
		break;
}