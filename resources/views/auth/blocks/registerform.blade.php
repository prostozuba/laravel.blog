@section('head_scripts')
    @parent
{{--    <script src="assets/js/jquery.maskedinput.min.js" type="text/javascript"></script>--}}
    <script src="{{asset('assets.js.bootstrap')}}" type="text/javascript"></script>
@endsection
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-8">
            <h2>Регистрация</h2>
            <p>Поля, отмеченные звездочкой, являются <strong>обязательными</strong> для заполнения.</p>

            <form class="card-body" method="POST" enctype="application/x-www-form-urlencoded" action="{{ route('registerPost') }}">
                {{ csrf_field() }}
                @if (count($errors) > 0)
                    <div class="alert alert-danger alert-dismissable" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        <strong>Во время заполнения формы возникли ошибки!</strong><br>
                        Пожалуйста, исправьте их для завершения регистрации.
                    </div>
                @endif

                @if ($errors->has('email'))
                    <div class="form-group has-error">
                        @else
                        <div class="form-group">
                            @endif
                        <label class="col-sm-4 control-label">Адрес e-mail <span class="req-field">*</span></label>
                        <div class="col-sm-8">
                        <input type="email" class="form-control" name="email" placeholder="user@domain.ru" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                 <span class="error-message">{{ $errors->first('email') }}</span>
                            @endif
                        <br>
                        </div>
                        </div>

                            @if ($errors->has('password'))
                                <div class="form-group has-error">
                                    @else
                                        <div class="form-group">
                                            @endif
                                            <label class="col-sm-4 control-label">Ваш пароль <span class="req-field">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Придумайте пароль">
                                                @if ($errors->has('password'))
                                                    <span class="error-message">{{ $errors->first('password') }}</span>
                                                @endif
                                                <br>
                                            </div>
                                        </div>

                                @if ($errors->has('password2'))
                                    <div class="form-group has-error">
                                        @else
                                            <div class="form-group">
                                                @endif
                                                <label class="col-sm-4 control-label">Подтверждение пароля <span class="req-field">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="password" class="form-control" name="password2" value="{{ old('password2') }}" placeholder="Пароль еще раз">
                                                    @if ($errors->has('password2'))
                                                        <span class="error-message">{{ $errors->first('password2') }}</span>
                                                    @endif
                                                    <br>
                                                </div>
                                            </div>

                                            @if ($errors->has('name'))
                                                <div class="form-group has-error">
                                                    @else
                                                        <div class="form-group">
                                                            @endif
                                                            <label class="col-sm-4 control-label">Имя или никнейм </label>

                                                            <div class="col-sm-8">
                                                                <input type="text" class="form-control" name="name" placeholder="Иван Иванов" value="{{ old('name') }}">
                                                                @if ($errors->has('name'))
                                                                    <span class="error-message">{{ $errors->first('name') }}</span>
                                                                @endif
                                                                <br>
                                                            </div>
                                                        </div>

                                                        @if ($errors->has('phone'))
                                                            <div class="form-group has-error">
                                                                @else
                                                                    <div class="form-group">
                                                                        @endif
                                                                        <label class="col-sm-4 control-label">Мобильный телефон</label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="register_phone" name="phone" placeholder="+79991234567" value="{{ old('phone') }}">
                                                                            @if ($errors->has('phone'))
                                                                                <span class="error-message">{{ $errors->first('phone') }}</span>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                    <br>

                                                                    @if ($errors->has('is_confirmed'))
                                                                        <div class="form-group has-error">
                                                                            @else
                                                                                <div class="form-group">
                                                                                    @endif
                                                                                    <div class="col-sm-offset-4 col-sm-8">
                                                                                        <div class="checkbox">
                                                                                            <label>
                                                                                                <input type="checkbox" name="is_confirmed" {{ old('is_confirmed') ? 'checked' : '' }}><span class="text-no-error">Согласен на хранение и обработку персональных данных</span></label>
                                                                                            @if ($errors->has('is_confirmed'))
                                                                                                <br><br><span class="error-message">{{ $errors->first('is_confirmed') }}</span>
                                                                                            @endif
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <div class="col-sm-offset-2 col-sm-10">
                                                                                        <button type="submit" class="btn btn-primary">Зарегистрироваться</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                        <button type="reset" class="btn btn-gray">Очистить</button>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="push-down-30">
                                                                                    Уже зарегистрированы? <a href="{{ route('auth.layouts.login') }}" style="cursor: pointer">Войти</a>
                                                                                </div>
                                                                        </div>
                                                            </div>
                                                </div>
                                    </div>
                                </div>
                    </div>

            </form>
        </div>
    </div>
</div>

{{-- <div class="container">--}}
{{--        <div class="row justify-content-center">--}}
{{--            <div class="col-md-8">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-header">{{ __('Register') }}</div>--}}

{{--                    <div class="card-body">--}}
{{--                        <form method="POST" action="{{route('registerPost')}}">--}}
{{--                            @csrf--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>--}}

{{--                                    @if ($errors->has('name'))--}}
{{--                                        <span class="invalid-feedback">--}}
{{--                                        <strong>{{ $errors->first('name') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>--}}

{{--                                    @if ($errors->has('email'))--}}
{{--                                        <span class="invalid-feedback">--}}
{{--                                        <strong>{{ $errors->first('email') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>--}}

{{--                                    @if ($errors->has('password'))--}}
{{--                                        <span class="invalid-feedback">--}}
{{--                                        <strong>{{ $errors->first('password') }}</strong>--}}
{{--                                    </span>--}}
{{--                                    @endif--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row mb-0">--}}
{{--                                <div class="col-md-6 offset-md-4">--}}
{{--                                    <button type="submit" class="btn btn-primary">--}}
{{--                                        {{ __('Register') }}--}}
{{--                                    </button>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
