@extends('layout.pageDefault')

@section('content')
<div style="margin: 5% auto" class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Vous êtes connecté !
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
