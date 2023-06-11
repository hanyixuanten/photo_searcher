<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <meta charset="UTF-8"/>
        <title>图片搜索</title>
        <script>
            function fun(){}
            function a(){}
        </script>
    </head>
    <body>
        <div style="display:flex; justify-content:center; align-items:center;height:100vh;" id="m">
            <div style="display:flex; flex-direction:column; justify-content:center; align-items:center;">
                <label for="q" style="margin-bottom:10px;">搜索:</label>
                <input type="text" name="q" id="q" style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);"></input>
                <button onclick="fun()" style="margin-top:10px; padding:5px 10px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75); background-color:#4CAF50; color:white;">Submit</button>
                <p id="gen" style="font-size: 20px;color: blue;"></p>
            </div>
        </div>
        <iframe id="show" title="show" height="100%" width="100%" scrolling="auto" frameborder="0" onload="a()">
        </iframe>
        <script>
            var gen=document.getElementById("gen");
            var show=document.getElementById("show");
            function fun(){
                gen.innerHTML="正在搜索";
                show.src="search.php?q="+document.getElementById("q").value;
                show.height = document.documentElement.clientHeight-200;
            }
            window.onresize = function() {
                show.height = document.documentElement.clientHeight-200;
            }
            function a(){
                gen.innerHTML="搜索完毕";
                show.height = document.documentElement.clientHeight-200;
                document.getElementById("m").style="display:flex; justify-content:center; align-items:center;";
            }
        </script>
    </body>
</html>