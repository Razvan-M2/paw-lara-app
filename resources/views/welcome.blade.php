<h1>Entries List</h1>

<table>

    <tr>
        <th class='title-head'>id</th>
        <th class='title-head'>Title</th>
        <th class='title-head'>Author</th>
        <th class='title-head'>Status</th>
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
        <td class='cell'>{{$entry['status']}}</td>
    </tr>

    @endforeach

</table>