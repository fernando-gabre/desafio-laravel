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
                <form method="POST" action="{{ route('register') }}">
                    <div class="mb-2">
                        <label for="nome" class="form-label">Nome</label>
                        <input type="text" class="form-control" name="name" id="nome">
                    </div>
                    @csrf()
                    <div class="mb-2">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-2">
                        <label for="senha" class="form-label">Senha</label>
                        <input type="password" name="password" class="form-control" id="senha">
                    </div>
                    <div class="mb-2">
                        <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                        <input name="password_confirmation" type="password" class="form-control"
                            id="password_confirmation">
                    </div>

                    <button type="submit" class="mt-3 btn btn-dark col-12">Cadastrar</button>
                </form>
                <a href="{{route('register')}}">Já tenho uma conta</a>
            </div>
        </div>
    </div>

</div>