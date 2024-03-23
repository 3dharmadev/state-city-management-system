 
 
    <div class="container">
        <h1>Cities</h1>
        <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add New City</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->id }}</td>
                        <td>{{ $city->name }}</td>
                        <td>
                            <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('cities.destroy', $city->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this city?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
 
