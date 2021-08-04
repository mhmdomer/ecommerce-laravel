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
                @foreach ($CountryVisit as $visit)
                <tr>
                    <td>{{ $visit->country }}</td>
                    <td>{{ $visit->visits }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $CountryVisit->links() }}
    </div>
</div>
@endsection

@section('javascript')

<script>
    let myChart = document.getElementById('products_status').getContext('2d');
    let myChart2 = document.getElementById('products_status2').getContext('2d');
    let myChart3 = document.getElementById('products_status3').getContext('2d');
    let data = {!! json_encode($topCountries, JSON_HEX_TAG) !!};

        let chart3 = new Chart(myChart3, {
            type: 'bar'
            , data: {
                labels: data.map((item) => item.country)
                , datasets: [{
                    label: 'Top Countries'
                    , data: data.map((item) => item.visits)
                    , backgroundColor: [
                        'rgba(255, 99, 132, 0.2)'
                        , 'rgba(54, 162, 235, 0.2)'
                        , 'rgba(255, 206, 86, 0.2)'
                        , 'rgba(75, 192, 192, 0.2)'
                        , 'rgba(153, 102, 255, 0.2)'
                        , 'rgba(255, 159, 64, 0.2)'
                        , 'rgba(255, 30, 86, 0.2)'
                        , 'rgba(75, 192, 20, 0.2)'
                        , 'rgba(153, 102, 90, 0.2)'
                        , 'rgba(200, 59, 64, 0.2)'
                    ]
                    , borderColor: [
                        'rgba(255, 99, 132, 1)'
                        , 'rgba(54, 162, 235, 1)'
                        , 'rgba(255, 206, 86, 1)'
                        , 'rgba(75, 192, 192, 1)'
                        , 'rgba(153, 102, 255, 1)'
                        , 'rgba(255, 159, 64, 1)'
                        , 'rgba(255, 206, 186, 1)'
                        , 'rgba(75, 192, 92, 1)'
                        , 'rgba(15, 10, 255, 1)'
                        , 'rgba(25, 159, 64, 1)'
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
