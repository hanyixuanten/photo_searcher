<?php
// Set the content type
header('Content-type: text/html');

// Set the cache control headers for the HTML page
header('Cache-Control: public');
header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
header('Last-Modified: ' . gmdate('D, d M Y H:i:s', filemtime(__FILE__)) . ' GMT');

// Set the cache control headers for the CSS file
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
        </script>
    </head>
    <body>
        <a href='update/update.php' id="upd_button">查找更新</a>
        <div id="yiyan">
            <p>一言</p>
            <hr />
            <?php echo json_decode(file_get_contents("https://international.v1.hitokoto.cn?c=d&e&f&g&h&i&j&k&l"),true)["hitokoto"];?> 
        </div>
        <div id="div1" style="display:flex; justify-content:center; align-items:center;height:100vh;">
            <div id="div2">
                <label for="q" style="margin-bottom:10px;">搜索:</label>
                <input type="text" id="q" style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);"></input>
                <button onclick="fun()" style="margin-top:10px; padding:5px 10px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); background-color:#4CAF50; color:white;">Submit</button>
                <p id="gen" style="font-size: 20px;color: blue;"></p>
            </div>
        </div>
        <iframe id="show" title="show" height="100%" width="100%" scrolling="auto" frameborder="0" onload="a()" >
        </iframe>
        <script>
            var gen=document.getElementById("gen");
            var show=document.getElementById("show");
            function fun(){
                gen.innerHTML="正在搜索";
                show.src="search.php?q="+document.getElementById("q").value;
                show.height = document.documentElement.clientHeight-260;
            }
            window.onresize = function() {
                show.height = document.documentElement.clientHeight-260;
            }
            function a(){
                gen.innerHTML="搜索完毕";
                show.height = document.documentElement.clientHeight-260;
                document.getElementById("div1").style="display:flex; justify-content:center; align-items:center;";
            }
        </script>
    </body>
</html>
