let cpf = document.querySelector('#input-cpf');

cpf.addEventListener('input',function(e){

    let tecla = e.data;
    let backspace = e.inputType;

    if((tecla === "0") || (tecla === "1") || (tecla === "2") || (tecla === "3") || (tecla === "4") 
    || (tecla === "5") || (tecla === "6") || (tecla === "7") || (tecla === "8") || (tecla === "9") 

    ){

        if(cpf.value.length==3){

            cpf.value = cpf.value+'.';

        }else if(cpf.value.length==7){

            cpf.value = cpf.value+'.';

        }else if(cpf.value.length==11){

            cpf.value = cpf.value+'-';
        }

        sessionStorage.setItem('lastInput',cpf.value);
        // console.log(sessionStorage.getItem('lastInput'));


    }else if( (backspace !== "deleteContentBackward") && ((tecla !== "0") || (tecla !== "1") || (tecla !== "2") || (tecla !== "3") || (tecla !== "4") 
    || (tecla !== "5") || (tecla !== "6") || (tecla !== "7") || (tecla !== "8") || (tecla !== "9") 
    ) ){
        cpf.value = sessionStorage.getItem('lastInput');

    }

});