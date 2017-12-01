<?php
@session_start();
if($_SESSION['admin']!='admin')
{
?>
<script type="text/javascript">
window.location='index.php';
</script>
<?php
}
	$id=$_GET['id'];
	include('conn.php');
	$a=mysqli_query($conn,"delete  from st_addproduct where pid=$id");
	?>
	 <script type="text/javascript">
	 window.location='viewproduct.php';
	 </script>
     
