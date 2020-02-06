@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text {{ $price }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
