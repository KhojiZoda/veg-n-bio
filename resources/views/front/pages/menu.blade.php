@extends('front.layout.application-front-head')

@section('content')
  @include("front.header")

  @include("front.sidebar")

  <!-- Title Page -->
	<section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('/images/bg-title-page-01.jpg')}});">
		<h2 class="tit6 t-center">
			Pato Menu
		</h2>
	</section>


	<!-- Main menu -->
	<section class="section-mainmenu p-t-110 p-b-70 bg1-pattern">
		<div class="container">
			<div class="row">
				<div class="col-md-10 col-lg-6 p-r-35 p-r-15-lg m-l-r-auto">
              <div class="wrap-item-mainmenu p-b-22">
                <h3 class="tit-mainmenu tit10 p-b-25">
                  STARTERS
                </h3>
                @foreach ($menu as $men)
                  @if ($men->meal->type=="starter")
                    <!-- Item mainmenu -->
                    <div class="item-mainmenu m-b-36">
                      <div class="flex-w flex-b m-b-3">
                        <a href="#" class="name-item-mainmenu txt21">
                          {{$men->meal->name}}
                        </a>

                        <div class="line-item-mainmenu bg3-pattern"></div>

                        <div class="price-item-mainmenu txt22">
                          {{$men->meal->price}}€
                        </div>
                      </div>

                      <span class="info-item-mainmenu txt23">

                      </span>
                    </div>
                  @endif
                @endforeach
              </div>
              <div class="wrap-item-mainmenu p-b-22">
                <h3 class="tit-mainmenu tit10 p-b-25">
                  Drinks
                </h3>
                @foreach ($menu as $men)

                  @if ($men->meal->type=="drink")
                    <!-- Item mainmenu -->
                    <div class="item-mainmenu m-b-36">
                      <div class="flex-w flex-b m-b-3">
                        <a href="#" class="name-item-mainmenu txt21">
                          {{$men->meal->name}}
                        </a>

                        <div class="line-item-mainmenu bg3-pattern"></div>

                        <div class="price-item-mainmenu txt22">
                          {{$men->meal->price}}€
                        </div>
                      </div>

                      <span class="info-item-mainmenu txt23">

                      </span>
                    </div>
                  @endif
                @endforeach
              </div>
				</div>
        <div class="col-md-10 col-lg-6 p-l-35 p-l-15-lg m-l-r-auto">
            <div class="wrap-item-mainmenu p-b-22">
              <h3 class="tit-mainmenu tit10 p-b-25">
                Main
              </h3>

              @foreach ($menu as $men)
                @if ($men->meal->type=="main")
                  <!-- Item mainmenu -->
                  <div class="item-mainmenu m-b-36">
                    <div class="flex-w flex-b m-b-3">
                      <a href="#" class="name-item-mainmenu txt21">
                        {{$men->meal->name}}
                      </a>

                      <div class="line-item-mainmenu bg3-pattern"></div>

                      <div class="price-item-mainmenu txt22">
                        {{$men->meal->price}}€
                      </div>
                    </div>

                    <span class="info-item-mainmenu txt23">
                      Proin lacinia nisl ut ultricies posuere nulla
                    </span>
                  </div>
                @endif
              @endforeach
            </div>
            <div class="wrap-item-mainmenu p-b-22">
              <h3 class="tit-mainmenu tit10 p-b-25">
                Dessert
              </h3>
              @foreach ($menu as $men)
                @if ($men->meal->type=="dessert")
                  <!-- Item mainmenu -->
                  <div class="item-mainmenu m-b-36">
                    <div class="flex-w flex-b m-b-3">
                      <a href="#" class="name-item-mainmenu txt21">
                        {{$men->meal->name}}
                      </a>

                      <div class="line-item-mainmenu bg3-pattern"></div>

                      <div class="price-item-mainmenu txt22">
                        {{$men->meal->price}}€
                      </div>
                    </div>

                    <span class="info-item-mainmenu txt23">
                    </span>
                  </div>
                @endif
              @endforeach
            </div>
				</div>
			</div>
		</div>
	</section>

@endsection
