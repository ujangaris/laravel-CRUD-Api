
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product )

        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>Rp.{{$product->price}}</td>
            <td>
                <a href="/products/{{ $product->id }}/edit">Edit</a>
            </td>
        </tr>
        @endforeach

    </tbody>
    <a href="/products/create">Create</a>
</table>
