<h1>Предметы</h1>

<table>
    <tr>
        <th>№</th>
        <th>Название</th>
    </tr>
    @foreach($sub_list as $sub)
        <tr>
            <td>{{$sub->id}}</td>
            <td>{{$sub->title}}</td>
        </tr>
    @endforeach
</table>

