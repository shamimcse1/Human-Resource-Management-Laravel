<x-admin::layouts.master>
    <main>
        <div class="pagetitle">
            <h1>Create User</h1>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-4">Create User</h3>
                        </div>
                        <div class="card-body mt-3">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="name" name="name" type="text">
                                    {{ old('name') }}</input>
                                    <label for="name">Name:</label>
                                    @error('name')
                                        <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="email" name="email" type="text">
                                    {{ old('email') }}</input>
                                    <label for="email">Email:</label>
                                    @error('email')
                                        <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="password" name="password" type="password">
                                    {{ old('password') }}</input>
                                    <label for="password">Password:</label>
                                    @error('password')
                                        <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="image" name="image" type="file">
                                    {{ old('image') }}</input>
                                    <label for="image">Image:</label>
                                    @error('image')
                                        <span class="small text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-admin::layouts.master>
