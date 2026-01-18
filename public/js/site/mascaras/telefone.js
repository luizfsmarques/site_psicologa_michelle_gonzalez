// Máscara do telefone
let telUsuario = document.querySelector('#input-telefone-principal');

telUsuario.addEventListener('input', function (e) {

    let tecla = e.data;
    let backspace = e.inputType;

    if ((tecla === "0") || (tecla === "1") || (tecla === "2") || (tecla === "3") || (tecla === "4")
        || (tecla === "5") || (tecla === "6") || (tecla === "7") || (tecla === "8") || (tecla === "9")

    ) {

        if (telUsuario.value.length == 1) {

            telUsuario.value = '(' + telUsuario.value;

        } else if (telUsuario.value.length == 3) {

            telUsuario.value = telUsuario.value + ')';

        } else if (telUsuario.value.length == 9) {

            telUsuario.value = telUsuario.value + '-';

        }

        sessionStorage.setItem('lastInput', telUsuario.value);
        // console.log(sessionStorage.getItem('lastInput'));


    } else if ((backspace !== "deleteContentBackward") && ((tecla !== "0") || (tecla !== "1") || (tecla !== "2") || (tecla !== "3") || (tecla !== "4")
        || (tecla !== "5") || (tecla !== "6") || (tecla !== "7") || (tecla !== "8") || (tecla !== "9")
    )) {
        telUsuario.value = sessionStorage.getItem('lastInput');

    }

});