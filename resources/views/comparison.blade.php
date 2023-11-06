@extends('layouts.navbar')

@section('content')
<section style="margin-bottom: 1000px;">
        <div class="container" style="margin-top: 150px;">
            <div class="row" style="width: 1430px;">
                <div class="col">
                    <div class="row">
                        <div class="col-xxl-11" style="text-align: center;margin-top: -20px;margin-bottom: 50px;"><span style="color: #09184B;font-size: 34px;font-weight: bold;font-family: 'Poppins';text-align: center;"><br>District Digital Readiness Index<br><br></span></div>
                    </div>
                    <div class="row" style="width: 1300px;text-align: center;margin-left: 200px;">
                        <div class="col-xxl-3" style="margin-top: 0px;margin-left: 0px;text-align: center;">
                            <div class="row">
                                <div class="col"><span style="color: var(--bs-emphasis-color);font-family: 'Poppins';font-size: 22px;">Select District 1</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="height: 50px;width: 155px;font-size: 20px;margin-top: 20px;">Dropdown </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-3" style="margin-left: 0px;text-align: center;">
                            <div class="row">
                                <div class="col"><span style="color: var(--bs-emphasis-color);font-size: 22px;font-family: 'Poppins';">Select District 2</span></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" aria-expanded="false" data-bs-toggle="dropdown" type="button" style="width: 155px;height: 50px;font-size: 20px;margin-top: 20px;">Dropdown </button>
                                        <div class="dropdown-menu"><a class="dropdown-item" href="#">First Item</a><a class="dropdown-item" href="#">Second Item</a><a class="dropdown-item" href="#">Third Item</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4" style="margin-right: 50px;margin-left: 20px;margin-top: 32px;">
                            <div class="row">
                                <div class="col-xxl-1"><button class="btn btn-primary" type="button" style="width: 155px;height: 50px;font-size: 24px;margin-top: 20px;">Compare</button></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-11" style="margin-top: 30px;text-align: center;"><span style="color: var(--bs-emphasis-color);font-size: 25px;"><br>Select District 1 and District 2 to see the comparison<br><br></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection