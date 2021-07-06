@extends('layouts.admin_layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Marchand</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- /.row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Liste Marchand</h3>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        {{--                                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">--}}

                                        <div class="input-group-append">
                                            {{--                                            <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>--}}

                                            <span class="breadcrumb-item"><a class="btn btn-block bg-gradient-success"
                                                                             href="{{ route('marchand.create') }}">Nouveau</a></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>CIN</th>
                                        <th>Telephone</th>
                                        <th width="280px">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($marchands as $marchand)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            <td>{{$marchand->nom_marchand}}</td>
                                            <td>{{$marchand->prenom_marchand}}</td>
                                            <td>{{$marchand->CIN}}</td>
                                            <td>{{$marchand->tel}}</td>
                                            <td>

                                                <form action="{{ route('marchand.destroy',$marchand->id) }}" method="POST">
                                                    <a class="btn btn-info" href="{{ route('marchand.show',$marchand->id) }}">Show</a>
                                                    <a class="btn btn-primary" href="{{ route('marchand.edit',$marchand->id) }}">Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                </form>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

            </div><!-- /.container-fluid -->
        </section>
    </div>
        {{--<div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2>Users Management</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
                </div>
            </div>
        </div>--}}


        {{--


        <table class="table table-bordered">
              <tr>
                  <th>No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Roles</th>
                  <th width="280px">Action</th>
              </tr>
              @foreach ($data as $key => $user)
                  <tr>
                      <td>{{ ++$i }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>
                          @if(!empty($user->getRoleNames()))
                              @foreach($user->getRoleNames() as $v)
                                  <label class="badge badge-success">{{ $v }}</label>
                              @endforeach
                          @endif
                      </td>
                      <td>
                          <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
                          <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                          {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
                          {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                          {!! Form::close() !!}
                      </td>
                  </tr>
              @endforeach
          </table>


          {!! $data->render() !!}--}}
{{--        {!! $data->render() !!}--}}

@endsection
