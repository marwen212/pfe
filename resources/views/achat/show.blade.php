@extends('layouts.admin_layout')

@section('title')
    Profile
@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a class="btn btn-primary" href="{{ route('achat.index') }}">
                                    Back</a></li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <div class="">
                <div class="row">
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header">
                                <h4>Detail Achat</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Nom Commercant</label>
                                                    <input type="text" name="nom" value="{{$achat->marchand->nom_marchand}}"
                                                           class="form-control" placeholder="Nom" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Prenom Commercant</label>
                                                    <input type="text" name="nom" value="{{$achat->marchand->prenom_marchand}}"
                                                           class="form-control" placeholder="Nom" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="exampleInputName1">Montant</label>
                                                    <input type="text" name="nom" value="{{$achat->montant}}"
                                                           class="form-control" placeholder="Nom" disabled>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
