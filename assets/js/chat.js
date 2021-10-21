let msgExpansion = document.querySelector("#chat__expand");
let msg = document.querySelector(".chat__sec__head");
let chatIcon = document.querySelector(".chat__sec__img");

function myFunction(){

    if (document.querySelector("#chat__expand").style.display === "none") {
        document.querySelector("#chat__expand").style.display = "block";
    } else {
        document.querySelector("#chat__expand").style.display = "none";
    }
}

// chatIcon.onclick = function(){
//     msgExpansion.style.display = "block";
// }

