
    <h1>Jobs</h1>
    <a href="{{ route('jobs.create') }}">Create New Job</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Queue</th>
                <th>Payload</th>
                <th>Attempts</th>
                <th>Reserved At</th>
                <th>Available At</th>
                <th>Created At</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->id }}</td>
                    <td>{{ $job->queue }}</td>
                    <td>{{ $job->payload }}</td>
                    <td>{{ $job->attempts }}</td>
                    <td>{{ $job->reserved_at }}</td>
                    <td>{{ $job->available_at }}</td>
                    <td>{{ $job->created_at }}</td>
                    <td>
                        <form action="{{ route('jobs.destroy', $job) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure you want to delete this job?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
