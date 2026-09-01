function verificaropcao() {
    
    const input_cliente = document.getElementById("botao_cliente");
    const input_restaurante = document.getElementById("botao_restaurante");

    const tela_cliente = document.getElementById("formulario_cliente");
    const tela_restaurante = document.getElementById("formulario_restaurante");

    if (input_cliente.checked) {
        tela_cliente.style.display = "block";
        tela_restaurante.style.display = "none";
    }

    else if (input_restaurante.checked) {
        tela_cliente.style.display = "none";
        tela_restaurante.style.display = "block";
    }
}