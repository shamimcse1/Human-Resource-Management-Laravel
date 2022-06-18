<x-admin::layouts.master>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Deleted Offence Table</h1>
            @if (Session::has('message'))
                <div class="alert alert-success">
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>
        <section class="section">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="mt-2 mb-2">
                                <a class="btn btn-sm btn-info" href="{{ route('departments.create') }}">Add New</a>
                                <a class="btn btn-sm btn-info" href="{{ route('departments.index') }}">Department
                                    List</a>
                                <form style="display: inline" method="GET"
                                    action="{{ route('departments.trashed') }}">
                                    <input class="form-control float-end mb-2" style="width: 200px;" name="search"
                                        placeholder="Search Here" />
                                </form>
                            </div>
                            <table class="table table-bordered border-primary">
                                <thead>
                                    <tr>
                                        <th>Sl#</th>
                                        <th>Department</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $sl=0 @endphp
                                    @foreach ($department as $departments)
                                        <tr>
                                            <td>{{ ++$sl }}</td>
                                            <td>{{ $departments->name }}</td>
                                            <td><a class="btn btn-primary btn-sm"
                                                    href="{{ route('departments.restore', ['department' => $departments->id]) }}">Restore</a>
                                                <form style="display: inline;"
                                                    action="{{ route('departments.delete', ['department' => $departments->id]) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button
                                                        onclick="return confirm('Are you want to delete parmanently?')"
                                                        class="btn btn-danger btn-sm" type="submit">Parmanent
                                                        Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $department->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</x-admin::layouts.master>
