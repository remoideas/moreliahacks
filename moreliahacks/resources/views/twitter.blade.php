    @extends('template.wrapp')

    @section('page-title')
    Sentimiento de {{$hashtag}} segun twitter en vivo
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

                    <div class="col s12 m6 l6">

                      <div class="sample-chart-wrapper">
                        <canvas id="pie-chart-sample" ></canvas>
                      </div>
                      <p class="header center">Se siente Positivo ({{$sentimiento_twitter['positive']}}) / Neutral ({{$sentimiento_twitter['neutral']}}) / Negativo ({{$sentimiento_twitter['negative']}})</p>

                    </div>

                    <div class="col s12 m6 l6">

                        <h2 style="padding-top: 160px;">Así se siente {{$hashtag}}</h2>

                    </div>

                </div>

                <hr>

                <h3>Estadisticas según los 50 últimos twitters</h3>

                <div class="row">

                    @foreach($twitters_array as $item)

                    <div class="col s12 m6 l4">
                      <div class="card orange darken-1">
                          <div class="card-content orange">
                            <p style="margin-bottom: 1em; font-size: 1.2em; margin-top: 1em;">{{$item->text}}</p>
                          </div>
                        </div>
                    </div>

                    @endforeach



                </div> <!-- /row -->


                </div>
                <!--end container-->

                <h6>Autor: Antonio Reyes Montufar, Juan Adrian Garcia Cid, Julio Cesar Ortega Contreras, Abraham Joel Alvarez Garcia</h6>

            </section>
            <!-- END CONTENT -->

            <!-- //////////////////////////////////////////////////////////////////////////// -->

        </div>
        <!-- END WRAPPER -->

    </div>
    <!-- END MAIN -->


    @endsection

    @section ('scripts')

    <!-- chartist -->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/chartist-js/chartist.min.js') !!}"></script>

    <!-- chartjs -->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins/chartjs/chart.min.js') !!}"></script>


    <script>

    //Sampel Pie Doughnut Chart
var PieDoughnutChartSampleData = [
    {
        value: {!! $sentimiento_twitter['negative'] !!},
        color:"#F7464A",
        highlight: "#FF5A5E",
        label: "Negativo"
    },
    {
        value: {!! $sentimiento_twitter['positive'] !!},
        color: "#46BFBD",
        highlight: "#5AD3D1",
        label: "Positivo"
    }
]

      window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
   responsive:true
  });

    </script>

    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="{!! asset('layout03/js/plugins.js') !!}"></script>

    @endsection