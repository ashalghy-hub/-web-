<?php
$conn=mysql_connect("localhost", "Alghy", "15351qqq");
mysql_select_db("testDB");
$topic = $_POST['topic'];
$content = $_POST['content'];
$SQLStr = "insert into news(topic, content) values('$topic', '$content')";
// echo $SQLStr;
$result=@mysql_query($SQLStr);
mysql_close($conn);

if ($result) {
?>
    <script>
        alert("insert success");
        window.location.href="sys.php";
    </script>
<?php
} else {
?>
    <script>
        alert("insert failed");
        history.back();
    </script>
<?php
}
?>