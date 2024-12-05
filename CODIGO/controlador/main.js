$(function() {
    document.title = "CRUD";
    $('#otra').click(function() {

        $(location).attr('href', 'vista/profesores.php')

    })

    var tablaPersonas = $('#tablaPersonas').DataTable({
        "ajax": {
            "url": "bd/crud.php",
            "error": function(jqXHR, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + jqXHR.statusText + "\r\n" + jqXHR.responseText + "\r\n" + ajaxOptions.responseText);
            },
            "method": "POST",
            "data": { opcion: '5' },
            "dataSrc": ""
        },
        "columns": [
            { "data": "id" },
            { "data": "nombre" },
            { "data": "pais" },
            { "data": "edad" },
            { "defaultContent": `<div class='text-center'><button class='btn btn-primary btnEditar mr-1'>EDITAR</button>
        <button class='btn btn-danger btnBorrar'>APAGAR</button></div>` }
        ]
    });

    $('#btnNuevo').click(function() {
        $('#formPersonas').trigger('reset');
        $('.modal-header').css('background-color', '#28a745');
        $('.modal-title').text('NOVA PESSOA');
        $('.modal-header').css('color', 'white');
        $('#modalCRUD').modal('show');
        opcion = 1;
        id = null;
    });

    $('#formPersonas').submit(function(e) {
        e.preventDefault();
        let nombre = $.trim($('#nombre').val());
        let pais = $.trim($('#pais').val());
        let edad = $.trim($('#edad').val());
        console.log(opcion);
        $.ajax({
            type: "post",
            url: "bd/crud.php",
            data: {
                nombre: nombre,
                pais: pais,
                edad: edad,
                id: id,
                opcion: opcion
            },
            dataType: "json",
            success: function(data) {
                tablaPersonas.ajax.reload(null, false);
            }
        });
        $('#modalCRUD').modal('hide');
    });

    $('#tablaPersonas tbody').on('click', '.btnEditar', function() {
        let data = tablaPersonas.row($(this).parents()).data();
        console.log(data);

        id = data.id;
        nombre = data.nombre;
        pais = data.pais;
        edad = data.edad;

        $('#nombre').val(nombre);
        $('#pais').val(pais);
        $('#edad').val(edad);
        opcion = 2; 

        $('.modal-header').css('background-color', '#007bff');
        $('.modal-header').css('color', 'white');
        $('.modal-title').text('EDITAR ESSA PESSOA');
        $('#modalCRUD').modal('show');
    })

    $('#tablaPersonas tbody').on('click', '.btnBorrar', function() {
        fila = $(this);
        let data = tablaPersonas.row($(this).parents()).data();
        id = data.id;
        opcion = 3;
        console.log(data.id);
        var respuesta = confirm("VOCÊ TEM CERTEZA QUE DESEJA APAGAR O REGISTRO: " + id + "?");
        if (respuesta) {
            $.ajax({
                type: "post",
                url: "bd/crud.php",
                data: { opcion: opcion, id: id },
                dataType: "json",
                success: function() {
                    tablaPersonas.row(fila.parents('tr')).remove().draw();
                }
            });
        }
    })
}); 