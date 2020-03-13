@component('mail::message')
    Un nouveau message de la part d'un client

    Nom : {{ $message->lastname }}
    Prénom : {{ $message->firstname }}
    Adresse Email : {{ $message->email }}

    Sujet du message : {{ $message->subject }}

    Contenu du message : {{ $message->content }}
@endcomponent
