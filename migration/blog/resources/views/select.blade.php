<table>
  @foreach($users as $item)
  <tr>
    <td>{{$item->name}}</td>
    <td>{{$item->roll}}</td>
    <td>{{$item->class}}</td>
  </tr>
  @endforeach
</table>