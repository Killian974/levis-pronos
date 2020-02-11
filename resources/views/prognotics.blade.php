@extends('layout.pageDefault')

@section('title', 'Nos pronostiques')

@section('pageTitle')
        <h1 class="nav justify-content-center" style="margin-top: 15px;margin-bottom: 15px">Nos pronostiques</h1>
@endsection
@section('tab')
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#football" role="tab" aria-controls="football" aria-selected="true">Football</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#basket" role="tab" aria-controls="basket" aria-selected="false">Basket</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#tennis" role="tab" aria-controls="tennis" aria-selected="false">Tennis</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="football" role="tabpanel" aria-labelledby="home-tab">

            <div class="card text-white bg-success mb-3" style="">
                <div class="card-header">01/02/2020</div>
                <div class="card-body">
                    <p class="card-text">FC LORIENT - LE MANS </p>
                    <p class="card-text">Pronostique : FC LORIENT </p>
                    <p class="card-text">Cote :  2.15</p>
                </div>
            </div>
            <div class="card text-white bg-warning  mb-3" style="">
                <div class="card-header">01/02/2020</div>
                <div class="card-body">
                    <p class="card-text">FC LORIENT - LE MANS </p>
                    <p class="card-text">Pronostique : FC LORIENT </p>
                    <p class="card-text">Cote :  2.15</p>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="">
                <div class="card-header">01/02/2020</div>
                <div class="card-body">
                    <p class="card-text">FC LORIENT - LE MANS </p>
                    <p class="card-text">Pronostique : FC LORIENT </p>
                    <p class="card-text">Cote :  2.15</p>
                </div>
            </div>

            <div class="card text-white bg-success mb-3" style="">
                <div class="card-header">01/02/2020</div>
                <div class="card-body">
                    <p class="card-text">FC LORIENT - LE MANS </p>
                    <p class="card-text">Pronostique : FC LORIENT </p>
                    <p class="card-text">Cote :  2.15</p>
                </div>
            </div>

        </div>
        <div class="tab-pane fade" id="basket" role="tabpanel" aria-labelledby="basket-tab">ddd</div>
        <div class="tab-pane fade" id="tennis" role="tabpanel" aria-labelledby="tennis-tab">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa..</div>
    </div>
@endsection
