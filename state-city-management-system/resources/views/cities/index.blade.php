<div class="container">
    <h1>Cities</h1>
    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add New City</a>
    <a href="{{ route('states.create') }}" class="btn btn-primary mb-3">Add New State</a>
    <a href="{{ route('states.index') }}" class="btn btn-primary mb-3">Show All States</a>
    <a href="{{ route('cities.index') }}" class="btn btn-primary mb-3">Show All Cities</a> 
    <h3>Total Cities: {{ $cities->count() }}</h3>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>State</th>  
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($cities as $city)
                <tr>
                    <td>{{ $city->id }}</td>
                    <td>{{ $city->name }}</td>
                    <td>{{ $city->state->name }}</td>  
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

