var nav = document.getElementById('nav');
nav.addEventListener('click', function(e) {
    var target = e.target;

    var targetParent = target.closest('.menu-item');

    if (targetParent) {
        var subm = targetParent.getElementsByClassName('submenu')[0];
        close();
        if (subm) {
            subm.style.display = 'block';
        }
    }
});

function close() {
    var s = document.getElementsByClassName('submenu');
    for (var i = 0; i < s.length; i++) {
        s[i].style.display = 'none';
    }
}

var btn_prev = document.querySelector('#gallery .buttons .prev');
var btn_next = document.querySelector('#gallery .buttons .next ');

var images = document.querySelectorAll('#gallery .photos img')
var i = 0;

btn_prev.onclick = function(){
    images[i].style.display = 'none';
    i--;

    if(i < 0){
        i = images.length - 1;
    }
    images[i].style.display = 'block';
}

btn_next.onclick = function(){
    images[i].style.display = 'none';
    i++;

    if(i >= images.length){
        i = 0;
    }
    images[i].style.display = 'block';
}