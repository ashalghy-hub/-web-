<meta charset="utf-8" />
<?php
$loginok=0;
// ！！！注意：这里也要改密码 ！！！
$conn = mysql_connect("localhost", "Alghy", "15351qqq");
$username = $_POST['username'];
$pwd = $_POST['password'];

$SQLStr = "SELECT * FROM userinfo where username='$username' and password='$pwd'";
$result = @mysql_db_query("testDB", $SQLStr, $conn);

if ($row = @mysql_fetch_array($result)) {
    $loginok=1;
}
@mysql_free_result($result);
@mysql_close($conn);

if ($loginok==1) {
?>
    <script>
        alert("登录成功 (login success)!");
        window.location.href="sys.php";
    </script>
<?php
} else {
?>
    <script>
        alert("登录失败 (login failed)，账号或密码错误!");
        history.back();
    </script>
<?php
}
?>