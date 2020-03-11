@extends('layout.pageDefault')

@section('title', 'Zone Administrateur')

@push('style')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/index.css') }}">
@endpush

@section('content')
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        Launch demo modal
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">Ajouter un paris</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    $table->bigIncrements('id');
                    $table->string('sport');
                    $table->date('date_match');
                    $table->integer('status')->default(0);
                    $table->string('team_1');
                    $table->string('team_2');
                    $table->string('prono');
                    $table->string('cote');
                    $table->date('create_at');

                    <form>

                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Sport</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>Football</option>
                                <option>Basket</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Equipe à domicile : </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="PSG">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Equipe à l'extérieur : </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Dortmund">
                        </div>

                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Equipe 1">
                            <label class="form-check-label" for="inlineCheckbox1">1</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Nul">
                            <label class="form-check-label" for="inlineCheckbox2">2</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Equipe 2" disabled>
                            <label class="form-check-label" for="inlineCheckbox3">3 (disabled)</label>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Cote : </label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="2.18">
                        </div>
                    </form>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

@endSection
