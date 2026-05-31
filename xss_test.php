<?php
header("Content-Type: text/html; charset=utf-8");

$keyword = "";
if (isset($_GET['keyword'])) {
    $str = $_GET['keyword'];
    
    $str = str_ireplace("script", "", $str);
    $str = str_ireplace("on", "", $str);
    $str = str_ireplace("src", "", $str);
    
    $keyword = strtolower($str);
}
?>
<html>
<head><title>XSS 漏洞测试靶场</title></head>
<body>
<center>
    <h2>欢迎来到商品搜索系统</h2>
    <form action="xss_test.php" method="GET">
        <input type="text" name="keyword" value="<?php echo $keyword; ?>" placeholder="输入关键词">
        <input type="submit" value="搜索">
    </form>

    <?php if (isset($_GET['keyword'])): ?>
        <div style="margin-top:20px;">
            <h3>Hello, 你搜索的关键词是: <?php echo $keyword; ?></h3>
        </div>
    <?php endif; ?>
</center>
</body>
</html>