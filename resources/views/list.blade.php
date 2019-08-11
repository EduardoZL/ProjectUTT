@extends('layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">

        </div>
    </div>
</div> -->
<div class="card">
    <div class="card-header">Dashboard</div>

    <div class="panel-body">
        <form action="">
            <div class="form-group">
                <label for="first_name">Nombre</label>
                <input type="text" name="first_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="last_name">Apellidos</label>
                <input type="text" name="last_name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Correo</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="curp">Curp</label>
                <input type="text" name="curp" class="form-control">
            </div>
            <div class="form-group">
                <label for="rfc">Rfc</label>
                <input type="text" name="rfc" class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Telefono</label>
                <input type="text" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="puesto">Puesto</label>
                <input type="text" name="puesto" class="form-control">
            </div>
            <div class="form-group">
                <label for="contrato">Contrato</label>
                <input type="text" name="contrato" class="form-control">
            </div>
            <div class="form-group">
                <label for="nvlEstudio">Nivel de estudio</label>
                <input type="text" name="nvlEstudio" class="form-control">
            </div>
            <div class="form-group">
                <label for="tituloRecibido">Titulo recibido</label>
                <input type="text" name="tituloRecibido" class="form-control">
            </div>
            <div class="form-group">
                <label for="carreraFin">Carrera fin</label>
                <input type="text" name="carreraFin" class="form-control">
            </div>
            <div class="form-group">
                <label for="institucionEstudioRealizado">Institucion de estudio realizados</label>
                <input type="text" name="institucionEstudioRealizado" class="form-control">
            </div>
            <div class="form-group">
                <label for="año_estudio_inicio_final">Año de inicio y fin de estudios</label>
                <input type="text" name="año_estudio_inicio_final" class="form-control">
            </div>
            <div class="form-group">
                <label for="exp_docencia">Experiencia en dociencia</label>
                <input type="text" name="exp_docencia" class="form-control">
            </div>
            <div class="form-group">
                <label for="perfil_deseable">Perfil deseable</label>
                <input type="text" name="perfil_deseable" class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Registrar profesor</button>
            </div>
        </form>
    </div>
</div>
@endsection
