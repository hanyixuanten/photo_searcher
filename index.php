<?php
header('Content-type: text/html');
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime('index.css')) . ' GMT');
?>
<!DOCTYPE html>
<html lang="zh-CN">
    <link rel="stylesheet" href="./index.css">
    <head>
        <meta charset="UTF-8"/>
        <title>图片搜索</title>
        <script>
            function fun(){}
            function a(){}
            function choose(){}
        </script>
    </head>
    <body>
        <a href='update/update.php' id="upd_button">查找更新</a>
        <div id="yiyan">
            <p>一言</p>
            <hr />
            <?php echo json_decode(file_get_contents("https://international.v1.hitokoto.cn?c=d&e&f&g&h&i&j&k&l"),true)["hitokoto"];?> 
        </div>
        <div id="select">
            <label for="searchType">搜索类型:</label>
            <select id="searchType" onchange="choose()">
                <option value="texts">文本到图片</option>
                <option value="photos">图片到图片</option>
            </select>
        </div>
        <div id="div1" style="display:flex; justify-content:center; align-items:center;height:100vh;">
            <div id="div2">
                <label for="q" style="margin-bottom:10px;">搜索:</label>
                <input type="text" id="q" style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);"></input>
                <!-- <input type="file" name="q" id="q" multiple="multiple" /> -->
                <button onclick="fun()" style="margin-top:10px; padding:5px 10px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); background-color:#4CAF50; color:white;">Submit</button>
                <p id="gen" style="font-size: 20px;color: blue;"></p>
            </div>
        </div>
        <form id="form1" target="show" method="post" action="searchphoto.php">
            <input name="q" id="framef" type="hidden">
        </form>
        <iframe name="show" id="show" title="show" height="100%" width="100%" scrolling="auto" frameborder="0" onload="a()" ></iframe>
        <script src="script.js"></script>
    </body>
</html>
