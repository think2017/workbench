
/**
 * @desc 原生js弹出层(弹出)
 * 
 **/
function dialog_open(msg)
{
    var _window=document.getElementById("dialog_window");
     
    _window.style.display="block";
    _window.style.left=(document.documentElement.clientWidth-_window.clientWidth)/2+document.documentElement.scrollLeft+"px";
    var aa_scrollTop = document.documentElement.scrollTop || _window.pageYOffset || document.body.scrollTop;
    _window.style.top=(document.documentElement.clientHeight-_window.clientHeight)/2+aa_scrollTop+"px";
     
    /** 遮罩 **/
    var procbg = document.createElement("div");
    procbg.setAttribute("id","mybg");
    procbg.style.background ="#000000";
    procbg.style.width ="100%";
    procbg.style.height ="100%";
    procbg.style.position ="fixed";
    procbg.style.top ="0";
    procbg.style.left ="0";
    procbg.style.zIndex ="500";
    procbg.style.opacity ="0.6";
    procbg.style.filter ="Alpha(opacity=70)";
    document.body.appendChild(procbg);
    /** 遮罩 **/
     
    /** 内容 **/
    var _content=document.getElementById("dialog_content");
    _content.innerHTML = msg;
    /** 内容 **/
     
    document.body.style.overflow ="auto";
}
 

/**
 * @desc 原生js弹出层(隐藏)
 * 
 **/
function dialog_close()
{
    var _window=document.getElementById("dialog_window");
    _window.style.display="none";
    document.body.style.overflow ="auto";
     
    /** 遮罩 **/
    var mybg = document.getElementById("mybg");
    document.body.removeChild(mybg);
    /** 遮罩 **/
}
