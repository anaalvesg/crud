let editor = new DataTable.Editor({
    ajax: 'buscarGemas_ajax.php',
    table: '#gemList',
    fields: [
        { label: 'Nome', name: 'nome' },
        { label: 'Categoria', name: 'categoria' },
        { label: 'Sistema cristalino', name: 'sistema' },
        { label: 'Dureza', name: 'dureza' },
    ]
});

let table = new DataTable('#gemList', {
    ajax: 'buscarGemas_ajax.php',
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