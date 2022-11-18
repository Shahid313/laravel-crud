<html>
    <head>
        <title>Laravel Crud</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>
    <body>
    <div class="container pt-5">
        <h1 class="mb-3">Edit Category</h1>

        <form method="POST" action="/update-category/{{$category->id}}">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Category title</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="title" value="{{$category->title}}" placeholder="Enter category title">
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
</form>
</div>
    </body>
</html>