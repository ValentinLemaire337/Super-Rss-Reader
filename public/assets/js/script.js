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


let button = document.getElementById('valider');
button.addEventListener('click', () =>{
location.href= '';
})