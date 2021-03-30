@component('mail::message')
    ## Contact Form
@component('mail::panel')
    <p><strong>Name: </strong>{{$name}}</p>
    <p><strong>Email: </strong>{{$email}}</p>
    <p><strong>Subject: </strong>{{$subject}}</p>
    <p><strong>Message: </strong>{{$message}}</p>
@endcomponent
@endcomponent
