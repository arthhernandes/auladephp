function mascaraCPF(){
    var cpf = document.getElementById('cpf');
    if(cpf.value.length == 3 || cpf.value.length == 7){
        cpf.value += ".";
    }else if(cpf.value.length == 11){
        cpf.value += "-";
    }
}

function mascaraData(){
    var dataNascimento = documento.getElementById('dataNascimento');
    if(dataNascimento.value.length == 2 || dataNascimento.value.length == 5){
        dataNascimento.value += "/";
    }
}