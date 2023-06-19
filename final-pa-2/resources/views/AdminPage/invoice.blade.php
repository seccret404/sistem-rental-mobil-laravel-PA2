<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <style>
        h2 {
            font-family: Georgia, 'Times New Roman', Times, serif;
        }

        table, td, th {
            text-align: center;
            font-size: 12px;
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 100%;
        }

        .header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 20px;
            margin-bottom: 20px;
        }

        .header-address {
            margin-bottom: 0;
        }

        .header-title {
            margin-bottom: 0;
            text-align: right;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-address" style="float: left">
                <h5>MARSADA TRIP</h5>
                <p>
                    Jl Siraja Deang Toruan <br>
                    Kecamatan Laguboti<br>
                    Kabupaten Toba <br>
                    Phone: 0853 7356 6250
                </p>
                <br>
                <p>KEPADA YTH:</p>
                <br>
                <br>
            </div>
            <div class="header-title">
                <h2>OFFERING LETTER</h2>
                <br>
                <p>
                    NUMBER: 0002/OL/MAR/2023 <br>
                    DATE: /MAR/2023
                </p>
            </div>
        </div>

        <div class="row" style="margin-top: 150px;">
            <div class="col-md-12">
                <table class="table table-bordered border-dark">
                    <thead>
                        <tr>
                            <th scope="col">NO.</th>
                            <th scope="col">QUANTITY</th>
                            <th scope="col">UNIT</th>
                            <th scope="col" class="text-center">
                                ALL IN
                                <br>
                                (CAR, DRIVER, BBM)/DAY(RP)
                            </th>
                            <th scope="col">DATE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $counter = 1;
                        @endphp
                        @foreach ($administrasi as $adm)
                            <tr>
                                <td>{{ $counter }}</td>
                                <td>{{ $adm->jmlh_unit }}</td>
                                <td>{{ $adm->nama }}</td>
                                <td>{{ $adm->profit }}</td>
                                <td>{{ $adm->updated_at }}</td>
                            </tr>
                            <tr>
                                <td colspan="5" class="total text-center" style="text-align: center;">
                                    Exclude: Parking Fee, Tol, Driver(Lunch/Dinner), Driver Accomodation (If there is
                                    out of town trip)
                                </td>
                            </tr>
                        @php
                            $counter++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div style="float: right">
            <br>
            <br>
            <br>
            <br>
            <h6>
                ARISTONI SILALAHI
            </h6>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h6 class="text-center" style="text-align: center;">
            If you have any questions concerning this offering letter, contact: Ariestoni at. 0853 7356 6250
            <br>
            THANK YOU FOR YOUR BUSINESS
        </h6>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>
</body>
</html>
