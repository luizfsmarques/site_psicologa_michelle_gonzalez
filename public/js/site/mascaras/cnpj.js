let cnpj = document.querySelector('#input-cnpj');

cnpj.addEventListener('input',function(e){

    let tecla = e.data;
    let backspace = e.inputType;

    if((tecla === "0") || (tecla === "1") || (tecla === "2") || (tecla === "3") || (tecla === "4") 
    || (tecla === "5") || (tecla === "6") || (tecla === "7") || (tecla === "8") || (tecla === "9") 

    ){

        if(cnpj.value.length==2){

            cnpj.value = cnpj.value+'.';

        }else if(cnpj.value.length==6){

            cnpj.value = cnpj.value+'.';

        }else if(cnpj.value.length==10){

            cnpj.value = cnpj.value+'/';

        }else if(cnpj.value.length==15){

            cnpj.value = cnpj.value+'-';

        }

        sessionStorage.setItem('lastInput',cnpj.value);
        // console.log(sessionStorage.getItem('lastInput'));


    }else if( (backspace !== "deleteContentBackward") && ((tecla !== "0") || (tecla !== "1") || (tecla !== "2") || (tecla !== "3") || (tecla !== "4") 
    || (tecla !== "5") || (tecla !== "6") || (tecla !== "7") || (tecla !== "8") || (tecla !== "9") 
    ) ){
        cnpj.value = sessionStorage.getItem('lastInput');

    }

});