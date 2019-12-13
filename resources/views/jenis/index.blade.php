@extends('master')
@section('content')



      	<a href="{{url('/createjenis')}}" class="btn btn-success">Create</a>

	<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($jenisnya as $jenis)
    <tr>
      <th scope="row">1</th>
      <td>{{$jenis->nama}}</td>
      <td>
      	<a href="" class="btn btn-success">update</a>

                                                    <form action="{{url('jenis/'.$jenis->id.'/delete')}}" method="POST" enctype="multipart/form-data">
                                                {{csrf_field()}}
                                                {{method_field('DELETE')}}        
                                                   
                                      <input type="submit" name="" value="DELETE" class="btn btn-danger btn-xs"  onclick="return confirm('yakin mau dihapus.?')">
                                                    </form>  

      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection