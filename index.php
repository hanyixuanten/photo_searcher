<!DOCTYPE html>
<?php
include "config/config.php";
?>
<html lang="zh-CN">
<link rel="stylesheet" href="./index.css">

<head>
    <meta charset="UTF-8" />
    <title>图片搜索</title>
</head>

<body>
    <?php
    if ($use_update) {
        echo "<a href='update/update.php' id=\"upd_button\">查找更新(for the admin)</a>\n";
    }
    if ($use_hitokoto) {
        echo "<div id=\"yiyan\"><!-- 一言 -->\n";
        echo "<p>一言</p>\n";
        echo "<hr />\n";
        echo json_decode(file_get_contents("https://international.v1.hitokoto.cn?c=d&e&f&g&h&i&j&k&l"), true)["hitokoto"];
    }
    ?>
    </div>
    <div id="select"><!-- 搜索类型选择 -->
        <label for="searchType">搜索类型:</label>
        <select id="searchType" onchange="choose()">
            <option value="texts">文本到图片</option>
            <option value="photos">图片到图片</option>
        </select>
    </div>
    <div id="div1" style="display:flex; justify-content:center; align-items:center;height:100vh;"><!-- 搜索框 -->
        <div id="div2">
            <label for="inputs" style="margin-bottom:10px;">搜索内容:</label>
            <input name="inputs" type="text" id="inputs" style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);"></input>
            <form id="form1" target="show" method="post" action="search.php">
                <input type="text" id="base64" name="inputs" style="display: none;"></input>
                <button id="fun" type="submit" style="margin-top:10px; padding:5px 10px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); background-color:#4CAF50; color:white;">Submit</button>
                <br><br>
                <label for="num" style="margin-bottom:10px;">搜索数量:</label>
                <input name="num" type="number" id="num" style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);" min="10" max="1000" value="50"></input>
                <br>
                <p id="gen" style="font-size: 20px;color: blue;"></p>
            </form>
        </div>
    </div>
    <iframe name="show" id="show" title="show" height="100%" width="100%" scrolling="auto" frameborder="0"></iframe>
    <script src="script.js"></script>
</body>

</html>