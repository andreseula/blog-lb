   <p>utilizar el isset en vez de if por si la variable de control no esta definida</p>

        @isset ($projects)

            <div class="col-md-6">
                <p>abre y cierra php en cada linea</p>
                <?php foreach ($projects as $projectitems):?>
                    <li> {{$projectitems->title}} </li>
                <?php endforeach ?>
            </div>
            <div class="col-md-6">
                <p>utilizando el @ en el foreach </p>
                @foreach ($projects as $projectitems)
                    <li> {{$projectitems->title}} </li>
                @endforeach
            </div>
        @else
            <li>No hay Proyectos para mostrar</li>
        @endisset



        <div class="col-sm-7">
            <br>
            <p>FORELSE - EMPTY - ENDFORELSE</p>
            @forelse ($projects as $projectitems)
        <li> <a href="{{route('portfolio.show')}}">{{$projectitems->title}} <small>{{$projectitems->description}}</small>({{$projectitems->created_at->format('d-M-Y')}})</a></li>
            @empty
                <li>No hay Proyectos para mostrar</li>
            @endforelse
        </div>