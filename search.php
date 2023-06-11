<!DOCTYPE html>
<html lang="ZH-CN">
	<head>
		<meta charset="utf-8">
		<title>search</title>
	</head>
	<?php
		$api_response=[];
		$p=$_GET [ 'q' ];
		if($p!=""){
			$api_endpoint = 'https://modelscope.cn/api/v1/studio/damo/chinese_clip_applications/gradio/api/predict/';
			$api_query = "{\"fn_index\":0,\"data\":[\"$p\",300,\"中文CLIP(Base)\",\"是\"]}";
			$iCurlTimeout = 120;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $api_endpoint);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $api_query);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch,CURLOPT_TIMEOUT, $iCurlTimeout);
			$rp=curl_exec($ch);
			$api_response = json_decode($rp, true)["data"][0];
			curl_close($ch);
		}
			
	?>
	<body>
		<br>		 
		<script>
			var api_response = <?=json_encode($api_response)?>;
			for (var i = 0; i < api_response.length; i++) {
				document.write("<img src='" + api_response[i] + "' alt='" + api_response[i] + "'>");
			}
		</script>
	</body>
</html>