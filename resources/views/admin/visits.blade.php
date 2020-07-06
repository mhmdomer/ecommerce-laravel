@extends('voyager::master')

@section('content')

<div class="container">
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
