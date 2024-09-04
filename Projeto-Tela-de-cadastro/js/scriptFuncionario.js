function Limpar(){
    document.getElementById('Nome').value = ''
    document.getElementById('Sobrenome').value = ''
    document.getElementById('Cargo').value = ''
    document.getElementById('Data').value = ''
    document.getElementById('Salario').value = ''
    document.getElementById('Senha').value = ''
}

var form = document.getElementById('form')
form.addEventListener('submit',(event) =>{ 
    var dt = document.getElementById('Data').value
    var dta = new Date(dt).toISOString()
    var data = new Date().toISOString()
    if(dta > data){
        document.getElementById('span').style.display = 'block'
        document.getElementById('Data').style.border = 'solid red 1px'
        event.preventDefault()
    }else{
        document.getElementById('span').style.display = 'none'
        document.getElementById('Data').style.display = 'solid 1px lightgrey'
    }
});
   