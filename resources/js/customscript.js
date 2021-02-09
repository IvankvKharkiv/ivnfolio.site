
if(document.getElementById('videoplayer') === null){
}else{

var progress = document.getElementById('progress');
var progress_bar = document.getElementById('progress_bar');
var volume_bar = document.getElementById('volume_bar');
var buffer_bar = document.getElementById('buffer_bar');
var videoplayer = document.getElementById('videoplayer');
var videocontainer = document.getElementById('videocontainer');
var fullscreen = document.getElementById('fullscreen');
var mutevolbtn = document.getElementById('mutevol');
var unmutevolbtn = document.getElementById('unmutevol');
var vidplaybtn = document.getElementById('vidplay');
var vidpausebtn = document.getElementById('vidpause');
var videocontrols = document.getElementById('videocontrols');
var timeoutfunc;
var timeoutfuncvol;

volume_bar.style.display = "none";
videocontrols.style.display = "none";   
progress_bar.style.width = "0%";
vidplaybtn.style.display = "block";
vidpausebtn.style.display = "none";
mutevolbtn.style.display = "block";
unmutevolbtn.style.display = "none";



if(getCookie('volume')!==''){
    volume_bar.value=getCookie('volume');
}else{
    setCookie('volume', volume_bar.value, 2)
}

document.getElementById('time').innerHTML = secondstohhmmss(videoplayer.currentTime) + '/' + secondstohhmmss(videoplayer.duration);

document.getElementById('vidtimezero').addEventListener('click', function(e){
    videoplayer.currentTime=0;
});


mutevolbtn.addEventListener('click', function(e){ mutevol(); });
unmutevolbtn.addEventListener('click', function(e){ unmutevol(); });
mutevolbtn.addEventListener('mouseover', function(e){ showvolume(); });
unmutevolbtn.addEventListener('mouseover', function(e){ showvolume(); });

vidplaybtn.addEventListener('click', function(e){ vidplay(); });
vidpausebtn.addEventListener('click', function(e){ vidpause(); });



progress.addEventListener('click', function(e) {
    var pos = (e.pageX  - (this.offsetLeft + this.offsetParent.offsetLeft + this.offsetParent.offsetParent.offsetLeft)) / this.offsetWidth;
    videoplayer.currentTime = pos * videoplayer.duration;
    document.getElementById('time').innerHTML = secondstohhmmss(videoplayer.currentTime) + '/' + secondstohhmmss(videoplayer.duration);
    showcontrols();
    updateProgressBar();
});

volume_bar.addEventListener('change', function(e){
    videoplayer.volume = volume_bar.value;
    setCookie('volume', volume_bar.value, 2);
    showcontrols();
});
volume_bar.addEventListener('keydown', function(e){
    if(e.code == 'ArrowLeft' || e.code == 'ArrowRight') {
        e.preventDefault();
    }
    showcontrols();
    hotkeysvolume(e);
});


videocontainer.addEventListener("keydown", function(e){ 
    showcontrols();
    hotkeys(e); 
});
videocontainer.addEventListener('mousemove', showcontrols);

videoplayer.addEventListener('timeupdate', updateProgressBar, false);
videoplayer.addEventListener('progress', updateBufferBar, false);
videoplayer.addEventListener("dblclick", function(e){ handleFullscreen(); });
videoplayer.addEventListener("click", function(e){ 
    if(e.target !== volume_bar){
        if(videoplayer.paused){
            vidplay();
        }else{
            vidpause();
        }
    }
});


videocontrols.addEventListener("keydown", function(e){ 
    showcontrols();
    hotkeys(e); 
});
var elms = videocontrols.querySelectorAll("button");
for (i = 0; i < elms.length; i++) {
    elms[i].addEventListener("click", function(e){ videocontainer.focus(); });
}

window.addEventListener('keydown', function(e) {
    if((e.code == 'Space' || e.code =='ArrowUp' || e.code == 'ArrowDown') && e.target == videocontainer) {
        e.preventDefault();
    }
    if(e.code == 'Space' && e.target == volume_bar) {
        e.preventDefault();
    }
});

fullscreen.addEventListener('click', function(e) {
        handleFullscreen();
    });



function secondstohhmmss(sec_num) {
    sec_num = Math.floor(sec_num);
    var hours   = Math.floor(sec_num / 3600);
    var minutes = Math.floor((sec_num - (hours * 3600)) / 60);
    var seconds = sec_num - (hours * 3600) - (minutes * 60);

    if (hours   < 10) {hours   = "0"+hours;}
    if (minutes < 10) {minutes = "0"+minutes;}
    if (seconds < 10) {seconds = "0"+seconds;}
    return hours+':'+minutes+':'+seconds;
}


function hotkeysvolume(e){
    switch (e.code){ 
    case 'Space': 
        if(videoplayer.paused){
            vidplay();
        }else{
            vidpause();
        }
        break;
    case 'ArrowLeft':
        videoplayer.currentTime = videoplayer.currentTime - videoplayer.duration*0.01;
        break;
    case 'ArrowRight':
        videoplayer.currentTime = videoplayer.currentTime + videoplayer.duration*0.01;
        break;
    case 'KeyM':
        if(videoplayer.volume == 0){
            unmutevol()
        }else{
            mutevol()
        }
        break;
    case 'KeyF':
        handleFullscreen();
        break;
    }
}



function hotkeys(e){
    switch (e.code){ 
    case 'ArrowUp':
        showvolume();
        volume_bar.focus();
        break;
    case 'ArrowDown':
        showvolume();
        volume_bar.focus(); 
        break;
    }
    hotkeysvolume(e);
}



function showcontrols() {
    videocontrols.style.display = "flex";
    videocontainer.style = "cursor: auto;";
    videocontainer.focus();
    clearTimeout(timeoutfunc);
    timeoutfunc = setTimeout(function() { 
        videocontrols.style.display = "none";
        videocontainer.style = "cursor: none;";
        videocontainer.focus(); 
    }, 5000);
}

function showvolume() {
    volume_bar.style.display = "block";
    clearTimeout(timeoutfuncvol);
    timeoutfuncvol = setTimeout(function() { 
        volume_bar.style.display = "none";
        videocontainer.focus();
    }, 3000);
}

function updateProgressBar() {
    var pos = (100 / videoplayer.duration) * videoplayer.currentTime;
    progress_bar.style.width = pos+"%";
    document.getElementById('time').innerHTML = secondstohhmmss(videoplayer.currentTime) + '/' + secondstohhmmss(videoplayer.duration);
    updateBufferBar();
}


function updateBufferBar(){
    var buff = videoplayer.buffered;
    var range = 0;

    try{
        buff.start(range);
    }
    catch{
        console.log("error cought 1");
        return;
    }
    
    while(!(buff.start(range) <= videoplayer.currentTime && videoplayer.currentTime <= buff.end(range))){
        range += 1;
        try{
            buff.start(range);
        }
        catch{
            console.log("error cought 2");
            return;
        }
    }
    buffer_bar.style.width = (buff.end(range)*100/videoplayer.duration - parseFloat(progress_bar.style.width.replace('%', ''))) +'%';
}


function vidplay(){
    videoplayer.play();
    vidplaybtn.style.display = "none";
    vidpausebtn.style.display = "block";
}
function vidpause(){
    videoplayer.pause();
    vidplaybtn.style.display = "block";
    vidpausebtn.style.display = "none";
}


function mutevol(){
    volume_bar.value=0; 
    videoplayer.volume=0;
    mutevolbtn.style.display = "none";
    unmutevolbtn.style.display = "block";
}
function unmutevol(){
    volume_bar.value=getCookie('volume'); 
    videoplayer.volume=getCookie('volume');
    mutevolbtn.style.display = "block";
    unmutevolbtn.style.display = "none";
}


function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


var isFullScreen = function() {
    return !!(document.fullScreen || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.fullscreenElement);
}

var handleFullscreen = function() {
    if (isFullScreen()) {
        if (document.exitFullscreen) document.exitFullscreen();
        else if (document.mozCancelFullScreen) document.mozCancelFullScreen();
        else if (document.webkitCancelFullScreen) document.webkitCancelFullScreen();
        else if (document.msExitFullscreen) document.msExitFullscreen();
    }
    else {
        if (videocontainer.requestFullscreen) videocontainer.requestFullscreen();
        else if (videocontainer.mozRequestFullScreen) videocontainer.mozRequestFullScreen();
        else if (videocontainer.webkitRequestFullScreen) {
            video.webkitRequestFullScreen();
        }
        else if (videocontainer.msRequestFullscreen) videocontainer.msRequestFullscreen();
    }
}

}