@extends('school.template.template')

@section('content')

    <div class="form-search">

        {{Form::open(['route'=>'teacher.courses.search', 'class' => 'form form-inline'])}}
        {{Form::text('key-search', null, ['placeholder'=>'Digite um nome:', 'class'=>'form-control'])}}

        <input type="submit" value="Pesquisar" class="btn btn-search">
        {{Form::close()}}

    </div>

    <h1 class="title">{{$title}}</h1>

    <div class="courses">
        @foreach($cursos as $curso)
            <article class="col-md-3 col-sm-6 col-xm-12">
                <div class="course">
                    <img src="{{url("uploads/courses/{$curso->image}")}}" alt="{{$curso->name}}">
                    <h2 class="title-course">
                        {{$curso->name}}
                    </h2>
                    <a href="" class="btn-view">Saiba Mais</a>
                </div>
            </article>
        @endforeach

    </div><!--Courses-->

    <div class="pag">
        {!! $cursos->links() !!}
    </div><!--Paginação-->


@endsection