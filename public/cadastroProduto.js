const verificar = () =>{
    const _token = $('#_token').val();
    let nome = $("#nome").val();
    let id_fornecedor = $("#fornecedor").val();
    let preco = $("#preco").val();
    let validade = $("#validade").val();

    if(validade == '' || validade == null){
        validade = null;
    }

    const form = {
        _token,
        nome,
        id_fornecedor,
        preco,
        validade
    }

    salvarProduto(form);
}

const salvarProduto = (form) =>{
    $.ajax({
        type: "POST",
        url: "/funcionario/cadastrar",
        data: form,
        success: function (response) {
            
        }
        
    });
}

$(document).ready(function () {
    $("#salvar").click(()=> verificar());
});

