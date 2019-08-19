<div class="card">
    <div class="card-header">Menu</div>
        <div class="card-body">
            <ul class="nav nav-pills nav-stacked">
                @if (auth()->check())                    
                    <li><a href="{{ url('/home') }}">Lista de profesores</a></li>
                @else
                    <li><a href="{{ url('/') }}">Bienvenido</a></li>
                @endif
            </ul>         
    </div>
</div>
