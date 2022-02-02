@component('mail::message')
# Introduction


{{$message->body}}

@component('mail::panel')

From: {{$message->name}}
<br>
Email: {{$message->email}}
<br>
Object: {{$message->object}}

@endcomponent

@component('mail::button', ['url' => '$url'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent