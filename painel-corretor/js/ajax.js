$(document).ready(function() {
    listar();
} );

function listar(){
    $.ajax({
        url: 'pagina/' + pag + "/listar.php",
        method: 'POST',
        data: $('#form').serialize(),
        dataType: "html",

        success:function(result){
            $("#listar").html(result);
            $('#mensagem-excluir').text('');
        }
    });
}

function inserir(){
    $('#mensagem').text('');
    $('#tituloModal').text('Inserir Registro');
    $('#modalForm').modal('show');
    
}



$("#form").submit(function () {	
	event.preventDefault();
	var formData = new FormData(this);

	$.ajax({
		url: 'pagina/' + pag + "/inserir.php",
		type: 'POST',
		data: formData,

		success: function (mensagem) {
            $('#mensagem').text('');
            $('#mensagem').removeClass()
            if (mensagem.trim() == "Salvo com Sucesso") {                    
                    $('#btn-fechar').click();
                    listar();
                } else {
                	$('#mensagem').addClass('text-danger')
                    $('#mensagem').text(mensagem)
                }

            },

            cache: false,
            contentType: false,
            processData: false,
            
        });

});





function excluir(id){
    $.ajax({
        url: 'paginas/' + pag + "/excluir.php",
        method: 'POST',
        data: {id},
        dataType: "text",

        success: function (mensagem) {            
            if (mensagem.trim() == "Excluído com Sucesso") {                
                listar();                
            } else {
                    $('#mensagem-excluir').addClass('text-danger')
                    $('#mensagem-excluir').text(mensagem)
                }

        },      

    });
}




function ativar(id, acao){
    $.ajax({
        url: 'paginas/' + pag + "/mudar-status.php",
        method: 'POST',
        data: {id, acao},
        dataType: "text",

        success: function (mensagem) {
            if (mensagem.trim() == "Alterado com Sucesso") {
                 listar();
            }               
        },

    });
}