<head>
    <link href="{{ asset('asset/css/welcome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<h1 style="margin-left:2%">A List of Books</h1>
    <a href="/addBook" class="btn btn-success" style="margin-bottom:20px;margin-top:20px;margin-left:2%;">Add a new book!</a>

{{-- <div style="height:80%;width:40%;overflow:scroll;margin-left:2%">     --}}
    <table style="margin-left:20px;">
    <tr>
        <th class='title-head'>id</th>
        <th class='title-head'>Title</th>
        <th class='title-head'>Author</th>
        <th class='title-head'>Status</th>
        <th class='title-head'>Who added it?</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($entries as $entry)

    @if($entry['status'] === 1)
        <tr class = 'finished-work cell-row'>
    @else
        <tr class = 'cell-row' style = 'color: red;'>
    @endif
        <td class='cell'>{{$entry['id']}}</td>
        <td class='cell'>{{$entry['name']}}</td>
        <td class='cell'>{{$entry['author']}}</td>
        @if($entry['status'] === 1)
            <td class='cell'>&#10004;</td>
        @else
            <td class='cell'>&#10008;</td>
        @endif
        <td class='cell'>{{$entry['contributor']}}</td>
    <td class='delete_option' style='background-color:white;visibility:visible'>
        <form id='deleteForm' method='POST' style='margin: auto;margin-left:0px;visibility:hidden;' action="{{route('book.delete')}}">
            @csrf
            {{-- value='&#8855;' --}}
            <input class="btn btn-danger " type='submit' name='action' value="Delete">
            {{-- value='&#10533;' --}}
            <input class="btn btn-warning" type='submit' name='action' value="Edit">
            <input value={{$entry['id']}} name='id' style='visibility:hidden;'>
        </form>
    </td>
    </tr>

    @endforeach

</table>
{{-- </div>  --}}

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script type="text/javascript" src="{{ URL::asset('asset/js/welcome.js') }}"></script>
</body>