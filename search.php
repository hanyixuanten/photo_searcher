<!DOCTYPE html>
<html lang="ZH-CN">
<meta charset="utf-8">
<title>search</title>
<?php
    if($_GET [ 'q' ]!=""){
		$api_endpoint = 'https://modelscope.cn/api/v1/studio/damo/chinese_clip_applications/gradio/api/predict/';
        $p=$_GET [ 'q' ];
		$api_query = "{\"fn_index\":0,\"data\":[\"$p\",100,\"中文CLIP(Base)\",\"是\"]}";
		$iCurlTimeout = 120;
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_endpoint);
		curl_setopt($ch, CURLOPT_POST, true);
		// curl_setopt($ch, CURLOPT_TIMEOUT, $iCurlTimeout);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $api_query);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $rp=curl_exec($ch);
		$api_response = json_decode($rp, true)["data"][0];
        //var_dump($api_response);
		//echo $api_response;
        
		curl_close($ch);
		
    }
        
?>
<br>
<div>
<img title src="<?=$api_response[0]?>"></img>
<img title src="<?=$api_response[1]?>"></img>
<img title src="<?=$api_response[2]?>"></img>
<img title src="<?=$api_response[3]?>"></img>
<img title src="<?=$api_response[4]?>"></img>
<img title src="<?=$api_response[5]?>"></img>
<img title src="<?=$api_response[6]?>"></img>
<img title src="<?=$api_response[7]?>"></img>
<img title src="<?=$api_response[8]?>"></img>
<img title src="<?=$api_response[9]?>"></img>
<img title src="<?=$api_response[10]?>"></img>
<img title src="<?=$api_response[11]?>"></img>
<img title src="<?=$api_response[12]?>"></img>
<img title src="<?=$api_response[13]?>"></img>
<img title src="<?=$api_response[14]?>"></img>
<img title src="<?=$api_response[15]?>"></img>
<img title src="<?=$api_response[16]?>"></img>
<img title src="<?=$api_response[17]?>"></img>
<img title src="<?=$api_response[18]?>"></img>
<img title src="<?=$api_response[19]?>"></img>
<img title src="<?=$api_response[20]?>"></img>
<img title src="<?=$api_response[21]?>"></img>
<img title src="<?=$api_response[22]?>"></img>
<img title src="<?=$api_response[23]?>"></img>
<img title src="<?=$api_response[24]?>"></img>
<img title src="<?=$api_response[25]?>"></img>
<img title src="<?=$api_response[26]?>"></img>
<img title src="<?=$api_response[27]?>"></img>
<img title src="<?=$api_response[28]?>"></img>
<img title src="<?=$api_response[29]?>"></img>
<img title src="<?=$api_response[30]?>"></img>
<img title src="<?=$api_response[31]?>"></img>
<img title src="<?=$api_response[32]?>"></img>
<img title src="<?=$api_response[33]?>"></img>
<img title src="<?=$api_response[34]?>"></img>
<img title src="<?=$api_response[35]?>"></img>
<img title src="<?=$api_response[36]?>"></img>
<img title src="<?=$api_response[37]?>"></img>
<img title src="<?=$api_response[38]?>"></img>
<img title src="<?=$api_response[39]?>"></img>
<img title src="<?=$api_response[40]?>"></img>
<img title src="<?=$api_response[41]?>"></img>
<img title src="<?=$api_response[42]?>"></img>
<img title src="<?=$api_response[43]?>"></img>
<img title src="<?=$api_response[44]?>"></img>
<img title src="<?=$api_response[45]?>"></img>
<img title src="<?=$api_response[46]?>"></img>
<img title src="<?=$api_response[47]?>"></img>
<img title src="<?=$api_response[48]?>"></img>
<img title src="<?=$api_response[49]?>"></img>
<img title src="<?=$api_response[50]?>"></img>
<img title src="<?=$api_response[51]?>"></img>
<img title src="<?=$api_response[52]?>"></img>
<img title src="<?=$api_response[53]?>"></img>
<img title src="<?=$api_response[54]?>"></img>
<img title src="<?=$api_response[55]?>"></img>
<img title src="<?=$api_response[56]?>"></img>
<img title src="<?=$api_response[57]?>"></img>
<img title src="<?=$api_response[58]?>"></img>
<img title src="<?=$api_response[59]?>"></img>
<img title src="<?=$api_response[60]?>"></img>
<img title src="<?=$api_response[61]?>"></img>
<img title src="<?=$api_response[62]?>"></img>
<img title src="<?=$api_response[63]?>"></img>
<img title src="<?=$api_response[64]?>"></img>
<img title src="<?=$api_response[65]?>"></img>
<img title src="<?=$api_response[66]?>"></img>
<img title src="<?=$api_response[67]?>"></img>
<img title src="<?=$api_response[68]?>"></img>
<img title src="<?=$api_response[69]?>"></img>
<img title src="<?=$api_response[70]?>"></img>
<img title src="<?=$api_response[71]?>"></img>
<img title src="<?=$api_response[72]?>"></img>
<img title src="<?=$api_response[73]?>"></img>
<img title src="<?=$api_response[74]?>"></img>
<img title src="<?=$api_response[75]?>"></img>
<img title src="<?=$api_response[76]?>"></img>
<img title src="<?=$api_response[77]?>"></img>
<img title src="<?=$api_response[78]?>"></img>
<img title src="<?=$api_response[79]?>"></img>
<img title src="<?=$api_response[80]?>"></img>
<img title src="<?=$api_response[81]?>"></img>
<img title src="<?=$api_response[82]?>"></img>
<img title src="<?=$api_response[83]?>"></img>
<img title src="<?=$api_response[84]?>"></img>
<img title src="<?=$api_response[85]?>"></img>
<img title src="<?=$api_response[86]?>"></img>
<img title src="<?=$api_response[87]?>"></img>
<img title src="<?=$api_response[88]?>"></img>
<img title src="<?=$api_response[89]?>"></img>
<img title src="<?=$api_response[90]?>"></img>
<img title src="<?=$api_response[91]?>"></img>
<img title src="<?=$api_response[92]?>"></img>
<img title src="<?=$api_response[93]?>"></img>
<img title src="<?=$api_response[94]?>"></img>
<img title src="<?=$api_response[95]?>"></img>
<img title src="<?=$api_response[96]?>"></img>
<img title src="<?=$api_response[97]?>"></img>
<img title src="<?=$api_response[98]?>"></img>
<img title src="<?=$api_response[99]?>"></img>
</div>
</html>