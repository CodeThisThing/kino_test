@component('mail::message')
# Introduction

Будьласка підсвердіть Емейл.

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
    Підтвердити
@endcomponent

Дякую,<br>
{{ config('app.name') }}
@endcomponent
