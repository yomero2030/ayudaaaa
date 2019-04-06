<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>      

<form  action="{{asset('palabras')}}" method="post"  enctype="multipart/form-data">
    @csrf
    <input type="file" name="pic" accept="image/*">
  <div class="form-group">
    <label for="palabra_id">palabras</label>
    <select name="palabra_id" id="">
        @foreach($palabra as $pl)
            <option value="{{$pl->id_palabra}}">{{$pl->palabra}}</option>
        @endforeach
    </select>
  </div>
  <div class="form-group form-check">
  </div>
  <button type="submit" class="btn btn-primary">enviar</button>
</form> 
</body>
</html>