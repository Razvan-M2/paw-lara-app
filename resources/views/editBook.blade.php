<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Change a book!</title>
</head>
<body>
    
    <form style="width:40%;margin-left:auto;display:block;margin-right:auto;vertical-align: middle;margin-top:200px;" 
            method="POST" action="{{route('book.edit.save')}}">
            @csrf
        <div class="form-group">
          <label for="titleBookInput">Change the title:</label>
        <span style="color: red;">@error('title'){{"The book must have a title!"}}@enderror</span>
        <input type="text" class="form-control" id="titleBookInput" name="title" value="{{$entry[0]['name']}}">
        </div>
        <div class="form-group">
          <label for="nameAuthorInput">Change the Author:</label>
        <span style="color: red;">@error('author'){{"The book must have an author!"}}@enderror</span>
          <input type="text" class="form-control" id="nameAuthorInput" name="author"value="{{$entry[0]['author']}}">
        </div>
        <div class="form-group">
          <label for="nameContributorInput">Change the original contributor...</label>
          <input type="text" class="form-control" id="nameContributorInput" name="contributor" value="{{$entry[0]['contributor']}}">
        </div>
        <p>Have you finished it?</p>
        <div class="form-group form-check">
            @if($entry[0]['status'] === 1)
                <input type="radio" class="form-check-input" id="answer1" name="status" value="1" checked>
                <label class="form-check-label" for="answer1">Yes</label>
                <br>
                <input type="radio" class="form-check-input" id="answer2" name="status" value="0">
                <label class="form-check-label" for="answer2">No</label>
            @else
                <input type="radio" class="form-check-input" id="answer1" name="status" value="1">
                <label class="form-check-label" for="answer1">Yes</label>
                <br>
                <input type="radio" class="form-check-input" id="answer2" name="status" value="0" checked>
                <label class="form-check-label" for="answer2">No</label>
            @endif
        </div>
        <button type="submit" class="btn btn-primary" value={{$entry[0]['id']}} name = "action">Submit</button>
      </form>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>