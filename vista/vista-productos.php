<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Productos</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"
                            onclick="CargarContenidoPagina('vista/dashboard.php','content-wrapper')">Inicio</a></li>
                    <li class="breadcrumb-item active">Productos</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">

        <!-- Criterios de Busqueda -->
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
                        </div> 
                    </div> 
                    <div class="card-body">

                        <div class="row">

                            <div class="col-lg-12 d-lg-flex">

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="ID_Producto" class="form-control" data-index="1">
                                    <label for="ID_Producto">ID Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Nombre_Producto" class="form-control" data-index="2">
                                    <label for="Nombre_Producto">Nombre Producto</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Proveedor" class="form-control" data-index="5">
                                    <label for="Proveedor">Nombre Proveedor</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="text" id="Categoria" class="form-control" data-index="4">
                                    <label for="Categoria">Categoría</label>
                                </div>

                                <div style="width: 20%;" class="form-floating mx-1">
                                    <input type="number" id="Precio" class="form-control" data-index="3">
                                    <label for="Precio">Precio</label>
                                </div>

                            </div>

                            </div>

                        </div>
                    </div> <!-- ./ end card-body -->
                </div>

            </div>

        </div>


        <!-- Listado de productos-->
        <div class="row">
            <div class="col-lg-12">
                <table id="tbl_productos" class="table table-striped w-100 shadow">
                    <thead class="bg-info">
                        <tr style="font-size: 15px;">
                            <th></th>
                            <th>ID Producto</th>
                            <th>Nombre Producto</th>
                            <th>Precio Producto</th>
                            <th>Categoría</th>
                            <th>Proveedor</th>
                            <th>Fecha Creación</th>
                            <th class="text-cetner">Opciones</th>
                        </tr>
                    </thead>
                    <tbody class="text-small">
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Listado de productos-->

    </div>
</div>

<!-- VENTANA MODAL PARA AGREGAR PRODUCTO -->
<div class="modal fade" id="mdlAgregarProducto" role="dialog">

    <div class="modal-dialog modal-lg">

        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Agregar Producto</h5>
                <button type="button" class="btn btn-outline-primary text-white border-0 fs-5" id="btnCerrarModal"
                    data-bs-dismiss="modal">
                    <i class="far fa-times-circle"></i>
                </button>
            </div>

            <div class="modal-body">

                <form class="needs-validation" novalidate>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptNombreProducto"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre Del Producto</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreProducto"
                                    placeholder="Nombre Del Producto" required>
                                <div class="invalid-feedback">Ingrese El Nombre Del Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="iptPrecioProducto"><i class="fas fa-dollar-sign fs-6"></i>
                                    <span class="small">Precio Del Producto</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="50" class="form-control form-control-sm"
                                    id="iptPrecioProducto" placeholder="Precio Del Producto" required>
                                <div class="invalid-feedback">Ingrese El Precio Del Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selCategoria"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Categoría</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selCategoria" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Una Categoría</div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group mb-2">
                                <label class="" for="selProveedor"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Proveedor</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProveedor" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Proveedor</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProducto">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnGuardarRegistroProducto">Guardar</button>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- VENTANA MODAL PARA AGREGAR PRODUCTO -->

<!-- VENTANA MODAL PARA ACTUALIZACION -->
<div class="modal fade" id="mdlActualizarProducto">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

            <div class="modal-header bg-gray py-1 align-items-center">
                <h5 class="modal-title">Actualizar Producto</h5>
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

                            <div class="col-lg-4">
                            <div class="form-group mb-6">
                                <label class="" for="iptNombreProducto"><i class="fas fa-file-signature fs-6"></i>
                                    <span class="small">Nombre Del Producto</span><span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control form-control-sm" id="iptNombreProducto"
                                    placeholder="Nombre Del Producto" required>
                                <div class="invalid-feedback">Ingrese El Nombre Del Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mb-6">
                                <label class="" for="iptPrecioProducto"><i class="fas fa-dollar-sign fs-6"></i>
                                    <span class="small">Precio Del Producto</span><span class="text-danger">*</span>
                                </label>
                                <input type="number" min="50" class="form-control form-control-sm"
                                    id="iptPrecioProducto" placeholder="Precio Del Producto" required>
                                <div class="invalid-feedback">Ingrese El Precio Del Producto</div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mb-6">
                                <label class="" for="selCategoria2"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Categoría</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selCategoria2" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Una Categoría</div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group mb-6">
                                <label class="" for="selProveedor"><i class="fas fa-dumpster fs-6"></i>
                                    <span class="small">Proveedor</span><span class="text-danger">*</span>
                                </label>
                                <select class="form-select form-select-sm" aria-label=".form-select-sm example"
                                    id="selProveedor" required>
                                </select>
                                <div class="invalid-feedback">Seleccione Un Proveedor</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="form-group mb-2">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal"
                                    id="btnCancelarRegistroProducto">Cancelar</button>
                                <button type="button" class="btn btn-primary"
                                    id="btnActualizarRegistroProducto">Actualizar</button>
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
            url: "ajax/productos.ajax.php",
            type: "POST",
            data: { 'accion': 1 }, //1: LISTAR PRODUCTOS
            dataType: 'json',
            success: function (respuesta) {
                console.log("respuesta", respuesta);
            }
        });

        $.ajax({
            url: "ajax/proveedores.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (respuesta) {

                var options = '<option selected value="">Seleccione Un Proveedor</option>';

                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }

                $("#selProveedor").append(options);
                $("#selProveedor2").append(options);

            }
        });

        $.ajax({
            url: "ajax/categorias.ajax.php",
            cache: false,
            contentType: false,
            processData: false,
            dataType: 'json',
            success: function (respuesta) {

                var options = '<option selected value="">Seleccione Una Categoría</option>';

                for (let index = 0; index < respuesta.length; index++) {
                    options = options + '<option value=' + respuesta[index][0] + '>' + respuesta[index][1] + '</option>';
                }

                $("#selCategoria").append(options);
                $("#selCategoria2").append(options);

            }
        });


        table = $("#tbl_productos").DataTable({

            dom: 'Bfrtip',
            buttons: [{
                text: 'Agregar Producto',
                className: 'addNewRecord',
                action: function (e, dt, node, config) {
                    //EVENTO PARA LEVENTAR LA VENTA MODAL
                    $("#mdlAgregarProducto").modal('show');
                    accion = 2;
                }
            }, 'pageLength'
            ],
            pageLength: [5, 10, 15, 30, 50, 100],
            pageLength: 10,

            ajax: {
                url: "ajax/productos.ajax.php",
                dataSrc: '',
                type: "POST",
                data: { 'accion': 1 }, //1: LISTAR PRODUCTOS
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
                    targets: 7,
                    orderable: false,
                    render: function (data, type, full, meta) {
                        return "<center>" +
                            "<span class='btnEditarProducto text-primary px-1' style='cursor:pointer;'>" +
                            "<i class='fas fa-pencil-alt fs-5'></i>" +
                            "</span>" +
                            "<span class='btnEliminarProducto text-danger px-1' style='cursor:pointer;'>" +
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


        $("#ID_Producto").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Nombre_Producto").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Proveedor").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Precio").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })

        $("#Categoria").keyup(function () {
            table.column($(this).data('index')).search(this.value).draw();
        })
        


        $("#btnLimpiarBusqueda").on('click', function () {

            $("#ID_Producto").val('')
            $("#Nombre_Producto").val('')
            $("#Categoria").val('')
            $("#Proveedor").val('')
            $("#Precio").val('')

            table.search('').columns().search('').draw();
        })

        $('#tbl_productos tbody').on('click', '.btnEditarProducto', function () {

            $("#mdlActualizarProducto").modal('show');
            var data = table.row($(this).parents('tr')).data();
            accion = 3;

            $("#ipt_ID_Producto").val(data[1]);
            $("#iptNombreProducto2").val(data[2]);
            $("#iptPrecioProducto2").val(data[3]);
            $("#selProveedor2").val(data[4]);

        })
    })

    document.getElementById("btnGuardarRegistroProducto").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Registrar El Producto")

                Swal.fire({
                    title: 'Esta Seguro De Registrar Este Producto?',
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
                        datos.append("Nombre", $("#iptNombreProducto").val());
                        datos.append("Precio", $("#iptPrecioProducto").val());
                        datos.append("ID_Proveedor", $("#selProveedor").val());
                        datos.append("ID_Categoria", $("#selCategoria").val());

                        if (accion == 2) {
                            var titulo_msj = "El Producto Se Agrego Correctamente"
                        }

                        $.ajax({
                            url: "ajax/productos.ajax.php",
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

                                    $("#mdlAgregarProducto").modal('hide');

                                    $("#iptNombreProducto").val("");
                                    $("#iptPrecioProducto").val("");
                                    $("#selProveedor").val(0);
                                    $("#selCategoria").val(0);

                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Producto No Fue Agregado'
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

    document.getElementById("btnActualizarRegistroProducto").addEventListener("click", function () {

        var form = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(form, function (form) {
            if (form.checkValidity() === true) {
                console.log("Listo Para Actualizar El Producto")

                Swal.fire({
                    title: 'Esta Seguro De Actualizar Este Producto?',
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
                        datos.append("ID_Producto", $("#ipt_ID_Producto").val());
                        datos.append("Nombre", $("#iptNombreProducto2").val());
                        datos.append("Precio", $("#iptPrecioProducto2").val());
                        datos.append("ID_Proveedor", $("#selProveedor2").val());

                        if (accion == 3) {
                            var titulo_msj = "El Producto Se Actualizo Correctamente"
                        }

                        $.ajax({
                            url: "ajax/productos.ajax.php",
                            method: "GET",
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

                                    $("#mdlActualizarProducto").modal('hide');

                                    $("#ipt_ID_Producto").val("");
                                    $("#iptNombreProducto2").val("");
                                    $("#iptPrecioProducto2").val("");
                                    $("#selProveedor2").val(0);
                                } else {
                                    Toast.fire({
                                        icon: 'error',
                                        title: 'El Producto No Fue Actualizado'
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



    document.getElementById("btnCancelarRegistroProducto").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

    document.getElementById("btnCerrarModal").addEventListener("click", function () {
        $(".needs-validation").removeClass("was-validated");
    })

</script>