@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Editer</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a class="btn btn-primary" href="{{ route('personne.index') }}">
                                    Back</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <section class="content">
            <div class="container-fluid">
                <!-- left column -->
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Editer</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                            {!! Form::model($personne, ['method' => 'PATCH','route' => ['personne.update', $personne->id]]) !!}

                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName1">Nom</label>
                                {!! Form::text('nom', null, array('placeholder' => 'Nom','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">prenom</label>
                                {!! Form::text('prenom', null, array('placeholder' => 'prenom','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">CIN</label>
                                {!! Form::number('CIN',null, array('placeholder' => 'CIN','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Date de Naissance</label>
                                {!! Form::date('date_naiss',null, array('placeholder' => 'Date de Naissance','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Numero Telephone</label>
                                {!! Form::number('tel',null, array('placeholder' => 'Your phone number','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Adresse</label>
                                {!! Form::text('adresse', null, array('placeholder' => 'adresse','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Situation Familiale</label>
                                {!! Form::text('Situation_Fam', null, array('placeholder' => 'Situation Familiale','class' => 'form-control','required'=>'')) !!}
                            </div>
                            <div class="form-group">
                                <label for="exampleInputNumber1">Nombre d'enfant</label>
                                {!! Form::number('nb_enfants',null, array('placeholder' => 'Nombre enfant','class' => 'form-control','required'=>'')) !!}
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </section>
    </div>


{{--<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>--}}




@endsection
