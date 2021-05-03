$(function () {
    //busca pelo cep
    $("#cep").keyup(function (e) {

        var cep = $(this).val();

       if (cep.length === 8){
           $.ajax({
               url: "https://viacep.com.br/ws/"+cep+"/json/",
               type: 'GET',
               success: function (response){

                   console.log(response)

                   $("#uf").val(response.uf);
                   $("#city").val(response.localidade);
                   $("#bairro").val(response.bairro);
                   $("#logradouro").val(response.logradouro);
                   $("#complemento").val(response.complemento);

               }
           })
       }

    });
})
