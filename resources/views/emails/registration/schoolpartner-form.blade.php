@component('mail::message')
# Introduction

Here is the form attached which you'll need to fill it out first to be our School Partner.


@component('mail::button', ['url' => ''])
Register as our partner
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
