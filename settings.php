<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="UTF-8" />
    <title>设置</title>
</head>

<body>
    <h1>PHP设置</h1>
    <form action="update_config.php" method="post" id="fm" target="_blank">
        <!-- <label for="key">配置键：</label> -->
        <label>配置键：</label>
        开启一言<input type="radio"value="use_hitokoto"name="key">
        开启更新<input type="radio"value="use_update"name="key">
        <br />
        <label for="value">配置值：</label>
        是<input type="radio"value="true"name="value">
        否<input type="radio"value="false"name="value">
        <br />
        <input type="submit" value="更新配置" />
    </form>
</body>

</html>