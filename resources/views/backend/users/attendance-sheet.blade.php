<x-admin::layouts.master>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Employee Attendance Table</h1> <br>
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
                            <form style="display: inline" method="GET" action="{{ url('/login-activity') }}">
                                <input class="form-control float-end mb-2" style="width: 200px;" name="search"
                                    placeholder="Search Here" />
                            </form>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th>Sl#</th>
                                        <th>Employee ID</th>
                                        <th>Login Time & Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sl=0 @endphp
                                    @foreach ($loginActivities as $loginActivity)
                                        {{-- @dd($loginActivity); --}}
                                        <tr>
                                            <td>{{ ++$sl }}</td>
                                            <td>{{ $loginActivity->user_id }}</td>
                                            <td>{{ $loginActivity->created_at }}</td>
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
