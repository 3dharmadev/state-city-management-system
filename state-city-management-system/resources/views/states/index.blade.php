<div class="container">
    <h2>States</h2> 
    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-3">Add New City</a>
    <a href="{{ route('states.create') }}" class="btn btn-primary mb-3">Add New State</a>
    <a href="{{ route('states.index') }}" class="btn btn-primary mb-3">Show All States</a>
    <a href="{{ route('cities.index') }}" class="btn btn-primary mb-3">Show All Cities</a>
      <h1>
        Total States: {{ $states->count() }}  </h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($states as $state)
            <tr>
                <td>{{ $state->id }}</td>
                <td>{{ $state->name }}</td>
                <td>
                    <a href="{{ route('states.edit', $state->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('states.destroy', $state->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
   
        </tbody>
    </table>
</div>