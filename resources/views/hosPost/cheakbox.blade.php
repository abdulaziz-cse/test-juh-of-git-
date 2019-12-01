<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  body {
    font-family: Arial;
    font-size: 17px;
    padding: 8px;
  }



  .container {
    background-color: #fff4e3;
    padding: 5px 20px 15px 20px;

    border-radius: 3px;
  }


  .btn {
    background-color: #ffa61c;
    color: white;
    padding: 12px;
    margin: 10px 0;
    border: none;
    width: 70%;
    border-radius: 3px;
    cursor: pointer;
    font-size: 17px;
  }


    .col-25 {
      margin-bottom: 20px;
    }
  }
  </style>



</head>
<body>

<div class="container">
  <h2>Information Patient</h2>
  <p>Information that appears to the donor</p>
  <br>
  <br>
  {!! Form::open(['action'=>[ 'PostController@update', $post->id ], 'method'=>'POST', 'enctype'=>'multipart/form-data' ]) !!}

  <div class="form-group row">
  <label  class="col-md-4 col-form-label text-md-right">{!! Form::label('Name') !!} </label>
  <div class="col-md-6">
    {{ $post->firstname }}
  </div>
</div>

<div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Nationality') !!}</label>
  <div class="col-md-6">
      {{ $post->Nationality }}
    </div>
</div>




<div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Number') !!}</label>
  <div class="col-md-6">
      {{ $post->Number }}
    </div>
</div>

<div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Type  ') !!}</label>
      <div class="col-md-6">
          {{ $post->Type }}
        </div>
  </div>



              <div class="form-group row">
  <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Phone ') !!}</label>
  <div class="col-md-6">
      {{ $post->Phone }}
    </div>
</div>

<div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('city') !!}</label>
      <div class="col-md-6">
          {{ $post->city }}
        </div>
  </div>

  <div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('state') !!}</label>
      <div class="col-md-6">
          {{ $post->state }}
        </div>
  </div>
  
  <div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('zip') !!}</label>
      <div class="col-md-6">
          {{ $post->zip }}
        </div>
  </div>
  <div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Age') !!}</label>
      <div class="col-md-6">
          {{ $post->Age }}
        </div>
  </div>

  <div class="form-group row">
      <label class="col-md-4 col-form-label text-md-right">{!! Form::label('Natonality1') !!}</label>
      <div class="col-md-6">
          {{ $post->Natonality1 }}
        </div>
  </div>


<div class="form-group row mb-0">
<div class="col-md-6 offset-md-4">
{{  Form::hidden('_method' , 'PUT')}}

{!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}
</div>
</div>


{!! Form::close() !!}
</div>

</body>
</html>
