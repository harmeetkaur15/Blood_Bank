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

$id=$_POST['hid'];
$n=$_POST['hname'];
$a=$_POST['haddress'];
$p=$_POST['hphone'];


include('conn.php');
mysqli_query($conn,"update st_addhospital set hname='$n', haddress='$a', hphone='$p' where hid=$id");
?>
<script type="text/javascript">

window.location.href='viewhospital.php';
</script>

