<html>
<head>
<meta charset="utf-8" />
<title>新闻详情</title>
</head>
<body>
<div align="center">
    <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr><td><h2>查看新闻</h2><hr /></td></tr>
        <tr>
            <td height="300" align="center" valign="top"><p>&nbsp;</p>
            <?php
            // ！！！注意：这里也要改密码 ！！！
            $conn = mysql_connect("localhost", "Alghy", "15351qqq");
            $newsid = $_GET['newsid'];
            $SQLStr = "select * from news where newsid=$newsid";
            $result = @mysql_db_query("testDB", $SQLStr, $conn);
            if ($row = @mysql_fetch_array($result)) {
                mysql_data_seek($result, 0);
                while ($row = mysql_fetch_row($result)) {
                    echo "<h3 style='color:blue;'>$row[1]</h3><br>";
                    echo "<div style='text-align:left; width:600px;'>$row[2]</div><br>";
                }
            }
            @mysql_free_result($result);
            @mysql_close($conn);
            ?>
            <br><a href="index.php">返回主页</a>
            </td>
        </tr>
    </table>
</div>
</body>
</html>