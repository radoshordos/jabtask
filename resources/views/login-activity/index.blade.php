@extends('layouts.app')
@section('content')
    <h1>Přehled přihlášení</h1>


    <script type="text/JavaScript">
        function AutoRefresh(t) {
            setTimeout("location.reload(true);", t);
        }
    </script>

    <div class="panel-body">
        <table class="table table-responsive table-bordered">
            <thead>
            <tr>
                <th>Akce</th>
                <th>User Agent</th>
                <th>IP Adresa</th>
                <th>Datum</th>
            </tr>
            </thead>
            <tbody>
            @foreach($activities as $activity)
                <tr>
                    <td>{{ $activity->message }}</td>
                    <td>{{ $activity->user_agent }}</td>
                    <td>{{ $activity->ip_address }}</td>
                    <td>{{ $activity->created_at->diffForHumans() }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="pagination">
            {{ $activities->render() }}
        </div>
@endsection

@section('scripts')
            <script>
                window.onload = function () {
                    setTimeout(function () {
                        location.reload()
                    }, 15000);
                };
            </script>
@endsection