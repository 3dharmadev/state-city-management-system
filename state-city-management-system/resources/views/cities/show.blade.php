 
 
    <div class="container">
        <h1>City Details</h1>
        <table class="table">
            <tbody>
                <tr>
                    <th>ID</th>
                    <td>{{ $city->id }}</td>
                </tr>
                <tr>
                    <th>Name</th>
                    <td>{{ $city->name }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $city->state->name }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('cities.index') }}" class="btn btn-primary">Back</a>
    </div>
 
