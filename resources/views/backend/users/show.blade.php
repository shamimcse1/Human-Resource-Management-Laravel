<x-admin::layouts.master>
    <main id="main" class="main">
        <div class="pagetitle">
        </div>
        <section class="section profile">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body pt-3">
                            <ul class="nav nav-tabs nav-tabs-bordered">
                                <div class="mt-2 mb-2">
                                    <a class="btn btn-sm btn-info" href="{{ route('departments.create') }}">Add New</a>
                                    <a class="btn btn-sm btn-info" href="{{ route('departments.index') }}">List</a>
                                </div> <br>
                            </ul>
                            <div class="tab-content pt-2">
                                <div class="tab-pane fade show active profile-overview" id="profile-overview">
                                    <h5 class="card-title">Details Information</h5>
                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label ">Department Name</div>
                                        <div class="col-lg-9 col-md-8">: {{ $department->name }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
</x-admin::layouts.master>
