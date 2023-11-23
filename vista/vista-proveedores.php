<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Proveedores</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"
                            onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">Inicio</a></li>
                    <li class="breadcrumb-item active">Proveedores</li>
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
                                    <input type="number" id="ID_Proveedor" class="form-control" data-index="1">
                                    <label for="ID_Proveedor">ID Proveedor</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Nombre_Proveedor" class="form-control" data-index="2">
                                    <label for="Nombre_Proveedor">Nombre Proveedor</label>
                                </div>

                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>


        <!-- row para listado de proveedores/inventario -->
        <div class="row">
            <div class="col-lg-12">
                <table id="tbl_proveedores" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <th>ID Proveedor</th>
                            <th>Nombre Proveedor</th>
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
<div class="modal fade" id="mdlAgregarProveedor" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Proveedor</h5>
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
                                <label class="" for="iptNombreProveedor"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre Del Proveedor</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreProveedor"
                                    placeholder="Nombre Del Proveedor" required>
                                <div class="invalid-feedback">Ingrese El Nombre Del Proveedor</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProveedor">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnGuardarRegistroProveedor">Guardar</button>
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
<div class="modal fade" id="mdlActualizarProveedor">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Actualizar Proveedor</h5>
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

                                <input type="hidden" id="ipt_ID_Proveedor" value="">
                                <label class="" for="iptNombreProveedor2"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre Del Proveedor</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreProveedor2"
                                    placeholder="Nombre Del Proveedor" required>
                                <div class="invalid-feedback">Ingrese El Nombre Del Proveedor</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProveedor">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnActualizarRegistroProveedor">Actualizar</button>
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
            url: "ajax/proveedores.ajax.php",
            type: "POST",
            data: { 'accion': 4 }, //1: LISTAR PROveedore
            dataType: 'json',
            success: function (respuesta) {
                console.log("respuesta", respuesta);
            }
        });


        table = $("#tbl_proveedores").DataTable({

            dom: 'Bfrtip',
            buttons: [{
                text: 'Agregar Proveedor',
                className: 'addNewRecord',
                action: function (e, dt, node, config) {
                    //EVENTO PARA LEVENTAR LA VENTA MODAL
                    $("#mdlAgregarProveedor").modal('show');
                    accion = 5;
                }
            }, 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,

            ajax: {
                url: "ajax/proveedores.ajax.php",
                dataSrc: '',
                type: "POST",
                data: { 'accion': 4 }, //1: LISTAR PROveedores
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
                            "<span class='btnEditarProveedor text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +
                            "<span class='btnEliminarProveedor text-danger px-1' style='cursor:pointer;'>" +
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


        $("#ID_Proveedor").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Nombre_Proveedor").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#btnLimpiarBusqueda").on('click', function () {

            $("#ID_Proveedor").val('')
            $("#Nombre_Proveedor").val('')

            table.search('').columns().search('').draw();
        })

        $('#tbl_proveedores tbody').on('click', '.btnEditarProveedor', function () {

            $("#mdlActualizarProveedor").modal('show');
            var data = table.row($(this).parents('tr')).data();
            accion = 6;

            $("#ipt_ID_Proveedor").val(data[1]);
            $("#iptNombreProveedor2").val(data[2]);

        })


    })

    document.getElementById("btnGuardarRegistroProveedor").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Registrar El Proveedor")

                Swal.fire({
                    title: 'Esta Seguro De Registrar Este Proveedor?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Si, Deseo Registrarlo',
                    cancelButtonText: 'Cancelar',
                }).then((result) => {

                    if (result.isConfirmed) {
                        var datos = new FormData();
                        datos.append("accion", accion);
                        datos.append("Nombre", $("#iptNombreProveedor").val());

                        if (accion == 5) {
                            var titulo_msj = "El Proveedor Se Agrego Correctamente"
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

                                    $("#mdlAgregarProveedor").modal('hide');

                                    $("#iptNombreProveedor").val("");


                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Proveedor No Fue Agregado'
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



    document.getElementById("btnCancelarRegistroProveedor").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

    document.getElementById("btnCerrarModal").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

</script>