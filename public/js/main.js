// select header
let header = document.querySelector("header");

//navbar scrooling
let navbar = document.querySelector("nav");
document.onscroll =()=>{
    if(window.scrollY > 100){
        navbar.classList.add("on-scroll");
    }else{
        navbar.classList.remove("on-scroll");
    }

}


//generate random image for header
let myImgs = ["01.jpg","02.jpg","03.jpg","04.jpg","05.jpg","06.jpg","07.jpg","08.jpg"];

let randnumber = Math.floor(Math.random() * myImgs.length);
    header.style.backgroundImage = `{{ asset('imgs/${myImgs[randnumber]}') }}`;


//stop change background
let btnToggel = document.querySelector(".stop-bg i");
var changeImage = true ;
var bginterval;

function backgroundInterval(){
    if(changeImage){
        bginterval = setInterval(()=>{

            let randnumber = Math.floor(Math.random() * myImgs.length);
            header.style.backgroundImage = `url(imgs/${myImgs[randnumber]})`;

        },10000)
    }
}

backgroundInterval();

btnToggel.onclick = () => {
    btnToggel.classList.toggle("lock");

    if(!btnToggel.classList.contains("lock")){
        changeImage = true ;
        backgroundInterval();
    }else{
        changeImage = false ;
        clearInterval(bginterval);
    }
}



// select setting box and icon

let settingBox  = document.querySelector(".setting-box"),
    settingIcon = document.querySelector(".icon");

settingIcon.onclick = () => {
    settingBox.classList.toggle("setting-box-open");
    settingIcon.classList.toggle("fa-times");
    settingIcon.classList.toggle("fa-cog");
    settingIcon.classList.toggle("bg-white");
}

//* switch colors

document.addEventListener("click",(e)=>{
    const colorLi = document.querySelectorAll(".colors-list li");
    if(e.target.classList.contains("color-item")){
        colorLi.forEach(li => {
            li.classList.remove("active");
        });
        document.documentElement.style.setProperty("--main-color",e.target.dataset.color);
        e.target.classList.add("active");
    }
})

//coplaps

let colapIcopn = document.querySelector("nav .colapps"),
    colapBox   = document.querySelector("nav ul");

colapIcopn.onclick = () =>{
    colapBox.classList.toggle("open");
}

//go to sections

let linksLi = document.querySelectorAll("nav ul li");

linksLi.forEach((link)=>{
    link.addEventListener("click",(e)=>{
        e.preventDefault();

        document.querySelector(e.target.dataset.section).scrollIntoView({
            behavior: 'smooth'
        });

    });
});

//select subet at conect me
let btnSubmit = document.querySelector(".submit");
btnSubmit.addEventListener("click",function(e){
    e.preventDefault();
    console.log("get it");
});



