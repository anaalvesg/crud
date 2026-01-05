let editor = new DataTable.Editor({
    ajax: 'editar_deletar_gemas_ajax.php',
    table: '#gemList',
    idSrc: 'id',
    fields: [
        { label: 'Nome', name: 'nome' },
        { label: 'Categoria', name: 'categoria' },
        { 
            label: 'Sistema cristalino', 
            name: 'idSistema',
            type: 'select',
            placeholder: 'Selecionar categoria mineral: ',
            options: [
                {label: 'Cúbico', value: 1},
                {label: 'Tetragonal', value: 2},
                {label: 'Ortorrômbico', value: 3},
                {label: 'Hexagonal', value: 4},
                {label: 'Trigonal', value: 5},
                {label: 'Monoclínico', value: 6},
                {label: 'Triclínico', value: 7}
            ]
        },
        { label: 'Dureza', name: 'dureza' },
    ]
});

let table = new DataTable('#gemList', {
    ajax: 'buscarGemas_ajax.php',
    rowId: 'id',
    columns: [
        { data: 'nome' },
        { data: 'categoria' },
        { data: 'sistema_cristalino' },
        { data: 'dureza' },
    ],
    layout: {
        topStart: {
            buttons: [
                { extend: 'edit',   editor: editor },
                { extend: 'remove', editor: editor }
            ]
        }
    },
    select: true
});