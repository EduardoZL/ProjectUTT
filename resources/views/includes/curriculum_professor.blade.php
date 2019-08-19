<body>
    <div class="container">
        <h3 style="text-align:center; font-family: Times New Roman, Times, serif;">Detalles del currículum</h3>
        <br />                 
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 style="font-family: Times New Roman, Times, serif;">Sección</h4>
                    <h5 class="panel-title ">
                        <a data-toggle="collapse" href="#seccion1">Datos generales</a>
                    </h5>
                </div>
                <div class="panel-collapse collapse" id="seccion1">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Nombre Completo :</td>
                                    <td>{{ isset($professor) ? $professor->full_name : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha de nacimiento :</td>
                                    <td id="sec1Date">{{ isset($professor->curriculum) ? $professor->curriculum[0]->fechaNacimiento : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">CURP :</td>
                                    <td id="sec1Curp">{{ isset($professor->curriculum) ? $professor->curriculum[0]->curp : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">RFC :</td>
                                    <td id="sec1Rfc">{{ isset($professor->curriculum) ? $professor->curriculum[0]->rfc : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Grado Academico :</td>
                                    <td id="sec1Academico">{{ isset($professor->curriculum) ? $professor->curriculum[0]->gradoAcademico : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="general_date" id="general_date" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title">
                        <a data-toggle="collapse" href="#seccion2">Capacitacion</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion2">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Nombre del curso :</td>
                                    <td id="sec2Curso">{{ isset($professor->curriculum) ? $professor->curriculum[0]->nCurso : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha :</td>
                                    <td id="sec2Fecha">{{ isset($professor->curriculum) ? $professor->curriculum[0]->fechaCapacitacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Horas :</td>
                                    <td id="sec2Horas">{{ isset($professor->curriculum) ? $professor->curriculum[0]->horaCapacitacion : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="training" id="training" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title">
                        <a data-toggle="collapse" href="#seccion3">Evaluacion Docente</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion3">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered ">
                            <thead>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Evaluacion asesor</td>
                                </tr>
                                <tr>
                                    <td width="30%">Enero - Abril :</td>
                                    <td id="sec3Enero_A">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Enero_Abril_A : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Mayo - Agosto :</td>
                                    <td id="sec3Mayo_A">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Mayo_Agosto_A : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Septiembre - Diciembre :</td>
                                    <td id="sec3Septiembre_A">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Septiembre_Diciembre_A : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Evaluacion tutor</td>
                                </tr>
                                <tr>
                                    <td width="30%">Enero - Abril :</td>
                                    <td id="sec3Enero_T">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Enero_Abril_T : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Mayo - Agosto :</td>
                                    <td id="sec3Mayo_T">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Mayo_Agosto_T : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Septiembre - Diciembre :</td>
                                    <td id="sec3Septiembre_T">{{ isset($professor->curriculum) ? $professor->curriculum[0]->Septiembre_Diciembre_T : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="teacher_evaluation" id="teacher_evaluation" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title">
                        <a data-toggle="collapse" href="#seccion4">Cuerpo Academico</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion4">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Nombre :</td>
                                    <td id="sec4Nombre">{{ isset($professor->curriculum) ? $professor->curriculum[0]->ncuerpoAcademico : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Linea de investigacion :</td>
                                    <td id="sec4Linea">{{ isset($professor->curriculum) ? $professor->curriculum[0]->lineaInvestigacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Grado de consolidacion :</td>
                                    <td id="sec4Grado">{{ isset($professor->curriculum) ? $professor->curriculum[0]->gradoConsolidacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año de registro :</td>
                                    <td id="sec4Registro">{{ isset($professor->curriculum) ? $professor->curriculum[0]->añoRegistro : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="academy_body" id="academy_body" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title">
                        <a data-toggle="collapse" href="#seccion5">Produccion Academica</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion5">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Tipo :</td>
                                    <td id="sec5Tipo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tipo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Titulo :</td>
                                    <td id="sec5Titulo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->titulo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Autor :</td>
                                    <td id="sec5Autor">{{ isset($professor->curriculum) ? $professor->curriculum[0]->autor : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Descripcion :</td>
                                    <td id="sec5Descripcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->descripcion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Pais :</td>
                                    <td id="sec5Pais">{{ isset($professor->curriculum) ? $professor->curriculum[0]->pais : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec5Año_pro">{{ isset($professor->curriculum) ? $professor->curriculum[0]->añoPro : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISBN :</td>
                                    <td id="sec5Isbn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->isbn : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISSN :</td>
                                    <td id="sec5issn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->issn : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="academic_production" id="academic_production" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title">
                        <a data-toggle="collapse" href="#seccion6">Docencia</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion6">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec6Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->nombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec6Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->programaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec6Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->periodo : '' }}</td>
                                </tr>   
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="teaching" id="teaching" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title ">
                        <a data-toggle="collapse" href="#seccion7">Estadia en empresa</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion7">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Nombre del proyecto :</td>
                                    <td id="sec7Proyecto">{{ isset($professor->curriculum) ? $professor->curriculum[0]->nomProyecto : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la empresa :</td>
                                    <td id="sec7Empresa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->nomEmpresa : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha de inicio :</td>
                                    <td id="sec7Finicio">{{ isset($professor->curriculum) ? $professor->curriculum[0]->fechaInicio : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha de termino :</td>
                                    <td id="sec7Ftermino">{{ isset($professor->curriculum) ? $professor->curriculum[0]->fechaTermino : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="company_stay" id="company_stay" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
                <h5 class="panel-title ">
                        <a data-toggle="collapse" href="#seccion8">Gestion academica</a>
                </h5>
                <div class="panel-collapse collapse" id="seccion8">
                    <div class="table-responsive">
                        <table id="table_curriculum" class="table table-bordered">
                            <thead>
                                <tr>
                                    <td width="30%">Tipo de gestion :</td>
                                    <td id="sec8Tipo_gestion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tipoGestion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Funcion encomendada :</td>
                                    <td id="sec8Funcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->funcionEncomendada : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Organo beneficiado :</td>
                                    <td id="sec8Organo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->organoBeneficiado : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec8Año">{{ isset($professor->curriculum) ? $professor->curriculum[0]->año : '' }}</td>
                                </tr>
                            </thead>
                        </table>
                        <div class="d-flex justify-content-center">
                            <button type="button" name="academy" id="academy" class="btn btn-info btn-sm">
                                <span class="fa fa-pencil m-1"></span>Actualizar perfil</button> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<div id="curriculumModal1" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" >Datos generales</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec1" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12" >Fecha de nacimiento : </label>
                        <div class="col-md-8">
                        <input type="date" name="fechaNacimiento" id="fechaNacimiento" value="{{ $professor->curriculum[0]->fechaNacimiento }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Curp : </label>
                        <div class="col-md-8">
                            <input type="text" name="curp" id="curp" min="1" max="18" value="{{ $professor->curriculum[0]->curp }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">RFC : </label>
                        <div class="col-md-8">
                            <input type="text" name="rfc" id="rfc" min="1" max="13" value="{{ $professor->curriculum[0]->rfc }}" class="form-control" />
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-md-12">Grado Academico : </label>
                        <div class="col-md-8">
                            <input type="text" name="gradoAcademico" id="gradoAcademico" value="{{ $professor->curriculum[0]->gradoAcademico }}"  class="form-control" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec1"/>
                    <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}"/>
                        <button type="submit" name="sec1_action" id="sec1_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Capacitacion</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec2" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12" >Nombre del curso : </label>
                        <div class="col-md-8">
                            <input type="text" name="nCurso" id="nCurso" value="{{ $professor->curriculum[0]->nCurso }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha : </label>
                        <div class="col-md-8">
                            <input type="date" name="fechaCapacitacion" id="fechaCapacitacion" value="{{ $professor->curriculum[0]->fechaCapacitacion }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Horas : </label>
                        <div class="col-md-8">
                            <input type="number" name="horaCapacitacion" id="horaCapacitacion" value="{{ $professor->curriculum[0]->horaCapacitacion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec2"/>
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec2_action" id="sec2_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal3" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Evaluacion Docente</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec3" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Evaluacion del asesor(a) </label>
                        <br />
                        <label class="control-label col-md-12">Enero - Abril : </label>
                        <div class="col-md-8">
                            <input type="number" name="Enero_Abril_A" id="Enero_Abril_A" value="{{ $professor->curriculum[0]->Enero_Abril_A }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Mayo - Agosto : </label>
                        <div class="col-md-8">
                            <input type="number" name="Mayo_Agosto_A" id="Mayo_Agosto_A" value="{{ $professor->curriculum[0]->Mayo_Agosto_A }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Septiembre - Diciembre : </label>
                        <div class="col-md-8">
                            <input type="number" name="Septiembre_Diciembre_A" id="Septiembre_Diciembre_A" value="{{ $professor->curriculum[0]->Septiembre_Diciembre_A }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold" >Evaluacion de tutor(a) </label>
                        <br />
                        <label class="control-label col-md-12">Enero - Abril : </label>
                        <div class="col-md-8">
                            <input type="number" name="Enero_Abril_T" id="Enero_Abril_T" value="{{ $professor->curriculum[0]->Enero_Abril_T }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Mayo - Agosto : </label>
                        <div class="col-md-8">
                            <input type="number" name="Mayo_Agosto_T" id="Mayo_Agosto_T" value="{{ $professor->curriculum[0]->Mayo_Agosto_T }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Septiembre - Diciembre : </label>
                        <div class="col-md-8">
                            <input type="number" name="Septiembre_Diciembre_T" id="Septiembre_Diciembre_T" value="{{ $professor->curriculum[0]->Septiembre_Diciembre_T }}" min="1" max="100" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec3" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec3_action" id="sec3_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal4" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Cuerpo Academico</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec4" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-4" >Nombre : </label>
                        <div class="col-md-8">
                            <input type="text" name="ncuerpoAcademico" id="ncuerpoAcademico" value="{{ $professor->curriculum[0]->ncuerpoAcademico }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Linea de investigacion : </label>
                        <div class="col-md-8">
                            <input type="text" name="lineaInvestigacion" id="lineaInvestigacion" value="{{ $professor->curriculum[0]->lineaInvestigacion }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Grado de consolidacion : </label>
                        <div class="col-md-8">
                            <input type="text" name="gradoConsolidacion" id="gradoConsolidacion" value="{{ $professor->curriculum[0]->gradoConsolidacion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Año de registro : </label>
                        <div class="col-md-8">
                            <input type="text" name="añoRegistro" id="añoRegistro" value="{{ $professor->curriculum[0]->añoRegistro }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec4" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec4_action" id="sec4_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal5" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Produccion Academica</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec5" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-4" >Tipo : </label>
                        <div class="col-md-8">
                            <input type="text" name="tipo" id="tipo" value="{{ $professor->curriculum[0]->tipo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Titulo : </label>
                        <div class="col-md-8">
                            <input type="text" name="titulo" id="titulo" value="{{ $professor->curriculum[0]->titulo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Autor : </label>
                        <div class="col-md-8">
                            <input type="text" name="autor" id="autor" value="{{ $professor->curriculum[0]->autor }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Descripcion : </label>
                        <div class="col-md-8">
                            <input type="text" name="descripcion" id="descripcion" value="{{ $professor->curriculum[0]->descripcion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Pais : </label>
                        <div class="col-md-8">
                            <input type="text" name="pais" id="pais" value="{{ $professor->curriculum[0]->pais }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="number" name="añoPro" id="añoPro" value="{{ $professor->curriculum[0]->añoPro }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISBN : </label>
                        <div class="col-md-8">
                            <input type="text" name="isbn" id="isbn" value="{{ $professor->curriculum[0]->isbn }}" class="form-control" maxlength="13" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISSN : </label>
                        <div class="col-md-8">
                            <input type="text" name="issn" id="issn" value="{{ $professor->curriculum[0]->issn }}" class="form-control" maxlength="8" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec5" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec5_action" id="sec5_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal6" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Docencia</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec6" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="nombreAsignatura" id="nombreAsignatura" value="{{ $professor->curriculum[0]->nombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="programaEducativo" id="programaEducativo" value="{{ $professor->curriculum[0]->programaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="periodo" id="periodo" value="{{ $professor->curriculum[0]->periodo }}" class="form-control" />
                        </div>
                    </div>                        
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec6" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec6_action" id="sec6_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal7" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Estadia en empresa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec7" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12" >Nombre del proyecto : </label>
                        <div class="col-md-8">
                            <input type="text" name="nomProyecto" id="nomProyecto" value="{{ $professor->curriculum[0]->nomProyecto }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Nombre de la empresa : </label>
                        <div class="col-md-8">
                            <input type="text" name="nomEmpresa" id="nomEmpresa" value="{{ $professor->curriculum[0]->nomEmpresa }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha de inicio : </label>
                        <div class="col-md-8">
                            <input type="date" name="fechaInicio" id="fechaInicio" value="{{ $professor->curriculum[0]->fechaInicio }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha de termino : </label>
                        <div class="col-md-8">
                            <input type="date" name="fechaTermino" id="fechaTermino" value="{{ $professor->curriculum[0]->fechaTermino }}" class="form-control" />
                        </div>
                    </div>                     
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec7" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec7_action" id="sec7_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="curriculumModal8" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title ">Gestion academica</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span id="form_result"></span>
                <form method="post" id="sec8" class="form-horizontal" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="control-label col-md-12" >Tipo de gestion: </label>
                        <div class="col-md-8">
                            <input type="text" name="tipoGestion" id="tipoGestion" value="{{ $professor->curriculum[0]->tipoGestion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Funcion encomendada : </label>
                        <div class="col-md-8">
                            <input type="text" name="funcionEncomendada" id="funcionEncomendada" value="{{ $professor->curriculum[0]->funcionEncomendada }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Organo beneficiado : </label>
                        <div class="col-md-8">
                            <input type="text" name="organoBeneficiado" id="organoBeneficiado" value="{{ $professor->curriculum[0]->organoBeneficiado }}" class="form-control" />
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="text" name="año" id="año" value="{{ $professor->curriculum[0]->año }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group" align="center">
                        <input type="hidden" name="action" id="action" value="sec8" />
                        <input type="hidden" name="hidden_id" id="hidden_id" value="{{ $professor->curriculum[0]->id }}" />
                        <button type="submit" name="sec8_action" id="sec8_action" class="btn btn-success btn-sm">
                            <span class="fa fa-save m-1"></span>Guardar</button>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    var professor_id = {!! $professor->id !!};
    $(document).ready(function() {

        $('#general_date').click( function(e) {
            e.preventDefault();
            $('#curriculumModal1').modal('show');
        });

        $('#training').click( function(e) {
            e.preventDefault();
            $('#curriculumModal2').modal('show');
        });

        $('#teacher_evaluation').click( function(e) {
            e.preventDefault();
            $('#curriculumModal3').modal('show');
        });

        $('#academy_body').click( function(e) {
            e.preventDefault();
            $('#curriculumModal4').modal('show');
        });

        $('#academic_production').click( function(e) {
            e.preventDefault();
            $('#curriculumModal5').modal('show');
        });

        $('#teaching').click( function(e) {
            e.preventDefault();
            $('#curriculumModal6').modal('show');
        });

        $('#company_stay').click( function(e) {
            e.preventDefault();
            $('#curriculumModal7').modal('show');
        });

        $('#academy').click( function(e) {
            e.preventDefault();
            $('#curriculumModal8').modal('show');
        });
        
        $('#sec1').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#fechaNacimiento').val(data.curriculum.fechaNacimiento);
                        $('#sec1Date').html(data.curriculum.fechaNacimiento);
                        $('#curp').val(data.curriculum.curp);
                        $('#sec1Curp').html(data.curriculum.curp);
                        $('#rfc').val(data.curriculum.rfc);
                        $('#sec1Rfc').html(data.curriculum.rfc);
                        $('#gradoAcademico').val(data.curriculum.gradoAcademico);
                        $('#sec1Academico').html(data.curriculum.gradoAcademico);
                        $('#curriculumModal1').modal('hide');
                    }
                }
            });
        });

        $('#sec2').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#nCurso').val(data.curriculum.nCurso);
                        $('#sec2Curso').html(data.curriculum.nCurso);
                        $('#fechaCapacitacion').val(data.curriculum.fechaCapacitacion);
                        $('#sec2Fecha').html(data.curriculum.fechaCapacitacion);
                        $('#horaCapacitacion').val(data.curriculum.horaCapacitacion);
                        $('#sec2Horas').html(data.curriculum.horaCapacitacion);
                        $('#curriculumModal2').modal('hide');
                    }
                }
            });
        });

        $('#sec3').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#Enero_Abril_A').val(data.curriculum.Enero_Abril_A);
                        $('#sec3Enero_A').html(data.curriculum.Enero_Abril_A);
                        $('#Mayo_Agosto_A').val(data.curriculum.Mayo_Agosto_A);
                        $('#sec3Mayo_A').html(data.curriculum.Mayo_Agosto_A);
                        $('#Septiembre_Diciembre_A').val(data.curriculum.Septiembre_Diciembre_A);
                        $('#sec3Septiembre_A').html(data.curriculum.Septiembre_Diciembre_A);
                        $('#Enero_Abril_T').val(data.curriculum.Enero_Abril_T);
                        $('#sec3Enero_T').html(data.curriculum.Enero_Abril_T);
                        $('#Mayo_Agosto_T').val(data.curriculum.Mayo_Agosto_T);
                        $('#sec3Mayo_T').html(data.curriculum.Mayo_Agosto_T);
                        $('#Septiembre_Diciembre_T').val(data.curriculum.Septiembre_Diciembre_T);
                        $('#sec3Septiembre_T').html(data.curriculum.Septiembre_Diciembre_T);
                        $('#curriculumModal3').modal('hide');
                    }
                }
            });
        });

        $('#sec4').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#ncuerpoAcademico').val(data.curriculum.ncuerpoAcademico);
                        $('#sec4Nombre').html(data.curriculum.ncuerpoAcademico);
                        $('#lineaInvestigacion').val(data.curriculum.lineaInvestigacion);
                        $('#sec4Linea').html(data.curriculum.lineaInvestigacion);
                        $('#gradoConsolidacion').val(data.curriculum.gradoConsolidacion);
                        $('#sec4Grado').html(data.curriculum.gradoConsolidacion);
                        $('#añoRegistro').val(data.curriculum.añoRegistro);
                        $('#sec4Registro').html(data.curriculum.añoRegistro);
                        $('#curriculumModal4').modal('hide');
                    }
                }
            });
        });
        
        $('#sec5').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#tipo').val(data.curriculum.tipo);
                        $('#sec5Tipo').html(data.curriculum.tipo);
                        $('#titulo').val(data.curriculum.titulo);
                        $('#sec5Titulo').html(data.curriculum.titulo);
                        $('#autor').val(data.curriculum.autor);
                        $('#sec5Autor').html(data.curriculum.autor);
                        $('#descripcion').val(data.curriculum.descripcion);
                        $('#sec5Descripcion').html(data.curriculum.descripcion);
                        $('#pais').val(data.curriculum.pais);
                        $('#sec5Pais').html(data.curriculum.pais);
                        $('#añoPro').val(data.curriculum.añoPro);
                        $('#sec5Año_pro').html(data.curriculum.añoPro);
                        $('#isbn').val(data.curriculum.isbn);
                        $('#sec5Isbn').html(data.curriculum.isbn);
                        $('#issn').val(data.curriculum.issn);
                        $('#sec5issn').html(data.curriculum.issn);
                        $('#curriculumModal5').modal('hide');
                    }
                }
            });
        });

        $('#sec6').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#nombreAsignatura').val(data.curriculum.nombreAsignatura);
                        $('#sec6Asignatura').html(data.curriculum.nombreAsignatura);
                        $('#programaEducativo').val(data.curriculum.programaEducativo);
                        $('#sec6Programa').html(data.curriculum.programaEducativo);
                        $('#periodo').val(data.curriculum.periodo);
                        $('#sec6Periodo').html(data.curriculum.periodo);
                        $('#curriculumModal6').modal('hide');
                    }
                }
            });
        });

        $('#sec7').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#nomProyecto').val(data.curriculum.nomProyecto);
                        $('#sec7Proyecto').html(data.curriculum.nomProyecto);
                        $('#nomEmpresa').val(data.curriculum.nomEmpresa);
                        $('#sec7Empresa').html(data.curriculum.nomEmpresa);
                        $('#fechaInicio').val(data.curriculum.fechaInicio);
                        $('#sec7Finicio').html(data.curriculum.fechaInicio);
                        $('#fechaTermino').val(data.curriculum.fechaTermino);
                        $('#sec7Ftermino').html(data.curriculum.fechaTermino);
                        $('#curriculumModal7').modal('hide');
                    }
                }
            });
        });

        $('#sec8').on('submit', function(event){
            event.preventDefault();
            $.ajax({
                url: 'detalles',
                method:"POST",
                data: new FormData(this),
                contentType: false,
                cache:false,
                processData: false,
                dataType:"json",
                success:function(data, textStatus, xhr) {
                    console.log('Dentro de sucess');
                    console.log(data);
                    if (xhr.status === 200 ) { // 200 == success
                        $('#tipoGestion').val(data.curriculum.tipoGestion);
                        $('#sec8Tipo_gestion').html(data.curriculum.tipoGestion);
                        $('#funcionEncomendada').val(data.curriculum.funcionEncomendada);
                        $('#sec8Funcion').html(data.curriculum.funcionEncomendada);
                        $('#organoBeneficiado').val(data.curriculum.organoBeneficiado);
                        $('#sec8Organo').html(data.curriculum.organoBeneficiado);
                        $('#año').val(data.curriculum.año);
                        $('#sec8Año').html(data.curriculum.año);
                        $('#curriculumModal8').modal('hide');
                    }
                }
            });
        });
    });
</script>