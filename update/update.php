<a href='/index.php' style='background-color: #4CAF50; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; font-size: 16px;'>返回</a>
<br>
<?php
    include "passwd.php";
    if($_COOKIE[r]==hash("sha256", $passwd)){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/hanyixuanten/photo_searcher/releases/latest');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, ['User-Agent: PHP']);
        $response = json_decode(curl_exec($ch), true);
        curl_close($ch);
        $latest_v=$response['tag_name'];
        $now_v=json_decode(file_get_contents("manifast.json"),true)["version"];
        if($latest_v==$now_v){
            echo '这是最新版！';
        }else{
            echo '有可更新的版本！';
            echo "<a href='https://api.github.com/repos/hanyixuanten/photo_searcher/zipball/$latest_v' style='background-color: #4CAF50; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; font-size: 16px;' target=\"_blank\">Download zip</a>";
            echo "<a href='https://api.github.com/repos/hanyixuanten/photo_searcher/tarball/$latest_v' style='background-color: #4CAF50; color: white; padding: 12px 20px; text-align: center; text-decoration: none; display: inline-block; border-radius: 4px; font-size: 16px;' target=\"_blank\">Download tar.gz</a>";
            
        }
        echo '<br />更新日志：<br />'.$response["body"];
    }
    else{
        header("Location: login.php");
        exit();
    }
?>
