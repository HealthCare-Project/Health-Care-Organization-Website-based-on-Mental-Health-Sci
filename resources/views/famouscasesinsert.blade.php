<!DOCTYPE html>
<html lang="en">
<head>
  <title>Famouse Cases Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="{{asset('postencyclopedia.css')}}">

</head>
@extends('layout.main') @section('content')

<body style=' background-image: url("medical-1.jpg");'>
<div class="breadcumb-area bg-img bg-gradient-overlay" style="background-image: url(img/bg-img/35.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <h2 class="title">Famouse Cases Encyclopedia </h2>
                </div>
            </div>
        </div>
    </div>

<div  class="container">
  
  <form action = "/create2" method = "post" class="box3"  action="/action_page.php">

  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

    <label class="form-group">Title</label>
    <input type="text" class="form-control" placeholder="title" name="title">
    
  <label>publish_date:</label>
  <input type="date" id="appt" name="publish_date"
       >
  </select>
<label>Content:</label>
    <textarea type="text" class="area" placeholder="content" name="content"></textarea><br>
    <input type = "file" id = "file" accept= "image/*" value = "" required placeholder="feature_image" name="feature_image">
                <label for = "file">
                    <span class = "material-icons">
                        add_photo_alternate
                    </span> &nbsp;
                    Picture
                </label>
    <button type="submit"  value = "Add student" class="btn btn-primary">Post</button>
  </form>
</div>

</body>
</html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title> Post Encyclopedia </title>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="postencyclopedia.css">
    </head>
  @endsection
