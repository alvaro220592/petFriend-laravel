// SELECT DINÂMICO AGENDAMENTO - PRECISOU COLOCAR AQUI EM PRIMEIRO
$(document).ready(function () {
    $('#pet, #pet_label').hide(); 
    $('#tutor').on('change', function () {
        $('#pet, #pet_label').show(500);
        // $('#tutor').animate({width:"50%"})
        let id = $(this).val();
        $('#pet').empty();
        $('#pet').append(`<option value="0" disabled selected>Processando...</option>`);
        $.ajax({
            type: 'GET',
            url: 'getPets/' + id,
            success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#pet').empty();
                $('#pet').append(`<option value="0" disabled selected>Selecione o pet</option>`);
                response.forEach(element => {
                    $('#pet').append(`<option value="${element['id']}">${element['pet_name']}</option>`);
                });
            }
        });
    });
});


// BOTÃO DINAMICO - FINALIZAR AGENDAMENTO
$document.ready(function() {

})

// VIACEP
const cep = document.querySelector("#cep")

const showData = (result)=>{
    for(const campo in result){
        if(document.querySelector("#"+campo)){
            document.querySelector("#"+campo).value = result[campo]
        }
    }
}

// Se houver o campo '#cep'
if(document.querySelector('#cep')){
    cep.addEventListener("blur",(e)=>{
        let search = cep.value.replace("-","")
        const options = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }

        fetch(`https://viacep.com.br/ws/${search}/json/`, options)
        .then(response =>{ response.json()
            .then( data => showData(data))
        })
        .catch(e => console.log('Deu Erro: '+ e,message))
    })
}

// abrir modal
function modal(){
    $(document).ready(function(){
        $('#modal').modal('show')
    })
}