<body>
    <div class="container">    
        <div class="d-flex justify-content-right">
        <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">
        <span class="fa fa-plus m-1"></span>Nuevo Registro</button>
        </div>
        <br />
        <div class="d-flex justify-content-center">
            <h1> Lista de Profesores</h1>
            <br />
            <br />
            <br />
            <br />
            <br />
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-sm" id="user_table">
                <thead class="thead-dark">
                    <tr>
                        <!-- <th width="10%">Foto</th> -->
                        <th width="20%">Nombre del Profesor</th>                
                        <th width="15%">Correo</th>                
                        <th width="10%">Telefono</th>
                        <th width="20%">Puesto</th>                
                        <th width="20%">Accion</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <br />
        <br />
    </div>
 </body>

<div id="formModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title "></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <div class="modal-body">
         <span id="form_result"></span>
         <form method="post" id="sample_form" class="form-horizontal" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label class="control-label col-md-12" >Nombre Completo : </label>
            <div class="col-md-8">
             <input type="text" name="full_name" id="full_name" class="form-control" />
            </div>
           </div>           
           <div class="form-group">
            <label class="control-label col-md-4">Correo : </label>
            <div class="col-md-8">
             <input type="text" name="email" id="email" class="form-control" />
            </div>
           </div>           
           <div class="form-group">
            <label class="control-label col-md-4">Telefono : </label>
            <div class="col-md-8">
             <input type="text" name="telefono" id="telefono" class="form-control" />
            </div>
           </div>
           <div class="form-group">
            <label class="control-label col-md-4">Puesto : </label>
            <div class="col-md-8">
             <input type="text" name="puesto" id="puesto" class="form-control" />
            </div>
           </div>           
           <!-- <div class="form-group">
            <label class="control-label col-md-4">Selecciona una imagen de perfil : </label>
            <div class="col-md-8">
             <input type="file" name="image" id="image" />
             <span id="store_image"></span>
            </div>
           </div> -->
           <br />
           <div class="form-group" align="center">
            <input type="hidden" name="action" id="action" />
            <input type="hidden" name="hidden_id" id="hidden_id" />
            <button type="submit" name="action_button" id="action_button" class="btn"></button>
           </div>
         </form>
        </div>
     </div>
    </div>
</div>

<div id="confirmModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">                
                <h5 class="modal-title">Confirmacion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 align="center" style="margin:0;">Estas seguro que quiere eliminar este dato?</h5>
            </div>
            <div class="modal-footer">
             <button type="button" name="ok_button" id="ok_button" class="btn btn-danger">OK</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var oTable;
    $(document).ready(function(){

        oTable = $('#user_table').DataTable({
                "pageLength": 25,
                "language": {
                    "url":"//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Spanish.json",
                    "searchPlaceholder": "Buscar...",
                },
                "dom":"<'row'<'col-md-5'f><'col-md-3'><'col-md-4'l>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
                "processing": true,
                "serverSide": true,
                order: [
                    [0, 'desc']                        
                ],
                "columns":[
                    /* {"data": "image", "sortable": false, "orderable" : false}, */
                    {"data": "full_name", "sortable": false},
                    {"data": "email", "sortable": false},
                    {"data": "telefono", "sortable": false},
                    {"data": "puesto", "sortable": false},
                    {"data": "actions", "sortable": false},
                ],
                "ajax": {
                    url: "{{ route('Proyecto.index') }}",
                }
            });

        $('#create_record').click(function(e){
            e.preventDefault();
            $('.modal-title').text("Agregar nuevo registro");
            $("#action_button").prop('value', 'Add');
            $('#action').val("Add");
            // Limpiamos los campos, para el nuevo registro.
            $('#full_name').val('');    
            $('#email').val('');    
            $('#telefono').val('');
            $('#puesto').val(''); 
            $('#form_result').addClass('d-none');
            $('#action_button').addClass('btn-success').removeClass('btn-warning');
            $('#action_button').html('<span id="iconModal"class="fa fa-plus m-1"></span>Add');
            $('#iconModal').addClass('fa-plus').removeClass('fa-pencil');
            $('#formModal').modal('show');
        });

        $('#sample_form').on('submit', function(event){
            event.preventDefault();
            if($('#action_button').val() == 'Add') {
                $.ajax({
                    url:"{{ route('Proyecto.store') }}",
                    method:"POST",
                    data: new FormData(this),
                    contentType: false,
                    cache:false,
                    processData: false,
                    dataType:"json",
                    success:function(data) {
                        var html = '';
                        if(data.errors) {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#user_table').DataTable().ajax.reload();
                            $('#formModal').modal('hide'); // Ocultamos modal.
                        }
                        $('#form_result').html(html);
                    }
                });
            }

            if($('#action_button').val() == "Edit") {
                var id = $(this).attr('id');
                $.ajax({
                    url:"Proyecto/update/" + id,
                    method:"POST",
                    data:new FormData(this),
                    contentType: false,
                    cache: false,
                    processData: false,
                    dataType:"json",
                    success:function(data) {
                        var html = '';
                        if(data.errors) {
                            html = '<div class="alert alert-danger">';
                            for(var count = 0; count < data.errors.length; count++) {
                                html += '<p>' + data.errors[count] + '</p>';
                            }
                            html += '</div>';
                        }
                        if(data.success) {
                            html = '<div class="alert alert-success">' + data.success + '</div>';
                            $('#sample_form')[0].reset();
                            $('#store_image').html('');
                            $('#user_table').DataTable().ajax.reload();
                            $('#formModal').modal('hide'); // Ocultamos modal.
                        }
                        $('#form_result').html(html);
                    }
                });
            }
        }); // End sample form.

        $(document).on('click', '.edit', function() {
            var id = $(this).attr('id');
            $('#form_result').html('');
            $.ajax({
                url:"/Proyecto/" + id + "/edit",
                dataType:"json",
                success:function(html) {
                    $('#full_name').val(html.data.full_name);    
                    $('#email').val(html.data.email);    
                    $('#telefono').val(html.data.telefono);
                    $('#puesto').val(html.data.puesto);    
                    /* $('#store_image').html("<img src={{ URL::to('/') }}/images/" + html.data.image + " width='70' class='img-thumbnail' />");
                    $('#store_image').append("<input type='hidden' name='hidden_image' value='"+html.data.image+"' />"); */ 
                    $('#hidden_id').val(html.data.id);
                    $('.modal-title').text("Editar nuevo registro");
                    $("#action_button").prop('value', 'Edit');
                    $('#action_button').addClass('btn-warning').removeClass('btn-success');
                    $("#action_button").html('<span id="iconModal"class="fa fa-pencil m-1"></span>Edit');

                    $('#action').val("Edit");
                    $('#formModal').modal('show');
                }
            });
        });

        var user_id;

        $(document).on('click', '.delete', function(){
            user_id = $(this).attr('id');
            $('#confirmModal').modal('show');
        });

        $('#ok_button').click(function(){
            $.ajax({
                url:"Proyecto/destroy/" + user_id,
                beforeSend:function() {
                    $('#ok_button').text('Eliminando...');
                },
                success:function(data) {
                    setTimeout(function() {
                        $('#confirmModal').modal('hide');
                        $('#user_table').DataTable().ajax.reload();
                    }, 2000);
                }
            });
        });
    }); // End document ready.
</script>