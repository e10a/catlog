@component('mail::message')
# New Pet: {{ $pet->name }}

The body of your message.

@component('mail::button', ['url' => url('/pets/' . $pet->id)])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
