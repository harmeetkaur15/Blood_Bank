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

$id=$_POST['eid'];
$n=$_POST['name'];
$a=$_POST['address'];
$p=$_POST['phone'];


include('conn.php');
mysqli_query($conn,"update st_employee set name='$n', address='$a', phone='$p' where eid=$id");
?>
<script type="text/javascript">

window.location.href='viewemployee.php';
</script>

