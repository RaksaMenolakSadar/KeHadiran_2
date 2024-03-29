<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="sebuah dashboard dari satu web">
        <meta name="author" content="Muhammad Rakhsha Nabil">
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico">
        <title>Web | Dashboards</title>
        <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/jumbotron/">

    </head>
    <body>
    
@include('dashboard.layouts.header')

<div class="container-fluid">
<div class="row">
@include('dashboard.layouts.sidebar')


<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    @yield('container')
</main>
</div>
</div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
        <script src="js/dashboard.js"></script>
        <script src="https://unpkg.com/feather-icons"></script>
        <script src="path/to/dist/feather.js"></script>
        <script>feather.replace()</script>

        <!-- chart JavaScript -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
        <script>
        var options = {
        chart: {
            type: 'line',
            height: 300
        },
        series: [{
            name: 'Jumlah',
            data: label
        }],
        xaxis: {
            categories: categories
        }
        }

        var chart = new ApexCharts(document.querySelector("#chart"), options);

        chart.render();
    </script>
    </body>
</html>
