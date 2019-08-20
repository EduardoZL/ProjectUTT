@extends('layouts.app')

@section('content')
            <div class="card" style="position: absolute; width: 1150px; overflow: auto;">
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
