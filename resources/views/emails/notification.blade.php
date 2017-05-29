@component('mail::message')
# Zgłoszenie ze stronki.

Zgłoszenie ze **stronki**.
Jakiś _nowy_ napis

Numer komputera: **_Desktop{{ $desktopNr }}_** <br>


Wysłane przez: **_{{$email}}_**


Wiadomość: **_{{$message}}_**

@component('mail::button', ['url' => 'http://localhost:8000'])
Button Text
@endcomponent






Thanks,<br>

{{ config('app.name') }}
@endcomponent
