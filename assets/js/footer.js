
let url = location.pathname.split("/");
let n = url.length - 1;


let check = url[n];

console.log(check);
document.getElementById(`${check}`).style.color = "white";

