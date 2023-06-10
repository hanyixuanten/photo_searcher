<!DOCTYPE html>
<html lang="ZH-CN">
	<head>
		<meta charset="utf-8">
		<title>search</title>
	</head>
	<?php
		if($_GET [ 'q' ]!=""){
			$api_endpoint = 'https://modelscope.cn/api/v1/studio/damo/chinese_clip_applications/gradio/api/predict/';
			$p=$_GET [ 'q' ];
			$api_query = "{\"fn_index\":0,\"data\":[\"$p\",300,\"中文CLIP(Base)\",\"是\"]}";
			$iCurlTimeout = 120;
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $api_endpoint);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $api_query);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			$rp=curl_exec($ch);
			$api_response = json_decode($rp, true)["data"][0];
			
			curl_close($ch);
			
		}
			
	?>
	<body>
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
			<img title src="<?=$api_response[100]?>"></img>
			<img title src="<?=$api_response[101]?>"></img>
			<img title src="<?=$api_response[102]?>"></img>
			<img title src="<?=$api_response[103]?>"></img>
			<img title src="<?=$api_response[104]?>"></img>
			<img title src="<?=$api_response[105]?>"></img>
			<img title src="<?=$api_response[106]?>"></img>
			<img title src="<?=$api_response[107]?>"></img>
			<img title src="<?=$api_response[108]?>"></img>
			<img title src="<?=$api_response[109]?>"></img>
			<img title src="<?=$api_response[110]?>"></img>
			<img title src="<?=$api_response[111]?>"></img>
			<img title src="<?=$api_response[112]?>"></img>
			<img title src="<?=$api_response[113]?>"></img>
			<img title src="<?=$api_response[114]?>"></img>
			<img title src="<?=$api_response[115]?>"></img>
			<img title src="<?=$api_response[116]?>"></img>
			<img title src="<?=$api_response[117]?>"></img>
			<img title src="<?=$api_response[118]?>"></img>
			<img title src="<?=$api_response[119]?>"></img>
			<img title src="<?=$api_response[120]?>"></img>
			<img title src="<?=$api_response[121]?>"></img>
			<img title src="<?=$api_response[122]?>"></img>
			<img title src="<?=$api_response[123]?>"></img>
			<img title src="<?=$api_response[124]?>"></img>
			<img title src="<?=$api_response[125]?>"></img>
			<img title src="<?=$api_response[126]?>"></img>
			<img title src="<?=$api_response[127]?>"></img>
			<img title src="<?=$api_response[128]?>"></img>
			<img title src="<?=$api_response[129]?>"></img>
			<img title src="<?=$api_response[130]?>"></img>
			<img title src="<?=$api_response[131]?>"></img>
			<img title src="<?=$api_response[132]?>"></img>
			<img title src="<?=$api_response[133]?>"></img>
			<img title src="<?=$api_response[134]?>"></img>
			<img title src="<?=$api_response[135]?>"></img>
			<img title src="<?=$api_response[136]?>"></img>
			<img title src="<?=$api_response[137]?>"></img>
			<img title src="<?=$api_response[138]?>"></img>
			<img title src="<?=$api_response[139]?>"></img>
			<img title src="<?=$api_response[140]?>"></img>
			<img title src="<?=$api_response[141]?>"></img>
			<img title src="<?=$api_response[142]?>"></img>
			<img title src="<?=$api_response[143]?>"></img>
			<img title src="<?=$api_response[144]?>"></img>
			<img title src="<?=$api_response[145]?>"></img>
			<img title src="<?=$api_response[146]?>"></img>
			<img title src="<?=$api_response[147]?>"></img>
			<img title src="<?=$api_response[148]?>"></img>
			<img title src="<?=$api_response[149]?>"></img>
			<img title src="<?=$api_response[150]?>"></img>
			<img title src="<?=$api_response[151]?>"></img>
			<img title src="<?=$api_response[152]?>"></img>
			<img title src="<?=$api_response[153]?>"></img>
			<img title src="<?=$api_response[154]?>"></img>
			<img title src="<?=$api_response[155]?>"></img>
			<img title src="<?=$api_response[156]?>"></img>
			<img title src="<?=$api_response[157]?>"></img>
			<img title src="<?=$api_response[158]?>"></img>
			<img title src="<?=$api_response[159]?>"></img>
			<img title src="<?=$api_response[160]?>"></img>
			<img title src="<?=$api_response[161]?>"></img>
			<img title src="<?=$api_response[162]?>"></img>
			<img title src="<?=$api_response[163]?>"></img>
			<img title src="<?=$api_response[164]?>"></img>
			<img title src="<?=$api_response[165]?>"></img>
			<img title src="<?=$api_response[166]?>"></img>
			<img title src="<?=$api_response[167]?>"></img>
			<img title src="<?=$api_response[168]?>"></img>
			<img title src="<?=$api_response[169]?>"></img>
			<img title src="<?=$api_response[170]?>"></img>
			<img title src="<?=$api_response[171]?>"></img>
			<img title src="<?=$api_response[172]?>"></img>
			<img title src="<?=$api_response[173]?>"></img>
			<img title src="<?=$api_response[174]?>"></img>
			<img title src="<?=$api_response[175]?>"></img>
			<img title src="<?=$api_response[176]?>"></img>
			<img title src="<?=$api_response[177]?>"></img>
			<img title src="<?=$api_response[178]?>"></img>
			<img title src="<?=$api_response[179]?>"></img>
			<img title src="<?=$api_response[180]?>"></img>
			<img title src="<?=$api_response[181]?>"></img>
			<img title src="<?=$api_response[182]?>"></img>
			<img title src="<?=$api_response[183]?>"></img>
			<img title src="<?=$api_response[184]?>"></img>
			<img title src="<?=$api_response[185]?>"></img>
			<img title src="<?=$api_response[186]?>"></img>
			<img title src="<?=$api_response[187]?>"></img>
			<img title src="<?=$api_response[188]?>"></img>
			<img title src="<?=$api_response[189]?>"></img>
			<img title src="<?=$api_response[190]?>"></img>
			<img title src="<?=$api_response[191]?>"></img>
			<img title src="<?=$api_response[192]?>"></img>
			<img title src="<?=$api_response[193]?>"></img>
			<img title src="<?=$api_response[194]?>"></img>
			<img title src="<?=$api_response[195]?>"></img>
			<img title src="<?=$api_response[196]?>"></img>
			<img title src="<?=$api_response[197]?>"></img>
			<img title src="<?=$api_response[198]?>"></img>
			<img title src="<?=$api_response[199]?>"></img>
		</div>
	</body>
</html>