<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    <title>设置</title>
</head>

<body>
    <h1>PHP设置</h1>
    <form action="update_config.php" method="post">
        <label for="key">配置键：</label>
        <input type="text" name="key" id="key" required />
        <br />
        <label for="value">配置值：</label>
        <input type="text" name="value" id="value" required />
        <br />
        <input type="submit" value="更新配置" />
    </form>
</body>

</html>

