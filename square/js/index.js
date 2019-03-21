//header-menu

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



