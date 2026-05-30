<html>
<head>
<meta charset="utf-8" />
<title>新闻主页</title>
</head>
<body>
<?php
// ！！！注意：把下面这行的 "你的密码" 替换成你真实的数据库密码，保留双引号 ！！！
$conn = mysql_connect("localhost", "Alghy", "15351qqq"); 
?>
<div align="center">
    <table width="900" border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td height="40">
                <form id="form1" name="form1" method="post" action="loginok.php">
                    <div align="right">用户名:
                        <input name="username" type="text" id="username" size="12" />
                        密码:
                        <input name="password" type="password" id="password" size="12" />
                        <input type="submit" name="Submit" value="登录后台" />
                    </div>
                </form>
            </td>
        </tr>
        <tr><td><hr /></td></tr>
        <tr>
            <td height="300" align="center" valign="top">
                <table width="600" border="1" cellspacing="0" cellpadding="5">
                    <tr bgcolor="#f0f0f0">
                        <td width="100"><div align="center">新闻序号</div></td>
                        <td><div align="center">新闻标题</div></td>
                    </tr>
                    <?php
                    $SQLStr = "select * from news";
                    $result = @mysql_db_query("testDB", $SQLStr, $conn);
                    if ($row = @mysql_fetch_array($result)) {
                        mysql_data_seek($result, 0);
                        while ($row = mysql_fetch_row($result)) {
                    ?>
                    <tr>
                        <td><div align="center"><?php echo $row[0]?></div></td>
                        <td><div align="center"><a href="news.php?newsid=<?php echo $row[0]?>"><?php echo $row[1] ?></a></div></td>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </table>
            </td>
        </tr>
    </table>
</div>
<?php
@mysql_free_result($result);
@mysql_close($conn);
?>
</body>
</html>