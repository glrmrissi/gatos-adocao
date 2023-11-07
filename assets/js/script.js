var links = document.getElementById("myLinks");
var openNavbar = document.getElementsById("openNavbar")

openNavbar.addEventListener('click', function() {
    links.classList.toggle(".navBarActive")
}) 

function openNavbar() {
    links.classList.toggle("navBarActive")
}