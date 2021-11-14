<?php
    include "koneksi.php";
    if($_POST['id']) {
        $id = $_POST['id'];      
        $sql = mysqli_query($connection, "SELECT * FROM keluarga WHERE id = $id");
       
        while ($result = mysqli_fetch_array($sql))
        {

		?>
	<form action="keluarga_edit.php" method="post">
        <input type="hidden" name="id" value="<?php echo $result['id']; ?>">
        
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name="nama"  value="<?php echo $result['nama']; ?>">
            </div>

		    <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" name="umur" value="<?php echo $result['umur']; ?>">
            </div>

			<div class="form-group">
                <label>Gender </label>
                <select class="form-control" name="gender" aria-label="Default select example">
                    <option value="Laki-laki"<?php if($result["gender"] == 'Laki-laki'){echo "selected=\"selected\"";}?>>Laki-laki</option>
                    <option value="Perempuan" <?php if ($result["gender"] == 'Perempuan'){echo "selected=\"selected\"";}?>>Perempuan</option>
                </select>
            </div>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button class="btn btn-primary" type="submit">Update</button>
				</div>
			 </form>     
        <?php } }
?>