@extends('layouts.admin_layout')

@section('title')

@endsection

@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>
                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section class="content">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a class="btn btn-primary" href="{{ route('reclamation.index') }}">
                        Back</a></li>
            </ol>

                    <div class="col-md-9">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4 class="card-title">Marwen</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        @csrf


                                                <div class="card card-primary">

                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="inputName">Sujet du reclamation</label>
                                                            <input type="text" id="inputName" class="form-control" value="(sujet du reclamation)" disabled>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputDescription">Continu</label>
                                                            <textarea id="inputDescription" class="form-control" rows="4" disabled>(Contenu du reclamation)</textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="inputStatus">Etat</label>
                                                            <select class="form-control custom-select">
                                                                <option selected="" disabled="">Select one</option>
                                                                <option>Traité</option>
                                                                <option>Non traité</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <!-- /.card-body -->
                                                </div>
                                                <!-- /.card -->



                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


        </section>
    </div>
@endsection
