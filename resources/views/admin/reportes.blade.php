<x-layouts.guest title="Sección de reportes"
    h1="Sección de reportes"
    pAfterH1="Aquí podrás visualizar todos los reportes que se han hecho hasta ahora">

    <x-slot name="otherstyle">
        <link rel="stylesheet" href="{{ asset('css/consejos.css') }}">
        <link rel="stylesheet" href="{{ asset('css/professors_subjects.css') }}">
        <link rel="stylesheet" href="{{asset('css/pagination.css')}}" />
        <style>
header .le-nav li .menu-desplegable, header .le-nav li .menu-desplegable-2 {
    z-index: 1;
}
            .items_actins {
                display: flex;
                flex-direction: row;
                gap: 10px;
            }

            table {
                width: 170vw !important;
            }

            .items_actins .acti {
                display: block;
                text-decoration: none;
                color: inherit;
                background: transparent;
                padding: 10px;
                width: max-content;
                border-radius: 15px;
                border: 1px solid #b8b8b8;
                transition: all .2s ease;

            }

            .items_actins .acti:hover {
                border: 1px solid #fc6045;
                color: #fc6045;
            }
            </style>
    </x-slot>

    <x-slot name="otherjs">
        <script src="{{asset('js/pagination.js')}}" defer></script>
        <script>
            function confirmAction(event, action, form) {
    event.preventDefault();
    if (confirm(`¿Estás seguro de que deseas ${action}?`)) {
        form.submit();
    }
}
        </script>
    </x-slot>

    <x-slot name="imgpage">
        {{ asset('img/panel.svg') }}
    </x-slot>

    <x-slot name="buttons">
        <div class="botones">
            <div class="box" style="--Color:#fc6045;">
                <div class="content">
                    <div class="icon"><i class="fa-solid fa-chalkboard-user"></i></div>
                    <div class="text">
                        <h3>¡Bienvenido administrador!</h3>
                            <p>Aquí podrás ver los reportes que se han heco dentro de la aplicación desde los más recientes hasta los más antiguos. De igual forma, la razón que produjo al usuario hacerlo.</p>
                    </div>
                </div>
            </div>
        </div>
    </x-slot>

    <x-slot name="general1">
        <div class="general1">
            <section class="esta-pagina">

                <h2>Reportes detallados</h2>
                
                <div class="table-parent">
                    <div class="table__header">
                        <div class="info_teacher">
                            <h3>Todos los reportes</h3>
                        </div>
                    </div>
                    <div class="table__body">
                        <table>
                            <thead>
                                <tr>
                                    <th class="header_table md-ripples ripples-bg">Reportador<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Reportado<span class="class-arrow"></span></th>
                                    <th  class="header_table md-ripples ripples-bg">Razón<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Tipo<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Fecha<span class="class-arrow"></span></th>
                                                <th class="header_table md-ripples ripples-bg">Profesor<span class="class-arrow"></span></th>
                                                    <th class="header_table md-ripples ripples-bg">Contenido<span class="class-arrow"></span></th>
                                    <th class="header_table md-ripples ripples-bg">Acciones<span class="class-arrow"></span></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($reports->count() > 0)
                                @foreach($reports as $report)
                                    <tr class="tr_count">
                                        <td>{{$report->user->username}}</td>

                                        <td>{{($report->opinion_id === null) ? $report->replies->user->username  : $report->opinion->user->username }}</td>

                                        <td >{{$report->reason}}</td>

                                        <td>{{($report->opinion_id === null) ? 'Respuesta' : 'Opinión'}}</td>

                                        <td>{{ $report->created_at->diffForHumans() }}</td>

                                        <td>{{($report->opinion_id === null) ? $report->replies->opinion->teacher->name : $report->opinion->teacher->name }}
                                            </td>


                                        <td>
                                            {{($report->opinion_id === null) ? $report->replies->body : $report->opinion->body }}
                                           </td>
                                        <td><div class="items_actins">
                                            <form action="{{route('comment.delete')}}" method="POST">
                                                @csrf
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'borrar comentario', this.closest('form'))">Borrar comentario</a>
                                    
                                                <input type="hidden" name="type" value="{{($report->opinion_id === null) ? 'reply' : 'opinion'}}">
                                                <input type="hidden" name="_id" value="{{
                                                    ($report->opinion_id === null) ? $report->reply_id  : $report->opinion_id}}">
                                            </form>
                                    
                                            <form action="{{route('destroy')}}" method="POST">
                                                @csrf
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'borrar reporte', this.closest('form'))">Borrar reporte</a>
                                                <input type="hidden" name="report_id" value="{{$report->id}}">
                                            </form>
                                                                                
                                            <form action="{{route('reporter-ban')}}" method="POST">
                                                @csrf
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'banear usuario que reportó', this.closest('form'))">Banear usuario que reportó</a>
                                                <input type="hidden" name="report_id" value="{{$report->id}}">
                                                <input type="hidden" name="user_id" value="{{$report->user_id}}">
                                            </form>
                                                                                
                                                                                
                                            <form action="{{route('reported-ban')}}" method="POST">
                                                @csrf
                                                <a class="acti" href="javascript:void(0)" onclick="confirmAction(event, 'banear usuario reportado', this.closest('form'))">Banear usuario reportado</a>
                                    
                                                <input type="hidden" name="report_id" value="{{$report->id}}">
                                            </form>
                                        </div></td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        <td colspan="8"><span style="display: flex; justify-content: center;">¡Bien, no hay reportes por ahora!</span></td>
                                    </tr>
                                    @endif

                            </tbody>
                        </table>
                        
                    </div>
                    
                </div>
                @if($errors->any())
                <div style="text-align: left ">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li style="color:#fc6045; ">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                {{ $reports->links() }}



            </section>
           
        </div>
    </x-slot>

</x-layouts.guest>
