<h1>Hello {{$user->first_name}} </h1>

<p>
  Please click the following link to Activate your Account  ,

  <a href="{{env('APP_URL')}}/activate/{{$user->email}}/{{$code}}"> Activate Account </a>

</p>
