    @extends('template.wrapp')

    @section('content')

    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START CONTENT -->
            <section id="content">

                <!--start container-->
                <div class="container">

            <!--work collections start-->
            <div id="work-collections" class="seaction">

              <div class="row">
                <div class="col s12 m4 l4">
                  <ul id="projects-collection" class="collection">
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s12">
                          <p class="collections-title">Agregado el:</p>
                          <p class="collections-content">12 / Noviembre / 2015</p>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s12">
                          <p class="collections-title">Etiquetas</p>
                          <p class="collections-content"><span class="task-cat orange">Hola Mundo</span></p>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s12">
                          <p class="collections-title">Creado por:</p>
                          <p class="collections-content">MediTab</p>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s12">
                          <p class="collections-title">Github</p>
                          <p class="collections-content">http://github.com/algo/algo</p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m8 l8">
                    <p>I am a very simple wall post. I am good at containing <a href="#">#small</a> bits of <a href="#">#information</a>.  I require little more information to use effectively.</p>
                </div>
                <div class="col s12 m4 l4">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{!! asset('layout03/images/office.jpg') !!}" alt="office">
                      </div>
                      <div class="card-reveal">

                      </div>
                    </div>
                </div>
                <div class="col s12 m4 l4">
                  <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="{!! asset('layout03/images/office.jpg') !!}" alt="office">
                      </div>
                      <div class="card-reveal">

                      </div>
                    </div>
                </div>
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
        <!-- google map api -->
    <script type="text/javascript" src="#"></script>

    <!--jvectormap-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/jvectormap/vectormap-script.js') !!}"></script>


    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins.js') !!}"></script>
    @endsection