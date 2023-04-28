/*DARK MODE*/
const toggleSwitch = document.querySelector(".toggle-button");

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
  }
}

toggleSwitch.addEventListener("change", switchTheme, false);

/*LIMIT USERCHOICES CHECKBOXES*/

// function limitCheckboxes(){
//     let checkboxes = document.getElementsById('#userFeed');
//     let checked = 0;

//     for (let i = 0; i < checkboxes.length; i++){
//         if(checkboxes[i].checked == true){
//             checked += 1;
//         }

//     }
//     if(checked > 3){
//         document.getElementById('#errorCheckboxes').innerText = "Vous ne pouvez selectionner que 3 sujets";
//         return false;
//     }else{
//         document.getElementById('#errorCheckboxes').innerText = "";
//     }
// }

/*STICKY BACK TO TOP BUTTON*/
// let mybutton = document.getElementById("backTopBtn");
// window.onscroll = function () {
//     scrollFunction();
// };

// function scrollFunction() {
//     if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
//         mybutton.style.display = "block";
//     } else {
//         mybutton.style.display = "none";
//     }
// }

// function topFunction() {
//     document.body.scrollTop = 0;
//     document.documentElement.scrollTop = 0;
//     }
