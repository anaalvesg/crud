// validacoes de registro
document.querySelector("#btnValidar").addEventListener("click", function () {
    let msg = "";
    
    if (document.querySelector("#name").value.length < 3 || !isNaN(document.querySelector("#name").value)) {
        msg += 'Nome inválido'
    }

    if (document.querySelector("#category").value.length < 3 || !isNaN(document.querySelector("#category").value)) {
        msg += '\n Categoria mineral inválida'
    }

    if (document.querySelector("#mohsScale").value.length > 10 || isNaN(document.querySelector("#mohs-scale"))) {
        msg += '\n Dureza inválida'
    }

    if (msg != "") {
        alert(msg);
    }

    // enviando o valor do input pro arquivo ajax
    fetch('criarGemas_ajax.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        
        body: JSON.stringify({
            nome: document.querySelector('#name').value,
            categoria: document.querySelector('#category').value,
            sistema: document.querySelector('#crystalSystem').value,
            dureza: document.querySelector('#mohsScale').value,
        })
    })
});