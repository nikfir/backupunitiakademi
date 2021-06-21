var darkbtn = document.getElementById("darkbtn");
var htmltag = document.getElementById("htmltag");
darkbtn.addEventListener("click", toggleDark);


function toggleDark()
{
    htmltag.classList.toggle("dark");
}