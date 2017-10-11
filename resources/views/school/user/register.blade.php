@extends('school.template.template')

@section('content')
    <section class="pg-form">

        <h1 class="title">Cadastre-se</h1>

        {{Form::open(['route'=>'new-user', 'class'=>'form-horizontal', 'files'=> true ])}}

            @include('school.user.form')

        {{Form::close()}}

    </section>
@endsection
