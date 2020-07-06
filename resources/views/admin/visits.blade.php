@extends('voyager::master')

@section('head')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <canvas id="products_status"></canvas>
        </div>
        <div class="col-md-6">
            <canvas id="products_status2"></canvas>
        </div>
    </div>
    <div>
        <canvas id="products_status3"></canvas>
    </div>
    <h3 class="mt-12 text-center text-2xl">
        Country Visits:
    </h3>
    <div class="table-responsive">
        <table id="dataTable" class="table table-hover">
            <thead>
                <tr>
                    <th>Country</th>
                    <th>Visits</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($countryVisits as $visit)
                <tr>
                    <td>{{ $visit->country }}</td>
                    <td>{{ $visit->visits }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $countryVisits->links() }}
    </div>
</div>
@endsection

@section('javascript')

<script>
    let myChart = document.getElementById('products_status').getContext('2d');
    let myChart2 = document.getElementById('products_status2').getContext('2d');
    let myChart3 = document.getElementById('products_status3').getContext('2d');
    let chart = new Chart(myChart, {
        type: 'pie'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                    , 'rgba(54, 162, 235, 0.2)'
                    , 'rgba(255, 206, 86, 0.2)'
                    , 'rgba(75, 192, 192, 0.2)'
                    , 'rgba(153, 102, 255, 0.2)'
                    , 'rgba(255, 159, 64, 0.2)'
                ]
                , borderColor: [
                    'rgba(255, 99, 132, 1)'
                    , 'rgba(54, 162, 235, 1)'
                    , 'rgba(255, 206, 86, 1)'
                    , 'rgba(75, 192, 192, 1)'
                    , 'rgba(153, 102, 255, 1)'
                    , 'rgba(255, 159, 64, 1)'
                ]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
    let chart2 = new Chart(myChart2, {
        type: 'doughnut'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                    , 'rgba(54, 162, 235, 0.2)'
                    , 'rgba(255, 206, 86, 0.2)'
                    , 'rgba(75, 192, 192, 0.2)'
                    , 'rgba(153, 102, 255, 0.2)'
                    , 'rgba(255, 159, 64, 0.2)'
                ]
                , borderColor: [
                    'rgba(255, 99, 132, 1)'
                    , 'rgba(54, 162, 235, 1)'
                    , 'rgba(255, 206, 86, 1)'
                    , 'rgba(75, 192, 192, 1)'
                    , 'rgba(153, 102, 255, 1)'
                    , 'rgba(255, 159, 64, 1)'
                ]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

    let chart3 = new Chart(myChart3, {
        type: 'bar'
        , data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange']
            , datasets: [{
                label: '# of Votes'
                , data: [12, 19, 3, 5, 2, 3]
                , backgroundColor: [
                    'rgba(255, 99, 132, 0.2)'
                    , 'rgba(54, 162, 235, 0.2)'
                    , 'rgba(255, 206, 86, 0.2)'
                    , 'rgba(75, 192, 192, 0.2)'
                    , 'rgba(153, 102, 255, 0.2)'
                    , 'rgba(255, 159, 64, 0.2)'
                ]
                , borderColor: [
                    'rgba(255, 99, 132, 1)'
                    , 'rgba(54, 162, 235, 1)'
                    , 'rgba(255, 206, 86, 1)'
                    , 'rgba(75, 192, 192, 1)'
                    , 'rgba(153, 102, 255, 1)'
                    , 'rgba(255, 159, 64, 1)'
                ]
                , borderWidth: 1
            }]
        }
        , options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });

</script>


@endsection
