<?php
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://api.github.com/repos/hanyixuanten/photo_searcher/releases/latest');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['User-Agent: PHP']);
    $response = json_decode(curl_exec($ch), true);
    curl_close($ch);
    $latest_v=$response['tag_name'];
    $now_v=json_decode(file_get_contents("manifast.json"),true)["version"];
    if($latest_v==$now_v){
        echo 'This is the latest relese!';
    }else{
        echo 'There is a new relese!';
        echo "<a href='https://github.com/hanyixuanten/photo_searcher/releases/latest'>download</a>";
    }
?>