@component('mail::message')
#Thank For Your Response!!
#We Have Noticed Your Response.
<strong>Name</strong>{{$data['name']}}

<strong>Email</strong>{{$data['email']}}

<strong>Message</strong>
{{$data['message']}}

#@Team Thaksalawa.

@endcomponent
