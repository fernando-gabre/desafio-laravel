<div class="row">
    <div class="col-md-12 d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-4 col-x-12 bg-white p-4 vh-auto br-10">
            <div class="container mt-2">
                <h2 class="mb-4 mt-4 text-center"><i class="bi bi-globe-americas text-warning"></i>
                    <strong><span class="text-color-1">C</span><span class="text-secondary">137</span></strong>
                </h2>
                @if($errors->any())
                    @foreach ($errors->all() as $error)
                        <span class=" text-danger">{{$error}}<br></span>

                    @endforeach
                @endif
                <form action="{{route('login')}}" method="post">
                    @csrf()
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-2">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control" id="senha">
                    </div>

                    <button type="submit" class="mt-3 mb-4 btn btn-dark col-12">Login</button>

                </form>
                <a href="{{route('register')}}" >Não tenho uma conta</a>
            </div>
        </div>
    </div>
</div>