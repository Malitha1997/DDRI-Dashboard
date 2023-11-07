@extends('layouts.navbar')

@section('content')
<section style="margin-bottom: 200px;">
        <div class="container" style="margin-top: 150px;">
            <div class="row">
                <div class="col" data-aos="fade-down" data-aos-duration="750">
                    <div class="row">
                        <div class="col" style="text-align: center;margin-top: -20px;margin-bottom: 50px;">
                        <a class="btn btn-primary d-flex flex-row justify-content-center align-items-start" type="button" style="margin-left: 0px;background: url(&quot;{{ asset('img/Back.png') }}&quot;), rgba(13,110,253,0);border-color: rgba(255,255,255,0);width: 30px;height: 30px;" href="{{route('home')}}"></a>
                        <span style="color: #09184B;font-size: 34px;font-weight: bold;font-family: 'Poppins';text-align: center;"><br>District Digital Readiness Index<br><br></span></div>
                    </div>
                    <div class="row" style="width: 1300px;text-align: center;margin-left: 200px;">
                        <div class="col-xxl-3" style="margin-top: -50px;margin-left: 0px;text-align: center;">
                            <div class="row">
                                <div class="col">
                                <form method="POST" action="{{ route('compare') }}">
                                    {{csrf_field()}}    
                                <select class="form-select" id="districtSelect1" name="districtSelect1" aria-label="Default select example" style="font-family: poppins" value="{{ old('districtSelect1')}}">
                                    <option selected>Select the district 1</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mulativu">Mulativu</option>
                                    <option value="NuwaraEliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>

                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3" style="margin-left: 0px;text-align: center;margin-top: -50px;">
                            
                            <div class="row">
                                <div class="col">
                                <select class="form-select" id="districtSelect2" name="districtSelect2" aria-label="Default select example" style="font-family: poppins">
                                    <option selected>Select the district 2</option>
                                    <option value="Ampara">Ampara</option>
                                    <option value="Anuradhapura">Anuradhapura</option>
                                    <option value="Badulla">Badulla</option>
                                    <option value="Batticaloa">Batticaloa</option>
                                    <option value="Colombo">Colombo</option>
                                    <option value="Galle">Galle</option>
                                    <option value="Gampaha">Gampaha</option>
                                    <option value="Hambantota">Hambantota</option>
                                    <option value="Jaffna">Jaffna</option>
                                    <option value="Kalutara">Kalutara</option>
                                    <option value="Kandy">Kandy</option>
                                    <option value="Kegalle">Kegalle</option>
                                    <option value="Kilinochchi">Kilinochchi</option>
                                    <option value="Kurunegala">Kurunegala</option>
                                    <option value="Mannar">Mannar</option>
                                    <option value="Matale">Matale</option>
                                    <option value="Matara">Matara</option>
                                    <option value="Monaragala">Monaragala</option>
                                    <option value="Mulativu">Mulativu</option>
                                    <option value="NuwaraEliya">Nuwara Eliya</option>
                                    <option value="Polonnaruwa">Polonnaruwa</option>
                                    <option value="Puttalam">Puttalam</option>
                                    <option value="Ratnapura">Ratnapura</option>
                                    <option value="Trincomalee">Trincomalee</option>
                                    <option value="Vavuniya">Vavuniya</option>
                                </select>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4" style="margin-right: 50px;margin-left: 20px;margin-top: -50px;">
                            <div class="row">
                                <div class="col-xxl-1"><button class="btn btn-primary" type="sumbit" style="width: 155px;height: 40px;font-family:poppins">Compare</button></div>
                            </div>
                        </div>
                        </form>
                    </div>
                    <!-- <div class="row">
                        <div class="col-xxl-11" style="margin-top: 30px;text-align: center;"><span style="color: var(--bs-emphasis-color);font-size: 25px;font-family:poppins"><br>Select District 1 and District 2 to see the comparison<br><br></span></div>
                    </div> -->
                    @if($district1!== null)
                    <div class="row" style="margin-top: 20px;border-left-style: solid;border-left-color: var(--bs-body-bg);">
                    <div class="col-xxl-12" style="border-left-style: solid;border-left-color: var(--bs-table-bg);">
                    <div class="table-responsive" data-aos="fade-down" data-aos-duration="750" style="font-family: 'Poppins';font-size: 18px;border-left-style: solid;border-left-color: var(--bs-table-bg);width:60%">
                        <table class="table">
                            <thead style="border-left-style: solid;border-left-color: var(--bs-table-bg);">
                                <tr>
                                    <th style="width: 570px;border-style: solid;border-color: var(--bs-table-color);text-align: center;height: 50px;">Readiness</th>
                                    <th style="width: 340px;border-style: solid;border-color: var(--bs-table-color);text-align: center;">{{$district1}}</th>
                                    <th style="width: 340px;border-style: solid;border-color: var(--bs-table-color);text-align: center;">{{$district2}}</th>
                                </tr>
                            </thead>

                            <tbody style="background: #1851A7;">
                                <tr style="height: 50px;">
                                    <td style="text-align: left;background: var(--bs-warning-border-subtle);">Regional Business Environment Readiness</td>
                                    @foreach($firstdistricts as $district)
                                    <td style="text-align: center;background: var(--bs-warning-border-subtle);">{{$district->business_enviroment2}}</td>
                                    @endforeach
                                    @foreach($seconddistricts as $seconddistrict)
                                    <td style="text-align: center;background: var(--bs-warning-border-subtle);">{{$seconddistrict->business_enviroment2}}</td>
                                    @endforeach
                                </tr>
                                <tr style="text-align: center;height: 50px;">
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: left;background: var(--bs-danger-bg-subtle);">Regional Technology Infrastructure Readiness</td>
                                    @foreach($firstdistricts as $district)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: var(--bs-danger-bg-subtle);">{{$district->technology_infrastructure2}}</td>
                                    @endforeach
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: var(--bs-danger-bg-subtle);">{{$seconddistrict->technology_infrastructure2}}</td>
                                </tr>
                                <tr style="height: 50px;">
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: left;background: #c6efac;">Regional Socio Economic Readiness</td>
                                    @foreach($firstdistricts as $district)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: #c6efac;">{{$district->socio_economic2}}</td>
                                    @endforeach
                                    @foreach($seconddistricts as $seconddistrict)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: #c6efac;">{{$seconddistrict->socio_economic2}}</td>
                                    @endforeach
                                </tr>
                                <tr style="height: 50px;">
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: left;background: #e8cab8;">Regional Capacity Growth Readiness</td>
                                    @foreach($firstdistricts as $district)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: #e8cab8;">{{$district->capacity_growth2}}</td>
                                    @endforeach
                                    @foreach($seconddistricts as $seconddistrict)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: #e8cab8;">{{$seconddistrict->capacity_growth2}}</td>
                                    @endforeach
                                </tr>
                                <tr style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;height: 50px;">
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: left;background: var(--bs-primary-bg-subtle);">Regional Digital Adoption Readiness</td>
                                    @foreach($firstdistricts as $district)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: var(--bs-primary-bg-subtle);">{{$district->digital_adoption2}}</td>
                                    @endforeach
                                    @foreach($seconddistricts as $seconddistrict)
                                    <td style="border-left-style: solid;border-left-color: var(--bs-body-color);text-align: center;background: var(--bs-primary-bg-subtle);">{{$seconddistrict->digital_adoption2}}</td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-xxl-12">
                    <canvas id="chartId" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left:40px; font-size: 20px;" height="450" width="450"></canvas>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                    <script>
                        var ctx = document.getElementById("chartId").getContext("2d");
                        var radarData = {
                            labels: {!! json_encode($labels) !!},
                            datasets: [{
                                label: {!! json_encode($district1) !!},
                                data: {!! json_encode($districtdata1) !!},
                                backgroundColor: "rgba(255, 99, 132, 0.2)",
                                borderColor: "rgba(229, 89, 52, 1)",
                                borderWidth: 2,
                                pointBackgroundColor: "pink",
                                pointRadius: 6,
                            },
                            {
                                label: {!! json_encode($district2) !!},
                                data: {!! json_encode($districtdata2) !!},
                                backgroundColor: "rgba(54, 162, 235, 0.2)",
                                borderColor: "rgb(54, 162, 235)",
                                borderWidth: 2,
                                pointBackgroundColor: "#d0fbfe",
                                pointRadius: 6,
                            }],
                        };

                        var radarOptions = {
                            responsive: false,
                            elements: {
                                line: {
                                    borderWidth: 6,
                                }
                            },

                            scale: {
                                r: {
                                    angleLines: {
                                        display: false
                                    },
                                    suggestedMin: 0,
                                    suggestedMax: 35
                                }

                            }
                        };

                        var radarChart = new Chart(ctx, {
                            type: 'radar',
                            data: radarData,
                            options: radarOptions,
                        });
                    </script>
                    </div>
                    @endif
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>
@endsection