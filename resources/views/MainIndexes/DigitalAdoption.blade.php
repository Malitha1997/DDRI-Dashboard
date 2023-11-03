@extends('layouts.navbar')

@section('content')
<div class="container" style="margin-top: 150px;">
            <div class="row" style="width: 1430px;">
                <div class="col">
                    <div class="row">
                        <div class="col" style="text-align: center;margin-top: -30px;">
                            <div class="row" data-aos="fade-down" data-aos-duration="1000" > 
                                <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('home')}}"></a><span style="color: #09184B;font-size: 34px;font-weight: bold;font-family: 'Poppins';text-align: center;">Regional Digital Adoption Readiness<br></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div" style="width:2200px;height:900px;font-family: Poppins;"></div>
                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                        <script>
                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                            google.charts.setOnLoadCallback(drawBasic);

                            function drawBasic() {
                                var data = google.visualization.arrayToDataTable({!! json_encode($digitaladoption) !!});

                                var options = {
                                    chartArea: { width: '50%' },
                                    hAxis: {
                                        title: 'Index',
                                        minValue: 0,
                                        maxValue: 8,
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    vAxis: {
                                        title: 'Districts',
                                        textStyle: { fontName: 'Poppins' }
                                    },
                                    colors: ['#C52454']
                                };

                                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                                chart.draw(data, options);
                            }
                        </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection