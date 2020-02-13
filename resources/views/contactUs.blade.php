@extends('layout.pageDefault')

@section('title', 'Contact')

<link rel="stylesheet" type="text/css" href="{{ asset('css/contact.css') }}">

@section('content')
<div class="contactContainer">
    <h1>Contactez nous</h1>
    <p>Des questions sur le fonctionnement de Levis pronos ? Une demande d'inscription au VIP ? Un retour ou un avis ? Remplissez ce formulaire pour nous contacter !</p>
    <div class="card">
        <div class="card-body">
            <h2 class="card-title">Formulaire de contact</h2>
            <div class="form">
                <form>
                    <div class="form-group row">
                        <label class="col" for="lastnameInput">Nom :</label>
                        <input type="text" class="form-control col-sm-10" id="lastnameInput" placeholder="Votre nom...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="nameInput">Prénom :</label>
                        <input type="text" class="form-control col-sm-10" id="nameInput" placeholder="Votre prénom...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="mailInput">Email :</label>
                        <input type="email" class="form-control col-sm-10" id="mailInput" placeholder="Votre email...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="subjectInput">Sujet :</label>
                        <input type="text" class="form-control col-sm-10" id="subjectInput" placeholder="Le sujet de votre message...">
                    </div>
                    <div class="form-group textarea">
                        <label for="contentInput">Message :</label>
                        <textarea class="form-control" id="contentInput" placeholder="Votre message..." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <div >
                          <button type="submit" class="btn btn-success formButton">Envoyer votre message</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection