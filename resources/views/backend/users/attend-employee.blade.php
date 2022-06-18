<x-admin::layouts.master>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Today Attend Employee Table</h1> <br>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-body m-3">
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th>Sl#</th>
                                        <th>Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sl=0 @endphp
                                    @foreach ($attendEmployees as $attendEmployee)
                                        <tr>
                                            <td>{{ ++$sl }}</td>
                                            <td>{{ $attendEmployee->name }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</x-admin::layouts.master>
