document.querySelector("btnValidar").addEventListener("click", function () {
    let msg = "";
    
    if (document.querySelector("#name").value.length < 3 || !isNaN(document.querySelector("#name").value)) {
        msg += 'Nome inválido'
    }

    if (document.querySelector("#category").value.length < 3 || !isNaN(document.querySelector("#category").value)) {
        msg += '\n Categoria mineral inválida'
    }

    if (document.querySelector("#mohs-scale").value.length > 10 || isNaN(document.querySelector("#mohs-scale"))) {
        msg += '\n Dureza inválida'
    }

    console.log(msg)
});