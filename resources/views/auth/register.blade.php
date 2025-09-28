@extends('layouts.master')

@section('content')
<div class="auth-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="auth-card">
                    <div class="auth-header">
                        <h2>Înregistrare</h2>
                        <p>Creați-vă contul pentru a accesa toate funcționalitățile platformei noastre.</p>
                    </div>

                    <form method="POST" action="{{ route('register') }}" class="auth-form">
                        @csrf

                        <div class="form-group">
                            <label for="name">Numele complet</label>
                            <input id="name"
                                   type="text"
                                   class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   value="{{ old('name') }}"
                                   required
                                   autocomplete="name"
                                   autofocus
                                   placeholder="Introduceți numele și prenumele">

                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Adresa de email</label>
                            <input id="email"
                                   type="email"
                                   class="form-control @error('email') is-invalid @enderror"
                                   name="email"
                                   value="{{ old('email') }}"
                                   required
                                   autocomplete="email"
                                   placeholder="Introduceți adresa dvs. de email">

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Parola</label>
                            <input id="password"
                                   type="password"
                                   class="form-control @error('password') is-invalid @enderror"
                                   name="password"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Alegeți o parolă sigură">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm">Confirmați parola</label>
                            <input id="password-confirm"
                                   type="password"
                                   class="form-control"
                                   name="password_confirmation"
                                   required
                                   autocomplete="new-password"
                                   placeholder="Introduceți din nou parola">
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn-auth">
                                Înregistrare
                            </button>
                        </div>

                        <div class="auth-footer">
                            <p>Aveți deja cont?
                                <a href="{{ route('login') }}">Autentificați-vă aici</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.auth-container {
    min-height: calc(100vh - 140px);
    display: flex;
    align-items: center;
    padding: 40px 0;
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
}

.auth-card {
    background: white;
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 10px 40px rgba(80, 51, 255, 0.1);
    border: 1px solid rgba(80, 51, 255, 0.1);
}

.auth-header {
    text-align: center;
    margin-bottom: 30px;
}

.auth-header h2 {
    color: #333;
    margin-bottom: 10px;
    font-weight: 600;
}

.auth-header p {
    color: #666;
    font-size: 1.6rem;
    margin-bottom: 0;
}

.auth-form .form-group {
    margin-bottom: 20px;
}

.auth-form label {
    display: block;
    margin-bottom: 8px;
    color: #333;
    font-size: 1.6rem;
    font-weight: 500;
}

.auth-form .form-control {
    width: 100%;
    padding: 12px 16px;
    font-size: 1.6rem;
    border: 2px solid #e1e5e9;
    border-radius: 12px;
    background-color: #fff;
    transition: all 0.3s ease;
}

.auth-form .form-control:focus {
    border-color: var(--purple);
    box-shadow: 0 0 0 0.2rem rgba(80, 51, 255, 0.25);
    outline: none;
}

.auth-form .form-control.is-invalid {
    border-color: #dc3545;
}

.auth-form .invalid-feedback {
    display: block;
    width: 100%;
    margin-top: 5px;
    font-size: 1.4rem;
    color: #dc3545;
}

.btn-auth {
    width: 100%;
    padding: 14px 20px;
    font-size: 1.6rem;
    font-weight: 600;
    background: linear-gradient(135deg, var(--purple) 0%, var(--deep-purple) 100%);
    color: white;
    border: none;
    border-radius: 12px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-auth:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(80, 51, 255, 0.3);
}

.auth-footer {
    text-align: center;
    padding-top: 20px;
    border-top: 1px solid #e1e5e9;
    margin-top: 20px;
}

.auth-footer p {
    color: #666;
    font-size: 1.5rem;
    margin-bottom: 0;
}

.auth-footer a {
    color: var(--purple);
    text-decoration: none;
    font-weight: 600;
    transition: color 0.3s ease;
}

.auth-footer a:hover {
    color: var(--deep-purple);
    text-decoration: underline;
}

@media (max-width: 768px) {
    .auth-card {
        margin: 20px;
        padding: 30px 20px;
    }

    .auth-container {
        padding: 20px 0;
    }
}
</style>
@endsection
