@include("backoffice.layout.header")
@include("backoffice.layout.sidebar")

@include("backoffice.layout.bodyWrap")
<div>{{$user_data->role}}</div>
@yield('content')

@include("backoffice.layout.footer")
