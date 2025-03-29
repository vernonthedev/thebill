<div class="container">
<h2>currencies List</h2>
<a href="{{ route('currencies.create') }}" class="btn btn-primary mb-3">Create currencies</a>
<table class="table">
    <thead>
        <tr><th>currency_name</th><th>market_cap</th><th>duration</th></tr>
    </thead>
    <tbody>
        @foreach ($currencies as $item)
                <tr>
                    <td>{{$item->currency_name}}</td>
<td>{{$item->market_cap}}</td>
<td>{{$item->duration}}</td>
<td>
                        <a href="{{ route('currencies.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('currencies.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>