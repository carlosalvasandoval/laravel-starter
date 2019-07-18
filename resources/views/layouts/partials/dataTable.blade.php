<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            @foreach ($colums as $colName)
            <th >{{$colName}}></th>
            @endforeach
        </tr>
    </thead>
    <tbody></tbody>
</table>