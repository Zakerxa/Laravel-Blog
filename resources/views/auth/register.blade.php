<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-5 p-4 my-5 shadow card">
                <form method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input value="{{ old('name') }}" type="text" name="name" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('name')
                            <p class="text-danger">{{$message}} </p>
                        @enderror

                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input value="{{ old('username') }}" type="text" name="username" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('username')
                            <p class="text-danger">{{$message}} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input value="{{ old('email') }}" type="email" name="email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('email')
                            <p class="text-danger">{{$message}} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        @error('password')
                            <p class="text-danger">{{$message}} </p>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>
