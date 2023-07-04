var gen=document.getElementById("gen");
var show=document.getElementById("show");
var q=document.getElementById("q");
var searchType=document.getElementById("searchType");
function convertToBase64(file) {
    return new Promise((resolve, reject) => {
    const reader = new FileReader();
    reader.onload = () => resolve(reader.result);
    reader.onerror = reject;
    reader.readAsDataURL(file);
    });
}
// // 获取input元素
// const input = document.getElementById('q');
// // 监听input元素的change事件
// input.addEventListener('change', async (event) => {
//     const file = event.target.files[0];
//     const base64_s = await convertToBase64(file);

// // 在这里使用base64编码进行处理
// // ...
// });
async function fun() {//点击按钮后
    gen.innerHTML = "正在搜索";
    if(searchType.value=="photos"){
        const file = q.files[0];
        const base64_s = await convertToBase64(file);
        document.getElementById("framef").value=base64_s;
        document.getElementById("form1").submit();
    }else if(searchType.value=="texts"){
        show.src = "search.php?q=" + q.value;
    }
    show.height = document.documentElement.clientHeight - 275;
}
window.onresize = function() {
    show.height = document.documentElement.clientHeight-275;
}
function a(){//iframe加载完毕后
    gen.innerHTML="搜索完毕";
    show.height = document.documentElement.clientHeight-275;
    document.getElementById("div1").style="display:flex; justify-content:center; align-items:center;";
}
function choose(){
    if(searchType.value=="photos"){
        q.style="";
        q.multiple="multiple"
        q.type="file";
    }else{
        q.style="padding:5px; border-radius:5px; border:none; box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);";
        q.multiple="";
        q.type="text";
    }
}
