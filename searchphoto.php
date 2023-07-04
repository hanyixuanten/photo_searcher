<?php
    $p=$_POST["q"];
    $api_query = "{\"fn_index\":2,\"data\":[\"$p\",50,\"中文CLIP(Base)\",\"是\"]}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://modelscope.cn/api/v1/studio/damo/chinese_clip_applications/gradio/api/predict/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $api_query);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch,CURLOPT_TIMEOUT, 120);
    $rp=curl_exec($ch);
    $api_response = json_decode($rp, true)["data"][0];
    $httpcode=curl_getinfo($ch,CURLINFO_HTTP_CODE);
    if($httpcode==500){
        echo "您输入的内容不符合网站要求，请您更换后试试~";
    }
    elseif($httpcode!=200){
        echo "error";
    }
    curl_close($ch);
?>
<br>
<script>
    var api_response = <?=json_encode($api_response)?>;
    for (var i = 0; i < api_response.length; i++) {
        document.write("<img src='" + api_response[i] + "' alt='" + api_response[i] + "'>");
    }
</script>