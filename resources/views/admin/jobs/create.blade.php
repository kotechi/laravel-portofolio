
    <h1>Create Job</h1>
    <form action="{{ route('jobs.store') }}" method="POST">
        @csrf
        <div>
            <label for="queue">Queue:</label>
            <input type="text" name="queue" id="queue" required>
        </div>
        <div>
            <label for="payload">Payload:</label>
            <textarea name="payload" id="payload" required></textarea>
        </div>
        <div>
            <label for="attempts">Attempts:</label>
            <input type="number" name="attempts" id="attempts" required>
        </div>
        <div>
            <label for="reserved_at">Reserved At:</label>
            <input type="number" name="reserved_at" id="reserved_at">
        </div>
        <div>
            <label for="available_at">Available At:</label>
            <input type="number" name="available_at" id="available_at" required>
        </div>
        <div>
            <label for="created_at">Created At:</label>
            <input type="number" name="created_at" id="created_at" required>
        </div>
        <button type="submit">Create Job</button>
    </form>

