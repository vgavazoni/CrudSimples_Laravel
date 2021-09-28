@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifique seu endereço de email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Um link de verificação foi enviado ao seu email.') }}
                        </div>
                    @endif

                    {{ __('Antes de prosseguir, check o link de verificação no seu email.') }}
                    {{ __('Se você não recebeu o link') }}, <a href="{{ route('verification.resend') }}">{{ __('clique aqui para enviarmos outro.') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
