@extends('layout')

@section('title','Contacto')


@section('contenido')
<div class="container-fluid">
    <div class="jumbotron">
        <h1><u>{{__('Contact')}}</u></h1>
    </div>
    {{-- @if($errors->any())
        @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    @endif  --}}
@include('partials.sessions-status')
    <div class="row justify-content-center">
        <div class="col- col-sm-10 col-lg-6">
            <div class="card">
                <div class="card-header">Dejame tu Mensaje
                </div>
                <form class="bg-white shadow rouded" method="POST"
                action="{{ route('messages.store')}}">
                    {{-- CSRF ES UNA DIRECTIVA DE BLADE
                        PARA ASEGURAR EL FORM  --}}
                    @csrf
                    <div class="form-group py-1 px-2">
                        <label for="name">Apellido y Nombre</label>
                        <input id="name "class="form-control
                            @error('name')is-invalid @enderror" name="name"
                            placeholder="Apellido y Nombre"
                            value="{{old('name')}}">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group py-1 px-2">
                        <label for="email">E-Mail</label>
                        <input id="email" class="form-control
                            @error('email')is-invalid @enderror"
                            type="Email" name="email"
                            placeholder="Email.com"
                            value="{{old('email')}}">
                         @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group py-1 px-2">
                        <label for="subject">Asunto</label>
                        <input id="subject" class="form-control
                            @error('subject')is-invalid @enderror"
                            name="subject"
                            placeholder="Subject...">
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group py-1 px-2">
                        <label for="message">Mensaje</label>
                        <textarea id="message" class="form-control @error('content')is-invalid
                            @enderror"name="content" id="" cols="30" rows="3" placeholder="Message"></textarea>
                        @error('subject')
                            <span class="invalid-feedback" role="alert">
                                <strong> {{ $message }} </strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group px-2">
                        <button  type="submit" class="btn btn-success mb-2 btn-lg btn-block">@lang('Send')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
@endsection