function toggleFullscreen(elem) {
  elem = elem || document.documentElement;
  if (!document.fullscreenElement && !document.mozFullScreenElement &&
    !document.webkitFullscreenElement && !document.msFullscreenElement) {
    if (elem.requestFullscreen) {
      elem.requestFullscreen();
    } else if (elem.msRequestFullscreen) {
      elem.msRequestFullscreen();
    } else if (elem.mozRequestFullScreen) {
      elem.mozRequestFullScreen();
    } else if (elem.webkitRequestFullscreen) {
      elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
    }
  } else {
    if (document.exitFullscreen) {
      document.exitFullscreen();
    } else if (document.msExitFullscreen) {
      document.msExitFullscreen();
    } else if (document.mozCancelFullScreen) {
      document.mozCancelFullScreen();
    } else if (document.webkitExitFullscreen) {
      document.webkitExitFullscreen();
    }
  }
}

function removeElement(elem) {
  var thing = document.getElementById(elem);
  thing.style.display = "none";
}

var thing = 1;
function nextThing() {
  var now = document.getElementById(thing.toString());
  var before = document.getElementById((thing - 1).toString());
  var next = document.getElementById((thing + 1).toString());
  timer(.5);
  if(now.classList.contains('no')){}else{
    now.style.visibility = "visible";
  }
  if(now.classList.contains('memo')){
    memo();
  }
  if(now.classList.contains('long')){
    smoothScrollTop(now);
  }else{
    smoothScroll(now);
  }
  if(now.classList.contains('b')){
    before.classList.add('t');
  }
  thing++;
  if(next.classList.contains('E')){
    timer(4);
    setTimeout(loading, 1000);
    setTimeout(nextThing, 2000);
  }
}

function smoothScroll(elm) {
  elm.scrollIntoView({
      behavior: 'smooth',
      block: 'end'
    });
}

function smoothScrollTop(elm) {
  elm.scrollIntoView({
      behavior: 'smooth'
    });
}

function timer(seconds){
  document.getElementById('continue').disabled = true;
  var time = seconds * 1000;
  setTimeout(enable, time);
}

function enable(){
  document.getElementById('continue').disabled = false;
  document.getElementById('continue').focus();
}

function loading() {
  document.getElementById('loading').style.visibility = "visible";
  setTimeout(loaded, 1000);
}

function loaded() {
  document.getElementById('loading').style.visibility = 'hidden';
}

function stopTitle() {
  document.getElementById('title').style.webkitAnimationPlayState = "running";
}

function memo() {
  document.getElementById('hername').textContent += "Memorial";
}
