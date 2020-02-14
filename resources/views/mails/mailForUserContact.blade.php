@component('mail::message')
    Bonjour {{ $message->firstname }} {{ $message->lastname }},

    Votre demande de contact à bien été transmise à nos équipes !

    A bientôt !
@endcomponent
