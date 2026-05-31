<?php
header("Content-Type: text/html; charset=utf-8");

$keyword = "";
if (isset($_GET['keyword'])) {
    $raw_input = $_GET['keyword'];
    
    $secure_input = htmlspecialchars($raw_input, ENT_QUOTES, 'UTF-8');
    
    $keyword = $secure_input;
}
?>
<html>
<head><title>完美的 XSS 防御示例</title></head>
<body>
<center>
    <h2>安全搜索系统（已开启高级 XSS 防御）</h2>
    <form action="xss_secure.php" method="GET">
        <input type="text" name="keyword" value="<?php echo $keyword; ?>" placeholder="输入关键词" style="width:300px;">
        <input type="submit" value="安全搜索">
    </form>

    <?php if (isset($_GET['keyword'])): ?>
        <div style="margin-top:20px; border: 1px solid #ccc; width: 50%; padding: 10px;">
            <h3>Hello, 你搜索的关键词是: <?php echo $keyword; ?></h3>
        </div>
    <?php endif; ?>
</center>
</body>
</html>