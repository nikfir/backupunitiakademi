var lastScrollTop = 0;
var navStatus = true;
var navbtn = document.getElementById("navbtn");
var header = document.getElementById("header");
var nav = document.getElementById("nav");
var subnav = document.getElementById("subnav");
var main = document.getElementById("main");
var smNavStatus = true;
var smnavbtn = document.getElementById("smnavbtn");

smnavbtn.addEventListener("click", toggleSmNav);

navbtn.addEventListener("click", toggleSubNav);

window.onscroll = function() {changeHeaderColor()};

function changeHeaderColor() 
{
    var st = document.documentElement.scrollTop;
    if (st > lastScrollTop){
        if (document.documentElement.scrollTop > 1) {
            if (navStatus == true)
            {
                header.classList.add("md:bg-nav-l");
                header.classList.remove("md:bg-body-l"); 
                header.classList.remove("md:bg-subnav-l");
                header.classList.add("md:dark:bg-nav-d");
                header.classList.remove("md:dark:bg-body-d"); 
                header.classList.remove("md:dark:bg-subnav-d");
            }
            else{
                header.classList.add("md:bg-subnav-l");
                header.classList.remove("md:bg-body-l");
                header.classList.remove("md:bg-nav-l");
                header.classList.add("md:dark:bg-subnav-d");
                header.classList.remove("md:dark:bg-body-d");
                header.classList.remove("md:dark:bg-nav-d");
            }
            header.classList.remove("bg-body-l");
            header.classList.add("bg-subnav-l");
            header.classList.remove("dark:bg-body-d");
            header.classList.add("dark:bg-nav-d");
            header.classList.add("shadow-md");
            if(smNavStatus == false)
            {
                toggleSmNav();
            }
        }       
    }
    else
    {
        if (document.documentElement.scrollTop < 1){
            header.classList.remove("md:bg-subnav-l");
            header.classList.remove("md:bg-nav-l");
            header.classList.add("md:bg-body-l")
            header.classList.remove("md:dark:bg-subnav-d");
            header.classList.remove("md:dark:bg-nav-d");
            header.classList.add("md:dark:bg-body-d")
            header.classList.remove("shadow-md");
            header.classList.add("bg-body-l");
            header.classList.remove("bg-subnav-l");
            header.classList.add("dark:bg-body-d");
            header.classList.remove("dark:bg-nav-d");

        }
        else
        {
            if(smNavStatus == false)
            {
                toggleSmNav();
            }
        }
    }  
    lastScrollTop = st;
    lastScroll = st;
};

function toggleSmNav()
{   
    if(smNavStatus == true)
    {
        header.classList.add("shadow-md");
        header.classList.add("bg-subnav-l");
        header.classList.remove("bg-body-l");
        header.classList.add("dark:bg-nav-d");
        header.classList.remove("dark:bg-body-d");
        nav.classList.toggle("-left-14");
        setTimeout(function(){
            subnav.classList.toggle("-left-70");
        }, 200);
    }
    else 
    {
        if (lastScrollTop == 0)
        {
            header.classList.remove("shadow-md");
            header.classList.add("bg-body-l");
            header.classList.remove("bg-subnav-l");
            header.classList.add("dark:bg-body-d");
            header.classList.remove("dark:bg-nav-d");
        }
        subnav.classList.toggle("-left-70");
        setTimeout(function(){
            nav.classList.toggle("-left-14");
        }, 200);
    }
    smNavStatus = !smNavStatus;
}

function toggleSubNav()
{
    header.classList.toggle("md:pl-80");
    main.classList.toggle("md:pl-80");
    subnav.classList.toggle("md:-left-60");
    subnav.classList.toggle("ease-out");
    console.log(lastScrollTop);
    navStatus = !navStatus;
    if (lastScrollTop != 0)
    {
        if (navStatus == false)
        {
            header.classList.add("md:bg-subnav-l");
            header.classList.remove("md:bg-body-l");
            header.classList.remove("md:bg-nav-l");
            header.classList.add("md:dark:bg-subnav-d");
            header.classList.remove("md:dark:bg-body-d");
            header.classList.remove("md:dark:bg-nav-d");
        }
        else
        {
            header.classList.add("md:bg-nav-l");
            header.classList.remove("md:bg-body-l");
            header.classList.remove("md:bg-subnav-l");
            header.classList.add("md:dark:bg-nav-d");
            header.classList.remove("md:dark:bg-body-d");
            header.classList.remove("md:dark:bg-subnav-d");
        }
    }
}

