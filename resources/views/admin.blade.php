@extends('layout.pageDefault')

@section('title', 'Zone Administrateur')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/admin.css') }}">
@endpush

@section('content')
<div class="mainContainer" style="text-align: center">

    @if($status ?? '' && $status ?? '' === 200)
        <div class="alert alert-success" role="alert">
            Le contenu a bien été enregistré. Vous pouvez désormais le consulter !
        </div>
    @endif
    <h2>Bienvenue dans la zone Administrateur</h2>

    <div class="buttonContainer">
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addPronos">
                    Ajouter un prono
                </button>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArticle">
                    Ajouter un article
                </button>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="addPronos" tabindex="-1" role="dialog" aria-labelledby="addPronos" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter un paris</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" enctype="multipart/form-data" action="admin-add-pronos">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="sport">Sport</label>
                            <select class="form-control" id="sport" name="sport">
                                <option>Football</option>
                                <option>Basket</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="date_match">Date du match :</label>
                            <input type="date" class="form-control" id="date_match" name="date_match">
                        </div>

                        <div class="form-group">
                            <label for="team_1">Equipe à domicile : </label>
                            <input type="text" class="form-control" id="team_1" name="team_1" placeholder="PSG">
                        </div>

                        <div class="form-group">
                            <label for="team_2">Equipe à l'extérieur : </label>
                            <input type="text" class="form-control" id="team_2" name="team_2" placeholder="Dortmund">
                        </div>

                        <div style="text-align: center;margin-bottom: 2%">
                            <h6 style="margin-bottom: 3%;margin-top: 2%">Pronostique du match</h6>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prono" id="prono1" value="1">
                                <label class="form-check-label" for="prono1">Equipe à domicile</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prono" id="prono2" value="2">
                                <label class="form-check-label" for="prono2">Match nul</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="prono" id="prono3" value="3">
                                <label class="form-check-label" for="prono3">Equipe à extérieur</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="cote">Cote : </label>
                            <input type="text" class="form-control" id="cote" name="cote" placeholder="2.18">
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

        <!-- Modal -->
        <div class="modal fade bd-example-modal-lg" id="addArticle" tabindex="-1" role="dialog" aria-labelledby="addArticle" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter un article</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" enctype="multipart/form-data" action="admin-add-article">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="title">Titre de l'article :</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>

                            <div class="form-group">
                                <label for="url_img_article">Url de l'image de présentation :</label>
                                <input type="text" class="form-control" id="url_img_article" name="url_img_article">
                            </div>

                            <div class="form-group">
                                <label for="category">Catégorie de l'article :</label>
                                <input type="text" class="form-control" id="category" name="category">
                            </div>

                            <div class="form-group">
                                <label for="content">Contenu de l'article :</label>
                                <textarea style="height: 120%" class="form-control" id="content" name="content"></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endSection
