

@foreach ($users  as $user)

Email: {{$user->email}} <br>
Pass : {{$user->password}} <br>
country : {{$user->country}} <br>
ip : {{$user->ip}} <br>
_________________________________ <br>
@endforeach
