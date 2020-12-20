@extends('layaut')

@section('title')Авторизация@endsection

@section('content')
    <div class="text-center m-5 p-5">
    <main class="form-signin">
        <form style="width: 100%; max-width: 330px">
            <img class="mb-4" src="/img/v807073-2012298816.jpg" alt="" width="100" height="100">
            <h1 class="h3 mb-3 fw-normal"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Пожалуйста войдите</font></font></h1>
            <label for="inputEmail" class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Адрес электронной почты</font></font></label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Адрес электронной почты" required="" autofocus="">
            <label for="inputPassword" class="visually-hidden"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">пароль</font></font></label>
            <input type="password" id="inputPassword" class="form-control" placeholder="пароль" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Запомни меня
                        </font></font></label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">войти в систему</font></font></button>
            <p class="mt-5 mb-3 text-muted"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">© 2017-2020</font></font></p>
        </form>
    </main>
    </div>
@endsection
