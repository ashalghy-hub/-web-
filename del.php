<?php
$conn=mysql_connect("localhost", "Alghy", "15351qqq");
mysql_select_db("testDB");
$newsid = $_GET['newsid'];
$SQLStr = "delete from news where newsid=$newsid";
// echo $SQLStr;
$result=@mysql_query($SQLStr);
mysql_close($conn);

if ($result) {
?>
    <script>
        alert("delete success");
        window.location.href="sys.php";
    </script>
<?php
} else {
?>
    <script>
        alert("delete failed");
        history.back();
    </script>
<?php
}
?>