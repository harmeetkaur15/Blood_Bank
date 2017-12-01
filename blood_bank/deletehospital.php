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
?>
<?php
	$id=$_GET['id'];
	include('conn.php');
	$a=mysqli_query($conn,"delete  from st_addhospital where hid=$id");
	?>
    <script type="text/javascript">

window.location.href='viewhospital.php';
</script>