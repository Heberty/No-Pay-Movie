@extends('Admin.Layout.layout')

@section('content')

<section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
            <div class="small-box bg-teal">
                <div class="inner">
                    @inject('usuarios', 'App\User')
                    <h3>{{ $usuarios->count() }}</h3>
                    <p>Usuarios</p>
                </div>
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
                <a href="{{ route('Admin.users.index') }}" class="small-box-footer">Editar <i class="fa fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</section>

@endsection