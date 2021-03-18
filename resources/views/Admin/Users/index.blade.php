@extends('Admin.Layout.layout')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                <h3 class="box-title">Tabela de Usuários</h3>
    
                <div class="box-tools">
                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
    
                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Date Criação</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                        @foreach($allUsers as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                            <td>{{ $user->email }}</td>
                            <td><a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a><a href="" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                        </tr>
                        @endforeach
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Date Criação</th>
                            <th>Email</th>
                            <th>Ação</th>
                        </tr>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>

@endsection