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
                <form method="POST" >
                    @csrf
                    <div class="form-group row">
                        <label class="col" for="lastname">Nom :</label>
                        <input type="text" class="form-control col-sm-10" id="lastname" name="lastname" value="gdd" placeholder="Votre nom...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="name">Prénom :</label>
                        <input type="text" class="form-control col-sm-10" id="name" name="firstname" value="dhgfhdshj" placeholder="Votre prénom...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="email">Email :</label>
                        <input type="email" class="form-control col-sm-10" id="email" value="ndsjhjhdfshf@ghdhhjd" name="email" placeholder="Votre email...">
                    </div>
                    <div class="form-group row">
                        <label class="col" for="subject">Sujet :</label>
                        <input type="text" class="form-control col-sm-10" id="subject" value="bdsbdjdf" name="subject" placeholder="Le sujet de votre message...">
                    </div>
                    <div class="form-group textarea">
                        <label for="content">Message :</label>
                        <textarea class="form-control" id="content" name="content" placeholder="Votre message..." rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <div >
                          <button type="submit" class="btn btn-success formButton">Envoyer votre message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endSection
