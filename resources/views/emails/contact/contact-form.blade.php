@component('mail::message')
# Bonjour

Vous avez un mail de la part de {{ $data['name'] }} ({{ $data['email'] }})

Message
{{ $data['message']  }}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
