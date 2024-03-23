 
<!-- cities.create.blade.php -->

<form action="{{ route('cities.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">City Name:</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="state_id">State:</label>
        <select class="form-control" id="state_id" name="state_id">
            @foreach ($states as $state)
                <option value="{{ $state->id }}">{{ $state->name }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
