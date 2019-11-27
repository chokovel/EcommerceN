@component('mail::message')

#Thank you for contacting us!

<strong>Name</strong> {{ $data['name']}}

<strong>Email</strong> {{ $data['email']}}

<strong>Subject</strong> {{ $data['subject']}}

<strong>Message</strong> 

{{ $data['message']}}

@endcomponent