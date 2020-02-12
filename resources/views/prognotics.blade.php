@extends('layout.pageDefault')

@section('title', 'Nos pronostiques')

@section('content')
{{--    Titre de la page --}}
    <h1 class="nav justify-content-center" style="margin-top: 15px;margin-bottom: 50px">Nos pronostiques</h1>

{{--Présentation des nouveau paris --}}
<div style="background: #fafafa;padding-top: 20px;">
<h3 style="text-align: center;" >Nos derniers pronos &nbsp;&nbsp;&nbsp;&nbsp;<span class="badge badge-secondary">Nouveauté</span></h3>
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
{{--        Slide 1--}}
        <div class="carousel-item active">
            <div class="container" style="padding: 15px; text-align: center">
                <h5 style="margin-bottom: 10px;"> Catégorie Football :</h5>
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="carousel-item">
{{--Slide 2--}}
            <div class="container" style="padding: 15px; text-align: center">
                <h5 style="margin-bottom: 10px;"> Catégorie Basket :</h5>
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{--        Slide 3--}}
        <div class="carousel-item">
            <div class="container" style="padding: 15px; text-align: center">
                <h5 style="margin-bottom: 10px;"> Catégorie Tennis :</h5>
                <div class="row">
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>

                    </div>
                    <div class="col">
                        <div class="card text-white bg-secondary mb-3" style="">
                            <div class="card-header">01/02/2020</div>
                            <div class="card-body">
                                <p class="card-text">FC LORIENT - LE MANS </p>
                                <p class="card-text">Pronostique : FC LORIENT </p>
                                <p class="card-text">Cote :  2.15</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précdent</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
    </a>
</div>
</div>
</div>

{{--Tableau code couleur des paris précedents--}}
<fieldset class="border p-2" style="margin-bottom: 10px">
    <legend  class="w-auto">Annalyser nos résultats : </legend>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class=" card text-white bg-secondary mb-3" style="text-align: center">
                    En cours
                </div>
            </div>
            <div class="col">
                <div class=" card text-white bg-success mb-3" style="text-align: center">
                    Validé
                </div>
            </div>
            <div class="col">
                <div class=" card text-white bg-warning mb-3" style="text-align: center">
                    Perdu
                </div>
            </div>
        </div>
    </div>
</fieldset>

{{--    Tableau des précedents pronostiques--}}
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
        <div class="tab-pane fade" id="basket" role="tabpanel" aria-labelledby="basket-tab">
            <div class="container">
            <div class="row">
                <div class="col">

                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>
                </div>
            </div>            <div class="row">
                <div class="col">

                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>
                </div>
            </div>            <div class="row">
                <div class="col">

                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>

                </div>
                <div class="col">
                    <div class="card text-white bg-success mb-3" style="">
                        <div class="card-header">01/02/2020</div>
                        <div class="card-body">
                            <p class="card-text">FC LORIENT - LE MANS </p>
                            <p class="card-text">Pronostique : FC LORIENT </p>
                            <p class="card-text">Cote :  2.15</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tennis" role="tabpanel" aria-labelledby="tennis-tab">aaaaaaaaaaaaaaaaaaaaaaaaaaaaaa..</div>
    </div>
@endsection

