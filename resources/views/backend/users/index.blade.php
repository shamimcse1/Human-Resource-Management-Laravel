<x-admin::layouts.master>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>User Table</h1> <br>
        </div>
        @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
        @endif
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-2 mb-2">
                                <a class="btn btn-sm btn-info" href="{{ route('users.create') }}">Add New</a>
                                <form style="display: inline" method="GET" action="{{ route('users.index') }}">
                                    <input class="form-control float-end mb-2" style="width: 200px;" name="search"
                                        placeholder="Search Here" />
                                </form>
                            </div>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th>Sl#</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Password</th>
                                        <th>Last Login Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sl=0 @endphp
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ ++$sl }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->password }}</td>
                                            <td>{{ $user->last_login_time }}</td>

                                            <td>
                                                <a class="btn btn-warning btn-sm"
                                                    href="{{ route('users.edit', ['user' => $user->id]) }}">Edit</a>
                                                <form style="display: inline;"
                                                    action="{{ route('users.destroy', ['user' => $user->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button onclick="return confirm('Are you want to delete?')"
                                                        class="btn btn-danger btn-sm" type="submit">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-admin::layouts.master>
