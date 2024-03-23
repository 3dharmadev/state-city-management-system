<div class="container">
<a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add New City</a>
    <a href="{{ route('states.create') }}" class="btn btn-primary mb-3">Add New State</a>
    <a href="{{ route('states.index') }}" class="btn btn-primary mb-3">Show All States</a>
    <a href="{{ route('cities.index') }}" class="btn btn-primary mb-3">Show All Cities</a>
    <h2>Create State</h2>
    <form method="POST" action="{{ route('states.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>