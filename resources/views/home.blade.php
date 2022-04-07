@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-ellipsis-v"></i>&nbsp;<b>{{ __('Forseti_soluções') }}</b>
                    <a href="javascript:history.back()"><img src='imgs/sistema/remove.png' alt='Fecha Janela' class="top-right links" align="right"/></a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('auth.admin')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
