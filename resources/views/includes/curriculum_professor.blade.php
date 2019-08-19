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
                                    <td colspan="2" width="100%" class="text-center">Primer curso</td>
                                </tr>
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
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Segundo curso</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre del curso :</td>
                                    <td id="sec22Curso">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosnCurso : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha :</td>
                                    <td id="sec22Fecha">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosfechaCapacitacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Horas :</td>
                                    <td id="sec22Horas">{{ isset($professor->curriculum) ? $professor->curriculum[0]->doshoraCapacitacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Tercer curso</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre del curso :</td>
                                    <td id="sec23Curso">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresnCurso : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Fecha :</td>
                                    <td id="sec23Fecha">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresfechaCapacitacion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Horas :</td>
                                    <td id="sec23Horas">{{ isset($professor->curriculum) ? $professor->curriculum[0]->treshoraCapacitacion : '' }}</td>
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
                                    <td colspan="2" width="100%" class="text-center">Libro</td>
                                </tr>
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
                                    <td height="100%" id="sec5Descripcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->descripcion : '' }}</td>
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
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Articulo</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tipo :</td>
                                    <td id="sec52Tipo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->arttipo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Titulo :</td>
                                    <td id="sec52Titulo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->arttitulo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Autor :</td>
                                    <td id="sec52Autor">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artautor : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Descripcion :</td>
                                    <td height="100%" id="sec52Descripcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artdescripcion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Pais :</td>
                                    <td id="sec52Pais">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artpais : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec52Año_pro">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artañoPro : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISBN :</td>
                                    <td id="sec52Isbn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artisbn : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISSN :</td>
                                    <td id="sec52issn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->artissn : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Otro</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tipo :</td>
                                    <td id="sec53Tipo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->pertipo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Titulo :</td>
                                    <td id="sec53Titulo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->pertitulo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Autor :</td>
                                    <td id="sec53Autor">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perautor : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Descripcion :</td>
                                    <td height="100%" id="sec53Descripcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perdescripcion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Pais :</td>
                                    <td id="sec53Pais">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perpais : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec53Año_pro">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perañoPro : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISBN :</td>
                                    <td id="sec53Isbn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perisbn : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">ISSN :</td>
                                    <td id="sec53issn">{{ isset($professor->curriculum) ? $professor->curriculum[0]->perissn : '' }}</td>
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
                                    <td colspan="2" width="100%" class="text-center">Materia 1</td>
                                </tr>
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
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 2</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec62Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosnombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec62Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec62Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosperiodo : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 3</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec63Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresnombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec63Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec63Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresperiodo : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 4</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec64Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cuatronombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec64Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cuatroprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec64Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cuatroperiodo : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 5</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec65Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cinconombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec65Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cincoprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec65Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->cincoperiodo : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 6</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec66Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->seisnombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec66Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->seisprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec66Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->seisperiodo : '' }}</td>
                                </tr>   
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Materia 7</td>
                                </tr>
                                <tr>
                                    <td width="30%">Nombre de la asignatura :</td>
                                    <td id="sec67Asignatura">{{ isset($professor->curriculum) ? $professor->curriculum[0]->sietenombreAsignatura : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Programa educativo :</td>
                                    <td id="sec67Programa">{{ isset($professor->curriculum) ? $professor->curriculum[0]->sieteprogramaEducativo : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Periodo :</td>
                                    <td id="sec67Periodo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->sieteperiodo : '' }}</td>
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
                                    <td colspan="2" width="100%" class="text-center">Individual</td>
                                </tr>
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
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Colectiva</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tipo de gestion :</td>
                                    <td id="sec82Tipo_gestion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dostipoGestion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Funcion encomendada :</td>
                                    <td id="sec82Funcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosfuncionEncomendada : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Organo beneficiado :</td>
                                    <td id="sec82Organo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosorganoBeneficiado : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec82Año">{{ isset($professor->curriculum) ? $professor->curriculum[0]->dosaño : '' }}</td>
                                </tr>
                                <tr>
                                    <td colspan="2" width="100%" class="text-center">Otra</td>
                                </tr>
                                <tr>
                                    <td width="30%">Tipo de gestion :</td>
                                    <td id="sec83Tipo_gestion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->trestipoGestion : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Funcion encomendada :</td>
                                    <td id="sec83Funcion">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresfuncionEncomedada : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Organo beneficiado :</td>
                                    <td id="sec83Organo">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresorganoBeneficiado : '' }}</td>
                                </tr>
                                <tr>
                                    <td width="30%">Año :</td>
                                    <td id="sec83Año">{{ isset($professor->curriculum) ? $professor->curriculum[0]->tresaño : '' }}</td>
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
                        <label class="control-label col-md-12 font-weight-bold">Primer curso </label>
                        <br />
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
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Segundo curso </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre del curso : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosnCurso" id="dosnCurso" value="{{ $professor->curriculum[0]->dosnCurso }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha : </label>
                        <div class="col-md-8">
                            <input type="date" name="dosfechaCapacitacion" id="dosfechaCapacitacion" value="{{ $professor->curriculum[0]->dosfechaCapacitacion }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Horas : </label>
                        <div class="col-md-8">
                            <input type="number" name="doshoraCapacitacion" id="doshoraCapacitacion" value="{{ $professor->curriculum[0]->doshoraCapacitacion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Tercer curso </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre del curso : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresnCurso" id="tresnCurso" value="{{ $professor->curriculum[0]->tresnCurso }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Fecha : </label>
                        <div class="col-md-8">
                            <input type="date" name="tresfechaCapacitacion" id="tresfechaCapacitacion" value="{{ $professor->curriculum[0]->tresfechaCapacitacion }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Horas : </label>
                        <div class="col-md-8">
                            <input type="number" name="treshoraCapacitacion" id="treshoraCapacitacion" value="{{ $professor->curriculum[0]->treshoraCapacitacion }}" class="form-control" />
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
                    <label class="control-label col-md-12 font-weight-bold">Libro </label>
                        <br />
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
                            <input type="text" maxlength="255" name="descripcion" id="descripcion" value="{{ $professor->curriculum[0]->descripcion }}" class="form-control w3-input w3-border" />
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
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Articulo </label>
                        <br />
                        <label class="control-label col-md-4" >Tipo : </label>
                        <div class="col-md-8">
                            <input type="text" name="arttipo" id="arttipo" value="{{ $professor->curriculum[0]->arttipo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Titulo : </label>
                        <div class="col-md-8">
                            <input type="text" name="arttitulo" id="arttitulo" value="{{ $professor->curriculum[0]->arttitulo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Autor : </label>
                        <div class="col-md-8">
                            <input type="text" name="artautor" id="artautor" value="{{ $professor->curriculum[0]->artautor }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Descripcion : </label>
                        <div class="col-md-8">
                            <input type="text" maxlength="255" name="artdescripcion" id="artdescripcion" value="{{ $professor->curriculum[0]->artdescripcion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Pais : </label>
                        <div class="col-md-8">
                            <input type="text" name="artpais" id="artpais" value="{{ $professor->curriculum[0]->artpais }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="number" name="artañoPro" id="artañoPro" value="{{ $professor->curriculum[0]->artañoPro }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISBN : </label>
                        <div class="col-md-8">
                            <input type="text" name="artisbn" id="artisbn" value="{{ $professor->curriculum[0]->artisbn }}" class="form-control" maxlength="13" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISSN : </label>
                        <div class="col-md-8">
                            <input type="text" name="artissn" id="artissn" value="{{ $professor->curriculum[0]->artissn }}" class="form-control" maxlength="8" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Otros </label>
                        <br />
                        <label class="control-label col-md-4" >Tipo : </label>
                        <div class="col-md-8">
                            <input type="text" name="pertipo" id="pertipo" value="{{ $professor->curriculum[0]->pertipo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Titulo : </label>
                        <div class="col-md-8">
                            <input type="text" name="pertitulo" id="pertitulo" value="{{ $professor->curriculum[0]->pertitulo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-4">Autor : </label>
                        <div class="col-md-8">
                            <input type="text" name="perautor" id="perautor" value="{{ $professor->curriculum[0]->perautor }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Descripcion : </label>
                        <div class="col-md-8">
                            <input type="text" maxlength="255" name="perdescripcion" id="perdescripcion" value="{{ $professor->curriculum[0]->perdescripcion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Pais : </label>
                        <div class="col-md-8">
                            <input type="text" name="perpais" id="perpais" value="{{ $professor->curriculum[0]->perpais }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="number" name="perañoPro" id="perañoPro" value="{{ $professor->curriculum[0]->perañoPro }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISBN : </label>
                        <div class="col-md-8">
                            <input type="text" name="perisbn" id="perisbn" value="{{ $professor->curriculum[0]->perisbn }}" class="form-control" maxlength="13" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4">ISSN : </label>
                        <div class="col-md-8">
                            <input type="text" name="perissn" id="perissn" value="{{ $professor->curriculum[0]->perissn }}" class="form-control" maxlength="8" />
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
                        <label class="control-label col-md-12 font-weight-bold">Materia 1 </label>
                        <br />
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
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 2 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosnombreAsignatura" id="dosnombreAsignatura" value="{{ $professor->curriculum[0]->dosnombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosprogramaEducativo" id="dosprogramaEducativo" value="{{ $professor->curriculum[0]->dosprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosperiodo" id="dosperiodo" value="{{ $professor->curriculum[0]->dosperiodo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 3 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresnombreAsignatura" id="tresnombreAsignatura" value="{{ $professor->curriculum[0]->tresnombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresprogramaEducativo" id="tresprogramaEducativo" value="{{ $professor->curriculum[0]->tresprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresperiodo" id="tresperiodo" value="{{ $professor->curriculum[0]->tresperiodo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 4 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="cuatronombreAsignatura" id="cuatronombreAsignatura" value="{{ $professor->curriculum[0]->cuatronombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="cuatroprogramaEducativo" id="cuatroprogramaEducativo" value="{{ $professor->curriculum[0]->cuatroprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="cuatroperiodo" id="cuatroperiodo" value="{{ $professor->curriculum[0]->cuatroperiodo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 5 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="cinconombreAsignatura" id="cinconombreAsignatura" value="{{ $professor->curriculum[0]->cinconombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="cincoprogramaEducativo" id="cincoprogramaEducativo" value="{{ $professor->curriculum[0]->cincoprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="cincoperiodo" id="cincoperiodo" value="{{ $professor->curriculum[0]->cincoperiodo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 6 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="seisnombreAsignatura" id="seisnombreAsignatura" value="{{ $professor->curriculum[0]->seisnombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="seisprogramaEducativo" id="seisprogramaEducativo" value="{{ $professor->curriculum[0]->seisprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="seisperiodo" id="seisperiodo" value="{{ $professor->curriculum[0]->seisperiodo }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Materia 7 </label>
                        <br />
                        <label class="control-label col-md-12" >Nombre de la asignatura : </label>
                        <div class="col-md-8">
                            <input type="text" name="sietenombreAsignatura" id="sietenombreAsignatura" value="{{ $professor->curriculum[0]->sietenombreAsignatura }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Programa educativo : </label>
                        <div class="col-md-8">
                            <input type="text" name="sieteprogramaEducativo" id="sieteprogramaEducativo" value="{{ $professor->curriculum[0]->sieteprogramaEducativo }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Periodo : </label>
                        <div class="col-md-8">
                            <input type="text" name="sieteperiodo" id="sieteperiodo" value="{{ $professor->curriculum[0]->sieteperiodo }}" class="form-control" />
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
                        <label class="control-label col-md-12">Nombre de la empresa : </label>
                        <div class="col-md-8">
                            <input type="text" name="nomEmpresa" id="nomEmpresa" value="{{ $professor->curriculum[0]->nomEmpresa }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Fecha de inicio : </label>
                        <div class="col-md-8">
                            <input type="date" name="fechaInicio" id="fechaInicio" value="{{ $professor->curriculum[0]->fechaInicio }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Fecha de termino : </label>
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
                        <label class="control-label col-md-12 font-weight-bold">Individual </label>
                        <br />
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
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Colectiva </label>
                        <br />
                        <label class="control-label col-md-12" >Tipo de gestion: </label>
                        <div class="col-md-8">
                            <input type="text" name="dostipoGestion" id="dostipoGestion" value="{{ $professor->curriculum[0]->dostipoGestion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Funcion encomendada : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosfuncionEncomendada" id="dosfuncionEncomendada" value="{{ $professor->curriculum[0]->dosfuncionEncomendada }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Organo beneficiado : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosorganoBeneficiado" id="dosorganoBeneficiado" value="{{ $professor->curriculum[0]->dosorganoBeneficiado }}" class="form-control" />
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="text" name="dosaño" id="dosaño" value="{{ $professor->curriculum[0]->dosaño }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12 font-weight-bold">Otra </label>
                        <br />
                        <label class="control-label col-md-12" >Tipo de gestion: </label>
                        <div class="col-md-8">
                            <input type="text" name="trestipoGestion" id="trestipoGestion" value="{{ $professor->curriculum[0]->trestipoGestion }}" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-12">Funcion encomendada : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresfuncionEncomedada" id="tresfuncionEncomedada" value="{{ $professor->curriculum[0]->tresfuncionEncomedada }}" class="form-control" />
                        </div>
                    </div>           
                    <div class="form-group">
                        <label class="control-label col-md-12">Organo beneficiado : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresorganoBeneficiado" id="tresorganoBeneficiado" value="{{ $professor->curriculum[0]->tresorganoBeneficiado }}" class="form-control" />
                        </div>
                    </div>
                        <div class="form-group">
                            <label class="control-label col-md-4">Año : </label>
                        <div class="col-md-8">
                            <input type="text" name="tresaño" id="tresaño" value="{{ $professor->curriculum[0]->tresaño }}" class="form-control" />
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
                        //
                        $('#dosnCurso').val(data.curriculum.dosnCurso);
                        $('#sec22Curso').html(data.curriculum.dosnCurso);
                        $('#dosfechaCapacitacion').val(data.curriculum.dosfechaCapacitacion);
                        $('#sec22Fecha').html(data.curriculum.dosfechaCapacitacion);
                        $('#doshoraCapacitacion').val(data.curriculum.doshoraCapacitacion);
                        $('#sec22Horas').html(data.curriculum.doshoraCapacitacion);
                        //
                        $('#tresnCurso').val(data.curriculum.tresnCurso);
                        $('#sec23Curso').html(data.curriculum.tresnCurso);
                        $('#tresfechaCapacitacion').val(data.curriculum.tresfechaCapacitacion);
                        $('#sec23Fecha').html(data.curriculum.tresfechaCapacitacion);
                        $('#treshoraCapacitacion').val(data.curriculum.treshoraCapacitacion);
                        $('#sec23Horas').html(data.curriculum.treshoraCapacitacion);
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
                        //
                        $('#arttipo').val(data.curriculum.arttipo);
                        $('#sec52Tipo').html(data.curriculum.arttipo);
                        $('#arttitulo').val(data.curriculum.arttitulo);
                        $('#sec52Titulo').html(data.curriculum.arttitulo);
                        $('#artautor').val(data.curriculum.artautor);
                        $('#sec52Autor').html(data.curriculum.artautor);
                        $('#artdescripcion').val(data.curriculum.artdescripcion);
                        $('#sec52Descripcion').html(data.curriculum.artdescripcion);
                        $('#artpais').val(data.curriculum.artpais);
                        $('#sec52Pais').html(data.curriculum.artpais);
                        $('#artañoPro').val(data.curriculum.artañoPro);
                        $('#sec52Año_pro').html(data.curriculum.artañoPro);
                        $('#artisbn').val(data.curriculum.artisbn);
                        $('#sec52Isbn').html(data.curriculum.artisbn);
                        $('#artissn').val(data.curriculum.artissn);
                        $('#sec52issn').html(data.curriculum.artissn);
                        //
                        $('#pertipo').val(data.curriculum.pertipo);
                        $('#sec53Tipo').html(data.curriculum.pertipo);
                        $('#pertitulo').val(data.curriculum.pertitulo);
                        $('#sec53Titulo').html(data.curriculum.pertitulo);
                        $('#perautor').val(data.curriculum.perautor);
                        $('#sec53Autor').html(data.curriculum.perautor);
                        $('#perdescripcion').val(data.curriculum.perdescripcion);
                        $('#sec53Descripcion').html(data.curriculum.perdescripcion);
                        $('#perpais').val(data.curriculum.perpais);
                        $('#sec53Pais').html(data.curriculum.perpais);
                        $('#perañoPro').val(data.curriculum.perañoPro);
                        $('#sec53Año_pro').html(data.curriculum.perañoPro);
                        $('#perisbn').val(data.curriculum.perisbn);
                        $('#sec53Isbn').html(data.curriculum.perisbn);
                        $('#perissn').val(data.curriculum.perissn);
                        $('#sec53issn').html(data.curriculum.perissn);
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
                        //
                        $('#dosnombreAsignatura').val(data.curriculum.dosnombreAsignatura);
                        $('#sec62Asignatura').html(data.curriculum.dosnombreAsignatura);
                        $('#dosprogramaEducativo').val(data.curriculum.dosprogramaEducativo);
                        $('#sec62Programa').html(data.curriculum.dosprogramaEducativo);
                        $('#dosperiodo').val(data.curriculum.dosperiodo);
                        $('#sec62Periodo').html(data.curriculum.dosperiodo);
                        //
                        $('#tresnombreAsignatura').val(data.curriculum.tresnombreAsignatura);
                        $('#sec63Asignatura').html(data.curriculum.tresnombreAsignatura);
                        $('#tresprogramaEducativo').val(data.curriculum.tresprogramaEducativo);
                        $('#sec63Programa').html(data.curriculum.tresprogramaEducativo);
                        $('#tresperiodo').val(data.curriculum.tresperiodo);
                        $('#sec63Periodo').html(data.curriculum.tresperiodo);
                        //
                        $('#cuatronombreAsignatura').val(data.curriculum.cuatronombreAsignatura);
                        $('#sec64Asignatura').html(data.curriculum.cuatronombreAsignatura);
                        $('#cuatroprogramaEducativo').val(data.curriculum.cuatroprogramaEducativo);
                        $('#sec64Programa').html(data.curriculum.cuatroprogramaEducativo);
                        $('#cuatroperiodo').val(data.curriculum.cuatroperiodo);
                        $('#sec64Periodo').html(data.curriculum.cuatroperiodo);
                        //
                        $('#cinconombreAsignatura').val(data.curriculum.cinconombreAsignatura);
                        $('#sec65Asignatura').html(data.curriculum.cinconombreAsignatura);
                        $('#cincoprogramaEducativo').val(data.curriculum.cincoprogramaEducativo);
                        $('#sec65Programa').html(data.curriculum.cincoprogramaEducativo);
                        $('#cincoperiodo').val(data.curriculum.cincoperiodo);
                        $('#sec65Periodo').html(data.curriculum.cincoperiodo);
                        //
                        $('#seisnombreAsignatura').val(data.curriculum.seisnombreAsignatura);
                        $('#sec66Asignatura').html(data.curriculum.seisnombreAsignatura);
                        $('#seisprogramaEducativo').val(data.curriculum.seisprogramaEducativo);
                        $('#sec66Programa').html(data.curriculum.seisprogramaEducativo);
                        $('#seisperiodo').val(data.curriculum.seisperiodo);
                        $('#sec66Periodo').html(data.curriculum.seisperiodo);
                        //
                        $('#sietenombreAsignatura').val(data.curriculum.sietenombreAsignatura);
                        $('#sec67Asignatura').html(data.curriculum.sietenombreAsignatura);
                        $('#sieteprogramaEducativo').val(data.curriculum.sieteprogramaEducativo);
                        $('#sec67Programa').html(data.curriculum.sieteprogramaEducativo);
                        $('#sieteperiodo').val(data.curriculum.sieteperiodo);
                        $('#sec67Periodo').html(data.curriculum.sieteperiodo);
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
                        //
                        $('#dostipoGestion').val(data.curriculum.dostipoGestion);
                        $('#sec82Tipo_gestion').html(data.curriculum.dostipoGestion);
                        $('#dosfuncionEncomendada').val(data.curriculum.dosfuncionEncomendada);
                        $('#sec82Funcion').html(data.curriculum.dosfuncionEncomendada);
                        $('#dosorganoBeneficiado').val(data.curriculum.dosorganoBeneficiado);
                        $('#sec82Organo').html(data.curriculum.dosorganoBeneficiado);
                        $('#dosaño').val(data.curriculum.dosaño);
                        $('#sec82Año').html(data.curriculum.dosaño);
                        //
                        $('#trestipoGestion').val(data.curriculum.trestipoGestion);
                        $('#sec83Tipo_gestion').html(data.curriculum.trestipoGestion);
                        $('#tresfuncionEncomedada').val(data.curriculum.tresfuncionEncomedada);
                        $('#sec83Funcion').html(data.curriculum.tresfuncionEncomedada);
                        $('#tresorganoBeneficiado').val(data.curriculum.tresorganoBeneficiado);
                        $('#sec83Organo').html(data.curriculum.tresorganoBeneficiado);
                        $('#tresaño').val(data.curriculum.tresaño);
                        $('#sec83Año').html(data.curriculum.tresaño);
                        $('#curriculumModal8').modal('hide');
                    }
                }
            });
        });
    });
</script>