@extends('front.layout.application-front-head')

@section('content')

  @include("front.header")

  @include("front.sidebar")

  <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15" style="background-image: url({{asset('/images/bg-title-page-02.jpg')}});">
    <h2 class="tit6 t-center">
      Reservation
    </h2>
  </section>
  <div class="section-gallery col-md-12">

    <div class="wrap-gallery isotope-grid flex-w p-l-25 p-r-25">

      <section class="section-reservation bg1-pattern col-md-12">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12 p-b-30">
    					<div class="t-center">
    						<span class="tit2 t-center">
    							Reservation
    						</span>

    					</div>
              {{ Form::open(array('route' => 'reservation.create', 'class'=>'wrap-form-reservation size22 m-l-r-auto')) }}
                {{ Html::ul($errors->all()) }}
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
    						<div class="row">
    							<div class="col-md-4">
    								<!-- Date -->

                    <div class="form-group">
                        {{ Form::label('reservation_date', 'Date') }}
                        <div class="wrap-inputdate pos-relative txt10 size12 bo2 bo-rad-10 m-t-3 m-b-23">

                          {{ Form::text('reservation_date', Input::old('reservation_date'), array('class' => 'bo-rad-10 sizefull txt10 p-l-20', 'placeholder'=>'AAAA-MM-JJ')) }}
                        </div>

                    </div>


    							</div>

    							<div class="col-md-4">
    								<!-- Time -->
    								<span class="txt9">
    									L'heure
    								</span>

    								<div class="wrap-inputtime size12 bo2 bo-rad-10 m-t-3 m-b-23">
    									<!-- Select2 -->
    									<select class="selection-1" name="time">
    										<option>9:00</option>
    										<option>9:30</option>
    										<option>10:00</option>
    										<option>10:30</option>
    										<option>11:00</option>
    										<option>11:30</option>
    										<option>12:00</option>
    										<option>12:30</option>
    										<option>13:00</option>
    										<option>13:30</option>
    										<option>14:00</option>
    										<option>14:30</option>
    										<option>15:00</option>
    										<option>15:30</option>
    										<option>16:00</option>
    										<option>16:30</option>
    										<option>17:00</option>
    										<option>17:30</option>
    										<option>18:00</option>
    									</select>
    								</div>
    							</div>

    							<div class="col-md-4">
    								<!-- People -->
    								<span class="txt9">
    									Nombre de personne
    								</span>

    								<div class="wrap-inputpeople size12 bo2 bo-rad-10 m-t-3 m-b-23">
    									<!-- Select2 -->
    									<select class="selection-1" name="nb_of_people">
    										<option value="1">1 personne</option>
    										<option value="2">2 personne(s)</option>
    										<option value="3">3 personne(s)</option>
    										<option value="4">4 personne(s)</option>
    										<option value="5">5 personne(s)</option>
    										<option value="6">6 personne(s)</option>
    										<option value="7">7 personne(s)</option>
    										<option value="8">8 personne(s)</option>
    										<option value="9">9 personne(s)</option>
    										<option value="10">10 personne(s)</option>
    										<option value="11">11 personne(s)</option>
    										<option value="12">12 personne(s)</option>
    									</select>
    								</div>
    							</div>
    						</div>

    						<div class="row">
    							<div class="col-md-4">
                    <div class="form-group">
                        {{ Form::label('reservator', 'Nom') }}
                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">

                          {{ Form::text('reservator', Input::old('email'), array('class' => 'bo-rad-10 sizefull txt10 p-l-20')) }}
                        </div>
                    </div>
    							</div>

    							<div class="col-md-4">
    								<!-- Email -->
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        <div class="wrap-inputemail size12 bo2 bo-rad-10 m-t-3 m-b-23">

                          {{ Form::text('email', Input::old('email'), array('class' => 'bo-rad-10 sizefull txt10 p-l-20')) }}
                        </div>
                    </div>
    							</div>

    						</div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      {{ Form::label('restaurant_id', 'Restaurants') }}
                      <select name="restaurant_id" class="form-control">
                        @foreach ($restaurants as $restaurant)
                          <option value="{{$restaurant->id}}">{{$restaurant->name}}</option>
                        @endforeach
                      </select>
                    </div>
                  </div>
                </div>

    						<div class="wrap-btn-booking flex-c-m m-t-6">
    							<!-- Button3 -->
                  {{ Form::submit('Soumettre', array('class' => 'btn btn-outline-primary')) }}

    						</div>
                {{ Form::close() }}
    				</div>
    			</div>

    			<div class="info-reservation flex-w p-t-80">
    				<div class="size23 w-full-md p-t-40 p-r-30 p-r-0-md">
    					<h4 class="txt5 m-b-18">
    						Reserve by Phone
    					</h4>

    					<p class="size25">
    						Donec quis euismod purus. Donec feugiat ligula rhoncus, varius nisl sed, tincidunt lectus.
    						<span class="txt25">Nulla vulputate</span>
    						, lectus vel volutpat efficitur, orci
    						<span class="txt25">lacus sodales</span>
    						 sem, sit amet quam:
    						<span class="txt24">(001) 345 6889</span>
    					</p>
    				</div>

    				<div class="size24 w-full-md p-t-40">
    					<h4 class="txt5 m-b-18">
    						For Event Booking
    					</h4>

    					<p class="size26">
    						Donec feugiat ligula rhoncus:
    						<span class="txt24">(001) 345 6889</span>
    						, varius nisl sed, tinci-dunt lectus sodales sem.
    					</p>
    				</div>

    			</div>
    		</div>
    	</section>

    </div>
  </div>

@endsection
