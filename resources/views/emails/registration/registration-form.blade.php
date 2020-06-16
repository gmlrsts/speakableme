@component('mail::message')
# Introduction

Here is the form attached which you'll need to fill it out first to be our Teacher.


@component('mail::button', ['url' => ''])
Register as our teacher
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
