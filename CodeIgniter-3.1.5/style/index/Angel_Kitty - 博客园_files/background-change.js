﻿window.requestAnimFrame=
        window.requestAnimationFrame||
        window.webkitRequestAnimationFrame||
        window.mozRequestAnimationFrame||
        window.oRequestAnimationFrame||
        window.msRequestAnimationFrame||
        function(callback){window.setTimeout(callback, 1000/10);};
    function RandomNum(Min,Max){
        var Range=Max-Min;
        var Rand=Math.random();
        return(Min+Math.round(Rand * Range));
    }
    function ShowPicture(){
        dx=document.getElementById("main");
        if (dx.style.opacity=="0") dx.style.opacity="0.9";else dx.style.opacity="0";
    }
    function ChangePicture(){
        dx=document.body;
        dy=RandomNum(0,19);
        if (dy==0){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0eef73838.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==1){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0f2fb9a83.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==2){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0f55411f0.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==3){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0f79a1124.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==4){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0f98a8b66.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==5){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0fdd51b7e.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==6){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb100223dd0.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==7){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb101c2c24b.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==8){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb1038127b5.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if (dy==9){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb0dce1ca55.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==11){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb107514579.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==12){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb1099293a4.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==13){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb10b717a21.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==15){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb1105d3f68.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==17){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb11404d3b3.jpg) no-repeat fixed";
            dx.style=backgroundSize="cover";
        }else if(dy==18){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb116ce6f9b.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }else if(dy==19){
            dx.style.background="url(https://i.loli.net/2018/05/03/5aeb118d543ba.jpg) no-repeat fixed";
            dx.style.backgroundSize="cover";
        }
		
    }
    ChangePicture();