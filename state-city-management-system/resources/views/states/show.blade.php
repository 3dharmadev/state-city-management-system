<div class="container">
    <h2>State Details</h2>
    <table class="table">
        <tbody>
            <tr>
                <th>ID</th>
                <td>{{ $state->id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ $state->name }}</td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('states.index') }}" class="btn btn-primary">Back</a>
</div>