@extends('layout.pageDefault')

@section('content')
<div class="container" style="margin: 5% auto 10% auto">
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
                    Vous êtes désormais connecté ! Vous allez être re-dirigé automatiquement vers la zone administrateur
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var obj = 'window.location.replace("admin");';
        setTimeout(obj,1000);
    </script>

</div>
@endsection
