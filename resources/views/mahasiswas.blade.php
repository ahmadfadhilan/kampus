@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" align="right">
                    <a  href="{{ route('mahasiswa.excel') }}" class="btn btn-success">Export to Excel</a>
                </div>
                <div class="card-body">
                  Daftar Jumlah Mahasiwa:
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['url' => 'mahasiswas','class' => 'ajax']) !!}
                      {!! Form::select('jlrmsk',$jalur,null,['placeholder'=>'Pilih Jalur Masuk ...'])!!}
                      {!! Form::submit('Click Me!')!!}
                    {!! Form::close() !!}

                    <?php
                      if(isset($_POST['jlrmsk'])){
                    ?>

                    <table border="1" cellpadding="10">
                        <tr>
                          <th>NIM</th>
                          <th>Nama</th>
                          <th>Jurusan</th>
                          <th>Action</th>
                        </tr>
                        @foreach($query as $query)
                        <tr>
                            <td>{{$query ->mhsNiu}}</td>
                            <td>{{$query ->mhsNama}}</td>
                            <td>{{$query ->mhsProdiKode}}</td>
                          <td></td>
                      </tr>
                      @endforeach
                    </table>
                    <?php  }?>

                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js">  </script>
<!-- <script>
  $('form.ajax').on('submit',function(){
    var that = $(this),
        url = that.attr('action'),
        type = that.attr('method'),
        data = {};

    that.find('[year]').each(function(index, value){
      var that = $(this),
          year = that.attr('year'),
          value = that.val();

      data[year] = value;
    });

    $.ajax({
        url = url,
        type = type,
        data = data,
        success: function(response){
          console.log(response);
        }
    });
    return false;
  });
</script> -->
@endsection
