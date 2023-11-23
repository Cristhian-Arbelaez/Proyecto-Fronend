<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Categorías</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"
                            onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">Inicio</a></li>
                    <li class="breadcrumb-item active">Categorías</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- row para criterios de busqueda -->
        <div class="row">

            <div class="col-lg-12">

                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">CRITERIOS DE BÚSQUEDA</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn btn-tool text-danger" id="btnLimpiarBusqueda">
                                <i class="fas fa-trash fs-5"></i>
                            </button>
                        </div> <!-- ./ end card-tools -->
                    </div> <!-- ./ end card-header -->
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="ID_Categoria" class="form-control" data-index="1">
                                    <label for="ID_Categoria">ID Categoría</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Nombre_Categoria" class="form-control" data-index="2">
                                    <label for="Nombre_Categoria">Nombre Categoría</label>
                                </div>

                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>


        <!-- row para listado de categorías -->
        <div class="row">
            <div class="col-lg-12">
                <table id="tbl_categorias" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <th>ID Categorías</th>
                            <th>Nombre Categoría</th>
                            <th>Fecha Creación</th>
                            <th class="text-cetner">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-small">
                    </tbody>
                </table>
            </div>
        </div>

    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<!-- VENTANA MODAL PARA AGREGAR PROVEEDOR -->
<div class="modal fade" id="mdlAgregarCategoria" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Categoría</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnCerrarModal"
                    data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptNombreCategoria"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre De La Categoría</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreCategoria"
                                    placeholder="Nombre De La Categoría" required>
                                <div class="invalid-feedback">Ingrese El Nombre De La Categoría</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroCategoria">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnGuardarRegistroCategoria">Guardar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- VENTANA MODAL PARA AGREGAR PROVEEDOR -->

<!-- VENTANA MODAL PARA ACTUALIZACION -->
<div class="modal fade" id="mdlAgregarCategoria" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Categoría</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnCerrarModal"
                    data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-4">
                            <div class="form-group mb-2">
                                <label class="" for="iptNombreCategoria"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre De La Categoría</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreCategoria"
                                    placeholder="Nombre De La Categoría" required>
                                <div class="invalid-feedback">Ingrese El Nombre De La Categoría</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroCategoria">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnGuardarRegistroCategoria">Guardar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- VENTANA MODAL PARA ACTUALIZACION -->



<script>

    var accion;
    var table;
    var validation = true;

    var Toast = Swal.mixin({
        toast: true,
        position: 'top',
        showConfirmButton: false,
        timer: 3000
    });

    $(document).ready(function () {

        $.ajax({
            url: "ajax/categorias.ajax.php",
            type: "POST",
            data: { 'accion': 7 }, //1: LISTAR PROveedore
            dataType: 'json',
            success: function (respuesta) {
                console.log("respuesta", respuesta);
            }
        });


        table = $("#tbl_categorias").DataTable({

            dom: 'Bfrtip',
            buttons: [{
                text: 'Agregar Categoría',
                className: 'addNewRecord',
                action: function (e, dt, node, config) {
                    //EVENTO PARA LEVENTAR LA VENTA MODAL
                    $("#mdlAgregarCategoria").modal('show');
                    accion = 8;
                }
            }, 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,

            ajax: {
                url: "ajax/categorias.ajax.php",
                dataSrc: '',
                type: "POST",
                data: { 'accion': 7 }, //1: LISTAR PROveedores
            },

            responsive: {
                details: {
                    type: 'column'
                }
            },
            columnDefs: [
                {
                    targets: 0,
                    visible: false
                },

                {
                    targets: 4,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarCategoria text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +
                            "<span class='btnEliminarCategoria text-danger px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-trash fs-5'></i>" +
                            "</span>" +
                            "</center>"
                    }
                },
            ],

            language: {
                url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
            }
        });


        $("#ID_Categoria").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Nombre_Categoria").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#btnLimpiarBusqueda").on('click', function () {

            $("#ID_Categoria").val('')
            $("#Nombre_Categoria").val('')

            table.search('').columns().search('').draw();
        })

        $('#tbl_categorias tbody').on('click', '.btnEditarCategoria', function () {

            $("#mdlActualizarCategoria").modal('show');
            var data = table.row($(this).parents('tr')).data();
            accion = 9;

            $("#ipt_ID_Proveedor").val(data[1]);
            $("#iptNombreProveedor2").val(data[2]);

        })


    })

    document.getElementById("btnGuardarRegistroCategoria").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Registrar La Categoría")

                Swal.fire({
                    title: 'Esta Seguro De Registrar Esta Categoría?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Deseo Registrarla',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        var datos = new FormData();
                        datos.append("accion", accion);
                        datos.append("Nombre", $("#iptNombreCategoria").val());

                        if (accion == 8) {
                            var titulo_msj = "La Categoría Se Agrego Correctamente"
                        }

                        $.ajax({
                            url: "ajax/categorias.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (respuesta) {
                                if (respuesta == "ok") {
                                    Toast.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlAgregarCategoria").modal('hide');

                                    $("#iptNombreCategoria").val("");


                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'La Categoría No Fue Agregado'
                                    });
                                }
                            }

                        });
                    }
                })


            } else {
                console.log("No Paso La Validacion")
            }

            form.classList.add('was-validated');
        });

    });

    document.getElementById("btnActualizarRegistroProveedor").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Actualizar El Proveedor")

                Swal.fire({
                    title: 'Esta Seguro De Actualizar Este Proveedor?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Deseo Actualizarlo',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        var datos = new FormData();
                        datos.append("accion", accion);
                        datos.append("ID_Proveedor", $("#ipt_ID_Proveedor").val());
                        datos.append("Nombre", $("#iptNombreProveedor2").val());

                        if (accion == 6) {
                            var titulo_msj = "El Proveedor Se Actualizo Correctamente"
                        }

                        $.ajax({
                            url: "ajax/proveedores.ajax.php",
                            method: "POST",
                            data: datos,
                            cache: false,
                            contentType: false,
                            processData: false,
                            dataType: 'json',
                            success: function (respuesta) {
                                if (respuesta == "ok") {
                                    Toast.fire({
                                        icon: 'success',
                                        title: titulo_msj
                                    });

                                    table.ajax.reload();

                                    $("#mdlActualizarProveedor").modal('hide');

                                    $("#ipt_ID_Proveedor").val("");
                                    $("#iptNombreProveedor2").val("");

                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Proveedor No Fue Actualizado'
                                    });
                                }
                            }

                        });
                    }
                })


            } else {
                console.log("No Paso La Validacion")
            }

            form.classList.add('was-validated');
        });

    });



    document.getElementById("btnCancelarRegistroCategoria").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

    document.getElementById("btnCerrarModal").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

</script>