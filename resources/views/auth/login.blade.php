<x-layout>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-5 p-4 my-5 shadow card">
                <form method="POST">
                    <h4 class="text-center">Login</h4>
                    @error('login_error')
                            <p class="text-danger pt-3">{{ $message }} </p>
                        @enderror
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input value="{{ old('email') }}" type="email" name="email" class="form-control"
                            id="exampleInputEmail1" aria-describedby="emailHelp">
                        @error('email')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                        @error('password')
                            <p class="text-danger">{{ $message }} </p>
                        @enderror
                    </div>
                    <div class="text-center pt-3">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
