<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add a book!</title>
</head>
<body>
    
    <form style="width:40%;margin-left:auto;display:block;margin-right:auto;vertical-align: middle;margin-top:200px;" 
            method="POST" action="{{route('book.submit')}}">
            @csrf
        <div class="form-group">
          <label for="titleBookInput">Book title:</label>
        <span style="color: red;">@error('title'){{"The book must have a title!"}}@enderror</span>
          <input type="text" class="form-control" id="titleBookInput" name="title">
        </div>
        <div class="form-group">
          <label for="nameAuthorInput">Author Name:</label>
        <span style="color: red;">@error('author'){{"The book must have an author!"}}@enderror</span>
          <input type="text" class="form-control" id="nameAuthorInput" name="author">
        </div>
        <p>Have you read it?</p>
        <div class="form-group form-check">
          <input type="radio" class="form-check-input" id="answer1" name="status" value="1">
          <label class="form-check-label" for="answer1">Yes</label>
            <br>
          <input type="radio" class="form-check-input" id="answer2" name="status" value="0" checked>
          <label class="form-check-label" for="answer2">No</label>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>