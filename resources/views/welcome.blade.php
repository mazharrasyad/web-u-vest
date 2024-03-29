@extends('master')

@section('content')
    @include('layouts.banner')
   <div class="main main-raised">
    <div class="container">
      <div class="section text-center">

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">U-VEST</h2>
            <h5 class="description">Ini deskripsi...</h5>
          </div>
        </div>

        <div class="features">
          <div class="row">

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-info">
                  <i class="material-icons">chat</i>
                </div>
                <h4 class="info-title">Murah</h4>
                <p>Ini deskripsi...</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-success">
                  <i class="material-icons">verified_user</i>
                </div>
                <h4 class="info-title">Aman</h4>
                <p>Ini deskripsi...</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="info">
                <div class="icon icon-danger">
                  <i class="material-icons">fingerprint</i>
                </div>
                <h4 class="info-title">Profitable</h4>
                <p>Ini deskripsi...</p>
              </div>
            </div>

          </div>
        </div>
      </div>

        <div class="row text-center mb-4">
            <div class="col-md-8 ml-auto mr-auto">
              <h2 class="title">Komoditas</h2>
            </div>
        </div>

        <div class="row mb-4">
        <?php $count = 0; ?>               

@foreach($usaha as $usahanya)
        <?php $count++ ?>
        @if($count <= 4)
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-text card-header-primary">
                    <div class="card-text">
                    <h4 class="card-title">{{$usahanya->nama}}</h4>
                    </div>
                </div>
                <div class="card-body">
                <img src="{{asset('/usaha/'.$usahanya->foto )}}" width="100px" height="200px" alt="">
                <br>
               		Jumlah saham : {{$usahanya->modal['jumlahsaham']}}
               		<br>
               		Harga saham : {{$usahanya->modal['hargasaham']}}
               		<br>Sisa saham : {{$usahanya->modal['sisasaham']}}
               		<br>Durasi : {{$usahanya->modal['durasijual']}}
               		<br>R O I : {{$usahanya->modal['roi']}}
               		<br>	
                </div>
            </div>
        </div>
        @else

        @endif
@endforeach
        
        </div>
        </div>

        </div>

    </div>
  </div>
@endsection