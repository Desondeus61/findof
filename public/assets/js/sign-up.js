var currentStep = 0;
var steps = document.getElementsByClassName("step");

function nextStep(event) {
  event.preventDefault();
  if (!validateForm(steps[currentStep])) {

        Toastify({
            text: "Veuillez remplir tous les champs.",
            duration: 3000,
            close: true,
            style: {
                background: "red",
              },
        }).showToast();

  }else{
    steps[currentStep].style.display = "none";
    steps[currentStep + 1].style.display = "block";
    currentStep++;
  }
}

function prevStep(event) {
  event.preventDefault();
  steps[currentStep].style.display = "none";
  steps[currentStep - 1].style.display = "block";
  currentStep--;
}

function validateForm(maDiv) {

let elementsDansLaDiv = maDiv.querySelectorAll("input, select, textarea");

let tousRemplis = true;

for (let i = 0; i < elementsDansLaDiv.length; i++) {
    let element = elementsDansLaDiv[i];

    if (element.tagName === "INPUT") {
        if (element.type === "text" || element.type === "password" || element.type === "email") {
            if (element.value.trim() === "") {
                tousRemplis = false;
                break;
            }
        }else if (element.type === "file") {
            // Pour les éléments de type file
            if (element.files.length === 0) {
                tousRemplis = false;
                break; // S'il y a au moins un champ file vide, sortir de la boucle
            }
        }else if (element.type === "checkbox") {
            // Pour les éléments de type checkbox
            if (!element.checked) {
                tousRemplis = false;
                break; // S'il y a au moins une case à cocher non cochée, sortir de la boucle
            }
        }
    }
     else if (element.tagName === "SELECT" || element.tagName === "TEXTAREA") {
        if (element.value.trim() === "") {
            tousRemplis = false;
            break;
        }
    }
}
  return tousRemplis;
}

function submitForm(e){

e.preventDefault();

if (!validateForm(steps[2])) {

    Toastify({
        text: "Veuillez remplir tous les champs.",
        duration: 3000,
        close: true,
        style: {
            background: "red",
          },
    }).showToast();

}else{
document.getElementById("step-form").submit();
}
}
