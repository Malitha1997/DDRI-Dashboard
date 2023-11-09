@extends('layouts.navbar')

@section('content')
<div class="container" style="margin-top: 10%">
            <div class="row" style="color: var(--bs-body-bg);">
                <div class="col-12 col-md-8">
                    <div class="row">
                        <span style="color: rgb(12,6,86);font-family: 'Poppins';font-weight: bold;"><strong><span data-aos="fade-down" data-aos-duration="1500" style="color: rgb(5, 44, 101);"><br><br>District Digital Readiness Index</span></strong></span>
                    </div>
                    <div class="row">
                        <video data-aos="fade-in" data-aos-duration="1500" controls  autoplay muted style="margin-top:2%">
                        <source src="{{asset('img/Lanka.mp4')}}" type="video/mp4"></video>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                <div class="container">
                    <div class="row" style="margin-top:5%">
                        <select class="form-select" data-aos="fade-down" data-aos-duration="750" id="districtSelect" name="districtSelect" aria-label="Default select example" style="font-family: poppins;width:100%">
                            <option selected>Select the district</option>
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
                    
                    <div class="row">
                        <a data-aos="fade-up" data-aos-duration="750" id="businessEnviromentButton" class="btn btn-primary" href="{{route('BusinessEnviroment')}}" type="button" style="width: 100%;background: #1851A7;font-family: 'Poppins';text-align:center;margin-top:5%">Regional Business Environment <br>Readiness</a>
                    </div>
                    <div class="row" style="font-family: 'Poppins';">
                        <a data-aos="fade-up" data-aos-duration="750" id="technologyInfrastructureButton" class="btn btn-primary" href="{{route('TechnologyInfrastructure')}}" type="button" style="border-width:0;background: #1C8113;font-family: 'Poppins';width: 100%;margin-top:3%">Regional Technology Infrastructure <br>Readiness</a>
                    </div>
                    <div class="row" style="font-family: 'Poppins';">
                        <a data-aos="fade-up" data-aos-duration="750" id="socioEconomicButton" class="btn btn-primary" href="{{route('SocioEconomic')}}" type="button" style="border-width:0;width: 100%;background: #198F9F;font-family: 'Poppins';margin-top:3%">Regional Socio Economic <br>Readiness</a>
                    </div>
                    <div class="row" style="font-family: 'Poppins';">
                        <a data-aos="fade-up" data-aos-duration="750" id="capacityGrowthButton" class="btn btn-primary" href="{{route('CapacityGrowth')}}" type="button" style="border-width:0;width: 100%;background: #6A1CA8;font-family: 'Poppins';margin-top:3%">Regional Capacity Growth <br>Readiness</a>
                    </div>
                    <div class="row" style="font-family: 'Poppins';">
                        <a data-aos="fade-up" data-aos-duration="750" id="digitalAdoptionButton" class="btn btn-primary" href="{{route('DigitalAdoption')}}" type="button" style="border-width:0;width: 100%;background: #C52454;font-family: 'Poppins';margin-top:3%">Regional Digital Adoption <br>Readiness</a>
                    </div>
                    <div class="row" style="font-family: 'Poppins';margin-top:5%">
                        <a data-aos="fade-up" data-aos-duration="750" id="comparisonButton" class="btn btn-primary" href="{{route('comparison')}}" type="button" style="margin-left:35%;background: url(&quot;{{asset('img/Screenshot (561) 6.png')}}&quot;);height: 40px;width: 115px;border-style: none;font-weight: bold;">Comparison</a>
                    </div>
                    </div>
                
                  
                <div class="row"><canvas id="radarChart" aria-label="chart" height="370%" width="370%"></canvas></div>                
                    
                    <div class="row" style="text-align:center">
                        <a class="btn btn-primary" id="seemorebutton" href="{{route('Ampara')}}" type="button" style="margin-left:34%;font-family:poppins;background: url(&quot;{{asset('img/Screenshot (561) 3.png')}}&quot;);height: 40px;width: 115px;border-style: none;font-weight: bold;">See more</a>
                    </div>
                </div>
                                <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>
                                <script>
                                    var ctx = document.getElementById("radarChart").getContext("2d");
                                    var radarChart;
                                    var chartData = {
                                        Ampara: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($ampara) !!},
                                        },
                                        Anuradhapura: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($anuradhapura) !!},
                                        },
                                        Badulla: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($badulla) !!},
                                        },
                                        Batticaloa: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($batticaloa) !!},
                                        },
                                        Colombo: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($colombo) !!},
                                        },
                                        Galle: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($galle) !!},
                                        },
                                        Gampaha: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($gampaha) !!},
                                        },
                                        Hambantota: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($hambantota) !!},
                                        },
                                        Jaffna: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($jaffna) !!},
                                        },
                                        Kalutara: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($kaluthara) !!},
                                        },
                                        Kandy: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($kandy) !!},
                                        },
                                        Kegalle: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($kegalle) !!},
                                        },
                                        Kilinochchi: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($kilinochchi) !!},
                                        },
                                        Kurunegala: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($kurunegala) !!},
                                        },
                                        Mannar: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($mannar) !!},
                                        },
                                        Matale: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($matale) !!},
                                        },
                                        Matara: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($matara) !!},
                                        },
                                        Monaragala: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($monaragala) !!},
                                        },
                                        Mulativu: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($mulativu) !!},
                                        },
                                        NuwaraEliya: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($nuwaraeliya) !!},
                                        },
                                        Polonnaruwa: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($polonnaruwa) !!},
                                        },
                                        Puttalam: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($puttalam) !!},
                                        },
                                        Ratnapura: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($ratnapura) !!},
                                        },
                                        Trincomalee: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($trincomalee) !!},
                                        },
                                        Vavuniya: {
                                            labels: {!! json_encode($labels) !!},
                                            data: {!! json_encode($vavuniya) !!},
                                        },

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

                                    function updateChart(selectedDistrict) {
                                        if (radarChart) {
                                            radarChart.destroy(); // Destroy the existing chart if it exists
                                        }

                                        var districtData = chartData[selectedDistrict];

                                        radarChart = new Chart(ctx, {
                                            type: 'radar',
                                            data: {
                                                labels: districtData.labels,
                                                datasets: [{
                                                    label: "Value",
                                                    data: districtData.data,
                                                    backgroundColor: "transparent",
                                                    borderColor: "rgba(229, 89, 52, 1)",
                                                    borderWidth: 2,
                                                    pointBackgroundColor: "pink",
                                                    pointRadius: 6,
                                                }],
                                            },
                                            options: radarOptions,
                                        });
                                    }

                                    var districtSelect = document.getElementById("districtSelect");

                                    districtSelect.addEventListener("change", function () {
                                        var selectedDistrict = districtSelect.value;
                                        if (selectedDistrict !== "Select the district") {
                                            updateChart(selectedDistrict);
                                        }
                                    });

                                    var districtSelect = document.getElementById("districtSelect");
                                    // var radarChart = document.getElementById("radarChart");
                                    var businessEnviromentButton = document.getElementById("businessEnviromentButton");
                                    var technologyInfrastructureButton = document.getElementById("technologyInfrastructureButton");
                                    var socioEconomicButton = document.getElementById("socioEconomicButton");
                                    var capacityGrowthButton = document.getElementById("capacityGrowthButton");
                                    var digitalAdoptionButton = document.getElementById("digitalAdoptionButton");
                                    var seemorebutton = document.getElementById("seemorebutton");
                                    var comparisonButton = document.getElementById("comparisonButton");

                                    function handleChartVisibility() {
                                        // Get the selected value
                                        var selectedValue = districtSelect.value;

                                        if (selectedValue !== "Select the district") {
                                            // Show the chart
                                            radarChart.canvas.style.display = "block";
                                            businessEnviromentButton.style.display = "none";
                                            technologyInfrastructureButton.style.display = "none";
                                            socioEconomicButton.style.display = "none";
                                            capacityGrowthButton.style.display = "none";
                                            digitalAdoptionButton.style.display = "none";
                                            comparisonButton.style.display = "none";
                                            
                                            updateChart(selectedValue);
                                            var route = "{{ route('Ampara') }}";
                                            if (selectedValue === "Ampara") {
                                                route = "{{ route('Ampara') }}";
                                            } else if (selectedValue === "Anuradhapura") {
                                                route = "{{ route('Anuradhapura') }}";
                                            } else if (selectedValue === "Batticaloa") {
                                                route = "{{ route('Batticaloa') }}";
                                            } else if (selectedValue === "Badulla") {
                                                route = "{{ route('Badulla') }}";
                                            } else if (selectedValue === "Colombo") {
                                                route = "{{ route('Colombo') }}";
                                            } else if (selectedValue === "Galle") {
                                                route = "{{ route('Galle') }}";
                                            } else if (selectedValue === "Gampaha") {
                                                route = "{{ route('Gampaha') }}";
                                            } else if (selectedValue === "Hambantota") {
                                                route = "{{ route('Hambantota') }}";
                                            } else if (selectedValue === "Jaffna") {
                                                route = "{{ route('Jaffna') }}";
                                            } else if (selectedValue === "Kalutara") {
                                                route = "{{ route('Kalutara') }}";
                                            } else if (selectedValue === "Kandy") {
                                                route = "{{ route('Kandy') }}";
                                            } else if (selectedValue === "Kegalle") {
                                                route = "{{ route('Kegalle') }}";
                                            } else if (selectedValue === "Kilinochchi") {
                                                route = "{{ route('Kilinochchi') }}";
                                            } else if (selectedValue === "Kurunegala") {
                                                route = "{{ route('Kurunegala') }}";
                                            } else if (selectedValue === "Mannar") {
                                                route = "{{ route('Mannar') }}";
                                            } else if (selectedValue === "Matale") {
                                                route = "{{ route('Matale') }}";
                                            } else if (selectedValue === "Matara") {
                                                route = "{{ route('Matara') }}";
                                            } else if (selectedValue === "Monaragala") {
                                                route = "{{ route('Monaragala') }}";
                                            } else if (selectedValue === "Mulativu") {
                                                route = "{{ route('Mulativu') }}";
                                            } else if (selectedValue === "NuwaraEliya") {
                                                route = "{{ route('NuwaraEliya') }}";
                                            } else if (selectedValue === "Polonnaruwa") {
                                                route = "{{ route('Polonnaruwa') }}";
                                            } else if (selectedValue === "Puttalam") {
                                                route = "{{ route('Puttalam') }}";
                                            } else if (selectedValue === "Ratnapura") {
                                                route = "{{ route('Ratnapura') }}";
                                            } else if (selectedValue === "Trincomalee") {
                                                route = "{{ route('Trincomalee') }}";
                                            } else if (selectedValue === "Vavuniya") {
                                                route = "{{ route('Vavuniya') }}";
                                            }
                                            seemorebutton.href = route;
                                            seemorebutton.style.display = "block";
                                        } 
                                        else {
                                            // Hide the chart
                                            radarChart.canvas.style.display = "none";
                                            businessEnviromentButton.style.display = "block";
                                            technologyInfrastructureButton.style.display = "block";
                                            socioEconomicButton.style.display = "block";
                                            capacityGrowthButton.style.display = "block";
                                            digitalAdoptionButton.style.display = "block";
                                            comparisonButton.style.display = "block";
                                            seemorebutton.style.display = "none";
                                            
                                        }
                                    }

                                    // Add an event listener to detect changes in the select element
                                    districtSelect.addEventListener("change", handleChartVisibility);

                                    // Call the function to set the initial chart visibility
                                    handleChartVisibility();
                                </script>
                          
                
                <div class="row">
                    <div class="col-6" style="font-family:poppins;margin-bottom:2%;margin-top: 20px;width: 1190px;margin-left: 5%;background: var(--bs-secondary-bg);border-style: solid;border-color: var(--bs-dark-border-subtle);border-radius: 10px;">
                        <div class="row">
                            <div class="col" style="text-align: center;"><h4 style="color: var(--bs-primary-text-emphasis);border-color: var(--bs-emphasis-color);">You can Download the DDRI report here&nbsp;</h4></div>
                        </div>
                        <div class="row">
                            <div class="col" style="text-align: center;"><a class="btn btn-primary" href="{{ route('download') }}"  type="button" style="margin-top: 20px;margin-bottom: 20px;background: #1F2471;">Download</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection