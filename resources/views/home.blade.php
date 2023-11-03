@extends('layouts.navbar')

@section('content')
<div class="container" style="margin-top: 150px;">
            <div class="row" style="width: 1430px;color: var(--bs-body-bg);">
                <div class="col-md-4 col-xxl-4" style="margin-left: -50px;">
                    <div class="row">
                        <div class="col" style="margin-left: 30px;">
                            <div class="row">
                                <div class="col" style="margin-left: 100px;"><span style="color: rgb(12,6,86);font-size: 19px;font-family: 'Poppins';font-weight: bold;"><br><strong><span style="color: rgb(5, 44, 101);">District Digital Readiness Index</span></strong><br><br></span></div>
                            </div>
                            <div class="row">
                                <div class="col-xxl-5" style="margin-top: -50px;"><span style="color: var(--bs-emphasis-color);font-size: 52px;margin-left: 200px;">.</span></div>
                                <div class="col" style="margin-top: -6px;"><span style="color: var(--bs-emphasis-color);">District Average</span></div>
                            </div>
                            <div class="row">
                                <div class="col"><img src="{{asset('img/image 15.png')}}" width="479" height="428"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4"><img src="{{asset('img/lk 1.png')}}" width="293" height="450" style="margin-left: 120px;height: 450px;margin-top: 80px;"></div>
                <div class="col-md-4" style="margin-top: 20px;">
                    <div class="row"data-aos="fade-down" data-aos-duration="1000" style="width: 345px;margin-left: 50px;border-radius: 6px;border-style: solid;border-color: var(--bs-dark-border-subtle);">
                    <select class="form-select" id="districtSelect" aria-label="Default select example" style="font-family: poppins">
                        <option selected>Select the district</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticoloa">Batticoloa</option>
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
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalama">Puttalama</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>
                    </select>

                    </div>
                    <div class="row">
                        <div class="col" data-aos="fade-up" data-aos-duration="750" style="margin-top: 30px;"><a id="businessEnviromentButton" class="btn btn-primary" href="{{route('BusinessEnviroment')}}" type="button" style="border-width:0;margin-left: 50px;width: 345px;background: #1851A7;font-family: 'Poppins';font-size: 18px;">Regional Business Environment Readiness</a></div>
                    </div>
                    <div class="row" style="font-family: 'Poppins';font-size: 18px;">
                        <div class="col" data-aos="fade-up" data-aos-duration="750" style="margin-top: 10px;font-family: 'Poppins';font-size: 18px;"><a id="technologyInfrastructureButton" class="btn btn-primary" href="{{route('TechnologyInfrastructure')}}" type="button" style="border-width:0;margin-left: 50px;background: #1C8113;font-family: 'Poppins';font-size: 18px;width: 345px;">Regional Technology Infrastructure Readiness</a></div>
                    </div>
                    <div class="row" style="font-family: 'Poppins';font-size: 18px;">
                        <div class="col" data-aos="fade-up" data-aos-duration="750" style="margin-top: 10px;font-family: 'Poppins';font-size: 18px;"><a id="socioEconomicButton" class="btn btn-primary" href="{{route('SocioEconomic')}}" type="button" style="border-width:0;margin-left: 50px;width: 345px;background: #198F9F;font-family: 'Poppins';font-size: 18px;">Regional Socio Economic Readiness</a></div>
                    </div>
                    <div class="row" style="font-family: 'Poppins';font-size: 18px;">
                        <div class="col" data-aos="fade-up" data-aos-duration="750" style="margin-top: 10px;font-family: 'Poppins';font-size: 18px;"><a id="capacityGrowthButton" class="btn btn-primary" href="{{route('CapacityGrowth')}}" type="button" style="border-width:0;margin-left: 50px;width: 345px;background: #6A1CA8;font-family: 'Poppins';font-size: 18px;">Regional Capacity Growth Readiness</a></div>
                    </div>
                    <div class="row" style="font-family: 'Poppins';font-size: 18px;">
                        <div class="col" data-aos="fade-up" data-aos-duration="750" style="margin-top: 10px;font-family: 'Poppins';font-size: 18px;"><a id="digitalAdoptionButton" class="btn btn-primary" href="{{route('DigitalAdoption')}}" type="button" style="border-width:0;margin-left: 50px;width: 345px;background: #C52454;font-family: 'Poppins';font-size: 18px;">Regional Digital Adoption Readiness</a></div>
                    </div>
                    <canvas id="radarChart" aria-label="chart" data-aos="fade-down" data-aos-duration="1000" style="margin-left: 30px;margin-top:-40px; font-size: 20px;" height="400" width="400"></canvas>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                                <script>
                                    var ctx = document.getElementById("radarChart").getContext("2d");
                                    var radarData = {
                                        labels: {!! json_encode($labels) !!},
                                        datasets: [{
                                            label: "Index value",
                                            data: {!! json_encode($ampara) !!},
                                            backgroundColor: "transparent",
                                            borderColor: "rgba(229, 89, 52, 1)",
                                            borderWidth: 2,
                                            pointBackgroundColor: "pink",
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

                                    var districtSelect = document.getElementById("districtSelect");
                                    var businessEnviromentButton = document.getElementById("businessEnviromentButton");
                                    var technologyInfrastructureButton = document.getElementById("technologyInfrastructureButton");
                                    var socioEconomicButton = document.getElementById("socioEconomicButton");
                                    var capacityGrowthButton = document.getElementById("capacityGrowthButton");
                                    var digitalAdoptionButton = document.getElementById("digitalAdoptionButton");

                                    function handleChartVisibility() {
                                        // Get the selected value
                                        var selectedValue = districtSelect.value;

                                        // Check if "Ampara" is selected
                                        if (selectedValue === "Ampara") {
                                            // Show the chart
                                            radarChart.canvas.style.display = "block";
                                            businessEnviromentButton.style.display = "none";
                                            technologyInfrastructureButton.style.display = "none";
                                            socioEconomicButton.style.display = "none";
                                            capacityGrowthButton.style.display = "none";
                                            digitalAdoptionButton.style.display = "none";
                                        } else {
                                            // Hide the chart
                                            radarChart.canvas.style.display = "none";
                                            businessEnviromentButton.style.display = "block";
                                            technologyInfrastructureButton.style.display = "block";
                                            socioEconomicButton.style.display = "block";
                                            capacityGrowthButton.style.display = "block";
                                            digitalAdoptionButton.style.display = "block";
                                        }
                                    }

                                    // Add an event listener to detect changes in the select element
                                    districtSelect.addEventListener("change", handleChartVisibility);

                                    // Call the function to set the initial chart visibility
                                    handleChartVisibility();
                                </script>
                </div>
            </div>
        </div>
@endsection