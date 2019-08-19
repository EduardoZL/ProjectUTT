@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset">
            <div class="card" style="background: #418EC8;" >
                <div class="card-header" style="text-align: center; font-weight: 500px;color:white;">Bienvenido - Sistema de gestion de profesores UTT
                    <div class="card-body">
                        <div class="colwrapper">
                            <div class="widget widget_ultimatumwysiwyg inner-container">
                                <p><img src="{{ asset('img/utt_logo_footer.png') }}"></p>
                                <p style="font-weight: 500px; color:white;">Carretera libre Tijuana-Tecate Km. 10 Fraccionamiento El Refugio CP 22253</p>
                                <p style="font-weight: 500px; color:white;">Tel.: (664) 969 4700 | 01800 788 0940</p>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
