@extends('layouts.navbar')

@section('content')
<section>
        <div class="container" style="margin-top: 150px;">
            <div class="row" style="width: 1430px;">
                <div class="col">
                    <div class="row">
                        <div class="col-xxl-11" style="text-align: center;margin-top: -20px;">
                        <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('home')}}"></a><span data-aos="fade-down" data-aos-duration="750" style="color: #09184B;font-size: 34px;font-weight: bold;font-family: 'Poppins';text-align: center;">
                        <br>Puttalam District Digital Readiness Index<br><br></span></div>
                    </div>
                    <div class="row" style="width: 1340px;">
                        <div class="col" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col" data-aos="fade-down" data-aos-duration="750" style="width: 700px;">
                                    <div class="row">
                                        <div class="col" style="text-align: center;font-size: 20px;"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 26px;">Regional Business Environment Readiness</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-top: 40px;text-align: center;">
                                        <!-- <img src="assets/img/image%2029.png" width="588" height="274" style="height: 304px;"> -->
                                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div" style="width:558px;height:274px;font-family: Poppins;"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script>
                                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                                            google.charts.setOnLoadCallback(drawBasic);

                                            function drawBasic() {
                                                var data = google.visualization.arrayToDataTable({!! json_encode($businessEnviroment) !!});

                                                var options = {
                                                    chartArea: { width: '50%' },
                                                    hAxis: {
                                                        title: 'Value',
                                                        minValue: 0,
                                                        maxValue: 6,
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    vAxis: {
                                                        title: 'Sub Index',
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    colors: ['#1851A7']
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('chart_div'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                                <div class="col" data-aos="fade-down" data-aos-duration="750" style="width: 700px;">
                                    <div class="row">
                                        <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 26px;">Regional Digital Adoption Readiness</span></div>
                                    </div>
                                    <div class="row" style="text-align: center;">
                                        <div class="col-xxl-12" style="margin-top: 40px;">
                                        <!-- <img src="assets/img/image%2028.png" width="586" height="304"> -->
                                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div2" style="width:558px;height:274px;font-family: Poppins;"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script>
                                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                                            google.charts.setOnLoadCallback(drawBasic);

                                            function drawBasic() {
                                                var data = google.visualization.arrayToDataTable({!! json_encode($digitalAdoption) !!});

                                                var options = {
                                                    chartArea: { width: '50%' },
                                                    hAxis: {
                                                        title: 'Value',
                                                        minValue: 0,
                                                        maxValue: 6,
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    vAxis: {
                                                        title: 'Sub Index',
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    colors: ['#C52454']
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('chart_div2'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="width: 1340px;margin-top: 50px;">
                        <div class="col" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col" data-aos="fade-down" data-aos-duration="750" style="width: 700px;">
                                    <div class="row">
                                        <div class="col" style="text-align: center;font-size: 20px;"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 26px;">Regional Technology Infrastructure Readiness</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-top: 40px;text-align: center;">
                                        <!-- <img src="assets/img/image%2030.png" width="588" height="274" style="height: 304px;"> -->
                                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div3" style="width:558px;height:274px;font-family: Poppins;"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script>
                                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                                            google.charts.setOnLoadCallback(drawBasic);

                                            function drawBasic() {
                                                var data = google.visualization.arrayToDataTable({!! json_encode($technologyInfrastructure) !!});

                                                var options = {
                                                    chartArea: { width: '50%' },
                                                    hAxis: {
                                                        title: 'Value',
                                                        minValue: 0,
                                                        maxValue: 6,
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    vAxis: {
                                                        title: 'Sub Index',
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    colors: ['#1C8113']
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('chart_div3'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                                <div class="col" data-aos="fade-down" data-aos-duration="750" style="width: 700px;">
                                    <div class="row">
                                        <div class="col" style="text-align: center;"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 26px;">Regional Capacity Growth Readiness</span></div>
                                    </div>
                                    <div class="row" style="text-align: center;">
                                        <div class="col-xxl-12" style="margin-top: 40px;">
                                        <!-- <img src="assets/img/image%2034.png" width="586" height="304"> -->
                                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div4" style="width:558px;height:274px;font-family: Poppins;"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script>
                                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                                            google.charts.setOnLoadCallback(drawBasic);

                                            function drawBasic() {
                                                var data = google.visualization.arrayToDataTable({!! json_encode($capacityGrowth) !!});

                                                var options = {
                                                    chartArea: { width: '50%' },
                                                    hAxis: {
                                                        title: 'Value',
                                                        minValue: 0,
                                                        maxValue: 6,
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    vAxis: {
                                                        title: 'Sub Index',
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    colors: ['#6A1CA8']
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="width: 1340px;margin-top: 50px;">
                        <div class="col" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col" data-aos="fade-down" data-aos-duration="750" style="width: 700px;">
                                    <div class="row">
                                        <div class="col" style="text-align: center;font-size: 20px;"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 26px;">Regional Socio Economic Readiness</span></div>
                                    </div>
                                    <div class="row">
                                        <div class="col" style="margin-top: 40px;text-align: center;">
                                        <!-- <img src="assets/img/image%2033.png" width="588" height="274" style="height: 304px;"> -->
                                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div5" style="width:558px;height:174px;font-family: Poppins;"></div>
                                        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                                        <script>
                                            google.charts.load('current', { packages: ['corechart', 'bar'] });
                                            google.charts.setOnLoadCallback(drawBasic);

                                            function drawBasic() {
                                                var data = google.visualization.arrayToDataTable({!! json_encode($socioEconomic) !!});

                                                var options = {
                                                    chartArea: { width: '50%' },
                                                    hAxis: {
                                                        title: 'Value',
                                                        minValue: 0,
                                                        maxValue: 6,
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    vAxis: {
                                                        title: 'Sub Index',
                                                        textStyle: { fontName: 'Poppins' }
                                                    },
                                                    colors: ['#198F9F']
                                                };

                                                var chart = new google.visualization.BarChart(document.getElementById('chart_div5'));

                                                chart.draw(data, options);
                                            }
                                        </script>
                                    </div>
                                    </div>
                                </div>
                                <!-- <div class="col" style="width: 700px;font-family: 'Poppins';">
                                    <div class="row" style="text-align: center;margin-top: 100px;">
                                        <div class="col-xxl-12" style="margin-top: 40px;">
                                            <div class="row">
                                                <div class="col"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 18px;"><br>Click here to see the<br><br></span></div>
                                            </div>
                                            <div class="row">
                                                <div class="col"><a href="#" style="font-size: 21px;color: rgb(9,52,115);">Detailed View of Ampara District <br><br></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection