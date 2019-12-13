@extends('master')
@section('content')

<div class="main main-raised mt-4">
    <div class="container">

      	<a href="{{url('/createusaha')}}" class="btn btn-success mt-4">Create</a>

	<table class="table mt-4">
  <thead class="">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama Usaha</th>

      <th scope="col">Foto</th>
      <th scope="col">Modal Usaha</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($usaha as $usahanya)
    <tr>
      <th scope="row">1</th>
      <td>{{$usahanya->nama}}</td>
        <td><img src="{{asset('usaha/'.$usahanya->foto)}}" widht="100px" height="100px" alt=""></td>
      
      <td>{{$usahanya->modal_id}}</td>
      <td>
      	<a href="" class="btn btn-success">update</a>

                                                    <form action="{{url('usaha/'.$usahanya->id.'/delete')}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}        
                                                   
                                      <input type="submit" name="" value="DELETE" class="btn btn-danger btn-xs"  onclick="return confirm('yakin mau dihapus.?')">
                                                    </form>  

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

    </div>
</div>

@endsection