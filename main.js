

function inserir(num){
    var numero = document.getElementById('res').innerHTML;
    document.getElementById('res').innerHTML = numero + num;
}

function limpar(){
    document.getElementById('res').innerHTML ="";
}

function apagar(){
    var res = document.getElementById('res').innerHTML;
    document.getElementById('res'). innerHTML = res.substring(0, res -1)
}


function calcular(){
    var resultado = document.getElementById('res').innerHTML;

    if(resultado){
        // a função EVAL faz a identificação e separação dos numeros e simbolos de operações
        document.getElementById('res').innerHTML = eval(resultado);
    }
}