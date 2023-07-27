@component('mail::message')

Hello {{$user->name}},

<p>We actually understand what happened</p>

@component('mail::button', ['url'=> url('reset/'. $user->remember_token)])
Reset your Password
@endcomponent
    
<p>Incase you encounter any problem resetting your password, please do well to contact us.</p>
Thanks,<br>
{{ config('app.name') }}
@endcomponent