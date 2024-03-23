 
    <div class="container">
    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add New City</a>
    <a href="{{ route('states.create') }}" class="btn btn-primary mb-3">Add New State</a>
    <a href="{{ route('states.index') }}" class="btn btn-primary mb-3">Show All States</a>
    <a href="{{ route('cities.index') }}" class="btn btn-primary mb-3">Show All Cities</a>
        <h1>Edit City</h1>

        <form action="{{ route('cities.update', $city->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">City Name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $city->name }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update City</button>
        </form>
    </div>
 
