<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Sriracha&display=swap');

        * {
            font-family: 'Noto Sans JP', sans-serif;
        }

        body {
            width: 100%;
            background-image: url("midias/background.png");
            background-repeat: no-repeat;
        }

        label {
            font-size: 15px;
            font-weight: 500;
        }

        select option {
            font-size: 14px;
        }
    </style>

</head>
<body>
    <div class="container col-md-8 pt-5 pb-5 my-5" style="background-color: white; color: black; border-radius: 16px; opacity: 0.7;">
        <div class="col">
            <div class="text-center">
                <h1>Cadastro de gemas</h1>
                <p> Inserir propriedades mineralógicas da gema. </p>
            </div>
            <div class="col-md-6 mx-auto pt-3">
                <div class="form-group">
                    <label for="name">Nome</label>
                    <input type="text" id="name" class="form-control form-control-sm" placeholder="Ex.: Diamante, Cinábrio, Fosfofilita" required>
                </div>
            </div>
            <div class="col-md-6 mx-auto pt-3">
                <div class="form-group">
                    <label for="category">Categoria mineral</label>
                    <input type="text" id="category" class="form-control form-control-sm" required>
                </div>
            </div>
            <div class="col-md-6 mx-auto pt-3">
                <label for="crystalSystem" class="form-label">Sistema cristalino: </label>
                <select id="crystalSystem" class="form-control form-control-sm" required>
                    <option value="1"> Cúbico </option>
                    <option value="2"> Tetragonal </option>
                    <option value="3"> Ortorrômbico </option>
                    <option value="4"> Hexagonal </option>
                    <option value="5"> Trigonal </option>
                    <option value="6"> Monoclínico </option>
                    <option value="7"> Triclínico </option>
                </select>
            </div>
            <div class="col-md-6 mx-auto pt-3">
                <div class="form-group">
                    <label for="mohsScale"> Dureza (Escala de Mohs)</label>
                    <input type="number" id="mohsScale" class="form-control form-control-sm" placeholder="Ex.: 3.5" required>
                </div>
            </div>
            <div class="col-md-6 mx-auto pt-3 text-end">
                <button id="btnValidar" class="btn btn-dark btn-sm meu-botao"> Registrar gema </button>
            </div>
        </div>
    </div>
</body>

<script type="module" src="index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</html>