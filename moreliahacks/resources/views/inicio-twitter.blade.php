    @extends('template.wrapp')

    @section('page-title')
    APIs Registradas
    @endsection

    @section('content')

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

                <div class="row">

                    <div class="col s12 m12 l12">

<a href="{{url('twitter/Morelia')}}" class="waves-effect waves-light btn-large "><i class="mdi-hardware-keyboard-alt left"></i>Así se siente <strong>Morelia</strong> en Twitter</a>

<a href="{{url('twitter/MoreliaHacks')}}" class="waves-effect waves-light btn-large "><i class="mdi-hardware-keyboard-alt left"></i>Así se siente <strong>MoreliaHacks</strong> en Twitter</a>

<div style="font-size:12px;">Tarda un poco en sacar las estadísticas en tiempo real</div>

                    </div>

                </div>

                <div class="row">

                    @foreach($repositorios as $item)

                    <div class="col s12 m6 l4">
                      <div class="card orange darken-1">
                          <div class="card-content orange">
                            <span class="card-title">{{$item->nombre}}</span>
                            <p style="margin-bottom: 1em; font-size: 1.2em; margin-top: 1em;">{{$item->descripcion}}</p>
                            <p class="grey-text text-darken-3"> Agregado el {{$item->fecha_publicacion}} <br />por {{$item->autores}}</p>
                          </div>
                          <div class="card-action">
                            <a href="{{route('repositorio.show',$item->id )}}" class="lime-text text-accent-1">Ver Detalles</a>
                          </div>
                        </div>
                    </div>

                    @endforeach



                </div> <!-- /row -->


                </div>
                <!--end container-->
            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


    @endsection
    @section ('scripts')

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins.js') !!}"></script>

    @endsection