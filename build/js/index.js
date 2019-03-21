'use strict';

//menu

const navHeader = document.querySelector('#nav');
const btnOpen = document.querySelector('.btn-open');
const btnClosed = document.querySelector('.btn-closed');

btnOpen.addEventListener('click', toggleClass);
btnClosed.addEventListener('click', toggleClass);

function toggleClass() {
    navHeader.classList.toggle('none');
    btnOpen.classList.toggle('none');
}

const menu = document.querySelector('.menu');
menu.addEventListener('mouseover', hoverNav);
menu.addEventListener('mouseout', close);

function hoverNav(e) {
    const target = e.target;
    const targetParent = target.closest('.menu-item');
    const targetParentItem = target.closest('.submenu-item');
    if (targetParent) {
        const subm1 = targetParent.getElementsByClassName('submenu')[0];
        close();
        if (subm1)  {
            subm1.style.display = 'block';
        }
        if (targetParentItem) {
            const subm2 = targetParentItem.querySelector('.submenu');
            if (subm2)  {
                subm2.style.display = 'block';
            }
        }
    }

}

function close() {
    const s = document.getElementsByClassName('submenu');
    for (let i = 0; i < s.length; i++) {
        s[i].style.display = 'none';
    }
}


//слайдер

const btn_prev = document.querySelector('#gallery .buttons .prev');
const btn_next = document.querySelector('#gallery .buttons .next ');
const images = document.querySelectorAll('#gallery .photos .item-block-img');
const counter = document.querySelector('#gallery .btn-counter-block .counter');
const amountImg = document.querySelector('#gallery .btn-counter-block .amount-img');
let i = 0;

    amountImg.innerHTML = images.length;
    btn_prev.onclick = function(){
        console.log(i);
        images[i].classList.remove('active');
        i--;

        if(i < 0){
            i = images.length - 1;
        }
        counter.innerHTML = i;
        images[i].classList.add('active');
    };

btn_next.onclick = function(){
    images[i].classList.remove('active');
    i++;

    if(i >= images.length){
        i = 0;
    }
    counter.innerHTML = i;
    images[i].classList.add('active');
};




