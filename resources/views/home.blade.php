@extends('layouts.app')

@section('content')
            <div class="card" style="width:1350px;">
                <div class="card-header"></div>

                <div class="card-body">
                        @include('includes.list_professor')
                        
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                            
                        </div>
                    @endif
                </div>
            </div>
@endsection
