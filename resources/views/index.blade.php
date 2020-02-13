@extends('layout.pageDefault')

@section('title', 'Accueil')

<link rel="stylesheet" type="text/css" href="{{ asset('css/homePage.css') }}">

@section('content')
<div class="hp-topContainer">
  <div>
      <h1>Levis Pronos</h1>
      <h2>Lorem ipsum generatum lorum</h2>
  </div>
</div>
<div class="container hp-cardContainer">
  <div class="row hp-row">
    <div class="col card hp-card">
        <img src="https://www.thegoldteamny.com/wp-content/uploads/sites/294/2019/06/logo.png" class="card-img-top hp-card-img"/>
        <div class="card-body">
          <h3 class="card-title">Qui sommes nous ?</h3>
          <p class="card-text">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.          </p>
          <a href="qui-sommes-nous" class="card-link">En savoir plus</a>
        </div>
    </div>
    <div class="col card hp-card">
        <img src="data:image/png;base64,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" class="card-img-top hp-card-img"/>
        <div class="card-body">
          <h3 class="card-title">Nos Pronos</h3>
          <p class="card-text">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
          <a href="pronostiques" class="card-link">En savoir plus</a>
        </div>
    </div>
    <div class="col card hp-card">
        <img src="https://gold.dating/gold.dating/pics/icon_contact.png" class="card-img-top hp-card-img"/>
        <div class="card-body">
          <h3 class="card-title">Nous contactez</h3>
          <p class="card-text">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.       </p>
          <a href="contact" class="card-link">En savoir plus</a>
        </div>
    </div>
  </div>
</div>
<div class="hp-newsletter">
  <div class="newsletterBg"></div>
      <p class="newsletterText">Recevez nos derniers pronostiques : </p>
        <form method="POST">
            @csrf

            <input type="email" id="email" name="email" class="newsletterInput" placeholder="Votre Email..." required/>
        </form>
        <button type="submit" class="newsletterButton btn btn-success">S'inscire</button>
</div>
    <div class="hp-review">
      <h2>Levis prono vu par vous...</h2>
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
            <p class="slideQuote">''</p>
            <p class="slideText">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
            <p class="slideName">Jean Michelin</p>
          </div>
          <div class="carousel-item">
            <p class="slideQuote">''</p>
            <p class="slideText">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
            <p class="slideName">Anne Renaud</p>
          </div>
          <div class="carousel-item">
            <p class="slideQuote">''</p>
            <p class="slideText">Utque aegrum corpus quassari etiam levibus solet offensis, ita animus eius angustus et tener, quicquid increpuisset, ad salutis suae dispendium existimans factum aut cogitatum, insontium caedibus fecit victoriam luctuosam.</p>
            <p class="slideName">Marc Dublé</p>
          </div>
        </div>
      </div>
    </div>
    <div class="hp-social-network">
      <div class="skewBg"></div>
      <h2>Suivez nous sur nos réseaux :</h2>
      <div class="container">
        <div class="row">
          <div class="col socialCol">
            <p>Levis_pronos</p>
            <a href="https://devrant.com/rants/1119754/laravel-is-the-worst-framework-ever-everything-has-to-be-made-convenient-and-eas">
            <img class="socialNetworkIcon" src="https://www.facebook.com/images/fb_icon_325x325.png" />
            </a>
          </div>
          <div class="underlineNetwork"></div>
          <div class="col socialCol">
            <p>@Levispronos</p>
            <a href="https://devrant.com/rants/1119754/laravel-is-the-worst-framework-ever-everything-has-to-be-made-convenient-and-eas">
            <img class="socialNetworkIcon" src="https://ressources.blogdumoderateur.com/2019/11/twitter-logo-1200x1200.jpg" />
            </a>
          </div>
          <div class="underlineNetwork"></div>
          <div class="col socialCol">
            <p>Levis_pronos</p>
            <a href="https://devrant.com/rants/1119754/laravel-is-the-worst-framework-ever-everything-has-to-be-made-convenient-and-eas">
            <img class="socialNetworkIcon" src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/220px-Instagram_logo_2016.svg.png" />
            </a>
          </div>
          <div class="underlineNetwork"></div>
        </div>
      </div>
    </div>
@endsection
