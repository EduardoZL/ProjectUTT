<div class="card">
    <div class="card-header">Menu</div>
        <div class="card-body">
            <ul class="nav nav-pills nav-stacked">
                @if (auth()->check())
                    
                    <li><a href="#">Lista de profesores</a></li>
                    <li><a href="#">Registrar profesor</a></li>
                    <li><a href="#">Mantenimiento...</a></li>
                @else
                    <li><a href="#">Bienvenido</a></li>
                    <li><a href="#">Instrucciones</a></li>
                    <li><a href="#">Creditos</a></li>
                @endif
            </ul>
            {{-- <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active">
                Dashboard
            </a>
            <a href="#" class="list-group-item list-group-item-action">
                Registrar profesor
            </a>
            <a href="#" class="list-group-item list-group-item-action disabled">
                (Mantenimiento...)
            </a>
        </div> --}}
    </div>
</div>
