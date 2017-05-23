@component('mail::message')
# Zgłoszenie ze stronki.

Zgłoszenie ze **stronki**.
Jakiś _nowy_ napis

@component('mail::button', ['url' => 'http://localhost:8000'])
Button Text
@endcomponent

<div>
    Price: {{ $name }}
</div>


Thanks,<br>

{{ config('app.name') }}
@endcomponent
