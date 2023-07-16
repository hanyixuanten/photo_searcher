var gen=document.getElementById("gen");
var show=document.getElementById("show");
var q=document.getElementById("q");
var searchType=document.getElementById("searchType");
var button = document.getElementById('fun');
var num=document.getElementById('num');
var resize=335;
button.addEventListener('click', async function() {
    gen.innerHTML = "正在搜索";
    if(searchType.value=="photos"){
        const file = q.files[0];
        const base64_s = await convertToBase64(file);
        document.getElementById("framef").value=base64_s;
        document.getElementById("nums").value=num.value;
        document.getElementById("form1").submit();

    }else if(searchType.value=="texts"){
        show.src = "search.php?q=" + q.value +"&nums="+num.value;
    }
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
        q.style="";
        q.multiple="multiple"
        q.type="file";
        q.accept="image/png, image/jpeg";
    }else{
        q.style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);";
        q.multiple="";
        q.type="text";
        
    }
}
