function open_nav(){
    var nav = document.querySelector("nav");
    var slideNav = document.querySelector(".slide-nav");
    var iconMenu = document.querySelector("#banner nav ul li ion-icon ");
    var container = document.querySelector(".container");
    // console.log(body);
    // console.log(container)
    if(slideNav.style.right = "-350px"){
        slideNav.style.right = "0px"
    }else{
        slideNav.style.right = "-350px"
    }

    iconMenu.style.display = "none";
    nav.style.marginLeft = "-100%";
    // container.style.backgroundColor = "black"
    container.style.opacity = 0.2;
}

function exit(){
    var slideNav = document.querySelector(".slide-nav");
    var iconMenu = document.querySelector("#banner nav ul li ion-icon ");
    var container = document.querySelector(".container");
    if(slideNav.style.right = "0px"){
        slideNav.style.right = "-350px"
    }

    iconMenu.style.display = "block";
    var nav = document.querySelector("nav");
    nav.style.marginLeft = "0%"
    container.style.opacity = 1;
}

window.addEventListener("scroll",function(){
    var nav = document.querySelector("nav");
    nav.classList.toggle("sticky", window.scrollY > 500);
})

var change = 0;
var slideShow = document.querySelector(".slideShow");
var box = document.querySelectorAll(".box");
var kichthuoc = box[0].clientWidth + 38;
// console.log(kichthuoc)
var max = kichthuoc * (box.length-3);
function next(){
    
    // console.log(max)
        if(change < max){
            change = change + kichthuoc;
        }else{
            change = 0;
        }

    slideShow.style.marginLeft = `-${change}px`;
}

function prew(){
    if(change < 1){
        change = max;
    }else{
        change -= kichthuoc;
    }
    slideShow.style.marginLeft = `-${change}px`;
}