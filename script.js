var gen=document.getElementById("gen"); // 正在搜索，搜索完毕
var show=document.getElementById("show"); // iframe
var inputs=document.getElementById("inputs"); // 输入的文本或图片
var searchType=document.getElementById("searchType"); // 搜索类型
var button = document.getElementById('fun'); // 提交按钮
var num=document.getElementById('num'); // 输入的num
var form=document.getElementById('form1'); // 整个form
var base64=document.getElementById('base64') // hidden input
var resize=265;
inputs.onchange = async function(){
    if(searchType.value=="photos"){
        base64.value=await convertToBase64(inputs.files[0]);
    }else{
        base64.value=inputs.value;
    }
    
}
button.addEventListener('click', async function() {
    gen.innerHTML = "正在搜索(大约需要2分钟)";
    show.height = document.documentElement.clientHeight - resize;
});
function convertToBase64(file) {//base64转换
    return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
    reader.readAsDataURL(file);
    });
}
window.onresize = function() {//窗口大小更改后
    show.height = document.documentElement.clientHeight-resize;
}
show.onload=function(){
    gen.innerHTML="搜索完毕";
    show.height = document.documentElement.clientHeight-resize;
    document.getElementById("div1").style="display:flex; justify-content:center; align-items:center;";
}
function choose(){//选择更改后
    if(searchType.value=="photos"){
        inputs.style="";
        inputs.multiple="multiple"
        inputs.type="file";
        inputs.accept="image/png, image/jpeg";
        form.action="searchphoto.php";
    }else{
        inputs.style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);";
        inputs.multiple="";
        inputs.type="text";
        form.action="search.php";
    }
}
