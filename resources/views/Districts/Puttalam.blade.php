@extends('layouts.navbar')

@section('content')

        <div class="container" style="margin-top: 15%;">
            <div class="row">   
                <div class="col-lg-1 col-sm-1">
                    <a data-aos="fade-down" data-aos-duration="750" class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('home')}}"></a>
                </div>
                <div class="col-lg-10">
                    <h3 data-aos="fade-down" data-aos-duration="750" style="color: #09184B;font-weight: bold;font-family: 'Poppins';text-align: center;">Puttalam District Digital Readiness Index<br><br></h3>
                </div>
                
            </div>
            <div class="row">
                <div class="col-lg-6 col-sm-2" data-aos="fade-down" data-aos-duration="750">
                    <div class="row">
                        <div class="col" style="text-align: center;"><h4 style="color: var(--bs-emphasis-color);font-family: 'Poppins';">Regional Business Environment Readiness</h4></div>
                    </div>
                    <div class="row">
                        <div class="col" style="margin-top: 3%;text-align: center;">
                        <!-- <img src="assets/img/image%2029.png" width="588" height="274" style="height: 304px;"> -->
                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div" style="height:274px;font-family: Poppins;"></div>
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
                <div class="col-lg-6 col-sm-2" data-aos="fade-down" data-aos-duration="750">
                    <div class="row">
                        <div class="col" style="text-align: center;"><h4 style="color: var(--bs-emphasis-color);font-family: 'Poppins';">Regional Digital Adoption Readiness</h4></div>
                    </div>
                    <div class="row" style="text-align: center;">
                        <div class="col-xxl-12" style="margin-top: 3%;">
                        <!-- <img src="assets/img/image%2028.png" width="586" height="304"> -->
                        <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div2" style="height:274px;font-family: Poppins;"></div>
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
            <div class="row" style="margin-top: 5%">
                
                        <div class="col-lg-6 col-sm-2" data-aos="fade-down" data-aos-duration="750">
                            <div class="row">
                                <div class="col" style="text-align: center;"><h4 style="color: var(--bs-emphasis-color);font-family: 'Poppins';">Regional Technology Infrastructure Readiness</h4></div>
                            </div>
                            <div class="row">
                                <div class="col" style="margin-top: 3%;text-align: center;">
                                <!-- <img src="assets/img/image%2030.png" width="588" height="274" style="height: 304px;"> -->
                                <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div3" style="height:274px;font-family: Poppins;"></div>
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
                        <div class="col-lg-6 col-sm-2" data-aos="fade-down" data-aos-duration="750">
                            <div class="row">
                                <div class="col" style="text-align: center;"><h4 style="color: var(--bs-emphasis-color);font-family: 'Poppins';">Regional Capacity Growth Readiness</h4></div>
                            </div>
                            <div class="row" style="text-align: center;">
                                <div class="col" style="margin-top: 3%;">
                                <!-- <img src="assets/img/image%2034.png" width="586" height="304"> -->
                                <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div4" style="height:274px;font-family: Poppins;"></div>
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
            <div class="row" style="margin-top: 5%;">
                <div class="col-lg-12 col-sm-1" data-aos="fade-down" data-aos-duration="750">
                            <div class="row">
                                <div class="col" style="text-align: center;"><h4 style="color: var(--bs-emphasis-color);font-family: 'Poppins';">Regional Socio Economic Readiness</h4></div>
                            </div>
                            <div class="row">
                                <div class="col" style="margin-top: 3%;text-align: center;">
                                <!-- <img src="assets/img/image%2033.png" width="588" height="274" style="height: 304px;"> -->
                                <div class="container" data-aos="fade-down" data-aos-duration="1000" id="chart_div5" style="height:174px;font-family: Poppins;"></div>
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

@endsection