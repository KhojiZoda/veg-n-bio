@extends('front.layout.application-front-head')

@section('content')

  @include("front.header")

  @include("front.sidebar")
  <div class="section-gallery p-t-118 p-b-100">

    <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">

      @foreach($restaurants as $key => $value)
        <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events">
          <div class="text-center">
            {{$value->name}}
          </div>
          <img src="images/photo-gallery-15.jpg" alt="IMG-GALLERY">

          <div class="overlay-item-gallery trans-0-4 flex-c-m">
            <a class="btn-show-gallery flex-c-m" href="restaurants/{{$value->id}}/menu/{{$value->menu_id}}">{{$value->name}}</a>
          </div>
        </div>
        {{-- <tr>
          <td>{{$value->id}}</td>
          <td>{{$value->date_order}}</td>
          <td>{{$value->waiter->first_name.' '.$value->waiter->last_name}}</td>
          <td>{{$value->client->first_name.' '.$value->client->last_name}}</td>
          <td>
            <a href="/admin/order/{{$value->id}}" class="btn btn-outline-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
            <a href="/admin/order/{{$value->id}}/edit" class="btn btn-outline-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
          </td>
        </tr> --}}
      @endforeach

    </div>
  </div>

@endsection
