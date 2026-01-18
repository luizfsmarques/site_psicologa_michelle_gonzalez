let cep = document.querySelector('#input-cep');

cep.addEventListener('input',function(e){

    let tecla = e.data;
    let backspace = e.inputType;

    if((tecla === "0") || (tecla === "1") || (tecla === "2") || (tecla === "3") || (tecla === "4") 
    || (tecla === "5") || (tecla === "6") || (tecla === "7") || (tecla === "8") || (tecla === "9") 

    ){

        if(cep.value.length==2){

            cep.value = cep.value+'.';

        }else if(cep.value.length==6){

            cep.value = cep.value+'-';

        }

        sessionStorage.setItem('lastInput',cep.value);
        // console.log(sessionStorage.getItem('lastInput'));


    }else if( (backspace !== "deleteContentBackward") && ((tecla !== "0") || (tecla !== "1") || (tecla !== "2") || (tecla !== "3") || (tecla !== "4") 
    || (tecla !== "5") || (tecla !== "6") || (tecla !== "7") || (tecla !== "8") || (tecla !== "9") 
    ) ){
        cep.value = sessionStorage.getItem('lastInput');

    }

});