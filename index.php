<<<<<<< HEAD
<?php
	include_once 'koneksi.php';
	 if(isset($_GET['delete_id'])){
	 	$sql_query="DELETE FROM kampus WHERE no=".$GET['delete_id'];
		mysql_query($sql_query);
		header("Location: $_SERVER[PHP_SELF]");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#12c8ef;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
<script>
	function edit_id(id){
		if(confirm('sure to edit ?')){
			window.location.href='simpan.php?edit_id='+id;
			}
		}
		
		function edit_id(id){
			if(confirm('sure to edit ?')){
				window.location.href='index.php?delete_id='+id;
				}
			}
			</script>	
</head>
<body>
<div class="Container">
 <!--Start Bagian Header-->
  <header>
    <h1>Operasi CRUD</h1>
  </header>
  		<!--End bagian header-->
		<!--start bagian sideNav-->
  <nav>
    <ul>
      <li><b>MENU</b></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
    </ul>
  </nav>
  >
  <article>
    <table border = "1" width="75%" height="0" border="1" align="center">
      <tr>
        <th><p><a href="../../../web2-Rosita-14111226/tambah.php">
            <button type="submit"> TAMBAH </button>
        </a> </p></th>
      </tr>
      </tr>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>
	  <?php
	  	$sql_query = "SELECT * FROM mahasiswa";
		$sql_result_set = mysql_query ($sql_query);
		
		if (mysql_num_rows ($result_set) > 0) {
			while ($row = mysql_feych_row($result_set) ) {
		?>
		<tr>
			<td><?php echo $row[1];?></td>
			<td><?php echo $row[2];?></td>
			<td><?php echo $row[3];?></td>
			<td><a hraf="javascript:edit_id('<?php echo $row[0];?>')">Edit</a></td>
			<td><a hraf="javascript:delete_id('<?php echo $row[0];?>')">Delete</a></td>
		</tr>
		<?php
			}
		}
		else {
			?>
			<tr>
			<td></td>
			</tr>
			<?php
			}
			?>			
    </table>	
  </article>
  <footer>Rosita_14.111.226</footer>
</div>
</body>
</html>
=======
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Operasi CRUD</title>
<style>
div.container {
	width:100px;
	border: 1px solid gray;
}
header, footer {
	padding: 1em;
	color:#FFFFFF;
	background-color:#12c8ef;
	clear:left;
	text-align :center;
}
nav {
	float:left; 
	max-width: 160px;
	margin:0;
	padding:1em;
}
nav ul {
	list-style-type:none;
	padding:0;
}
nav ul a{
	text-decoration:none;
}
artitle {
	margin-left:170px;
	border-left:1px solid gray;
	padding:1em;
	overflow:hidden;
}
</style>
</head>
<body>
<div class="Container">
  <header>
    <h1>Operasi CRUD</h1>
  </header>
  <nav>
    <ul>
      <li><b>MENU</b></li>
      <li><a href="#">Menu 1</a></li>
      <li><a href="#">Menu 2</a></li>
      <li><a href="#">Menu 3</a></li>
    </ul>
  </nav>
  >
  <article>
    <table width="75%" height="0" border="1" align="center">
      <tr>
        <th><p><a href="../../../Users/User/Documents/file/TUGAS/web-operasi-crud/tambah.php">
            <button type="submit"> TAMBAH </button>
        </a> </p></th>
      </tr>
      <tr>
        <th><p><a href="../../../Users/User/Documents/file/TUGAS/web-operasi-crud/tambah.php">
            <button type="submit">DELETE </button>
        </a></p>
          </th>
      </tr>
      <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Nim</td>
        <td>Alamat</td>
        <td>Aksi</td>
      </tr>
      <tr>
        <td><p>01</p></td>
        <td><p>Rosita</p></td>
        <td><p>14.111.226</p></td>
        <td><p>Jl. Buah batu</p></td>
        <td><p>-</p></td>
      </tr>
    </table>
	
	
	
  </article>
  <footer>Rosita_14.111.226</footer>
</div>
</body>
</html>
>>>>>>> 3770b40558536fbf53d9152ed72b8441d7f82b0d
