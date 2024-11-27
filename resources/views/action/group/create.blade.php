<form action="{{ route('action.group.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">Group Name</label>
        <input type="text" name="name" id="name" required>
    </div>
    <div>
        <label for="description">Description</label>
        <textarea name="description" id="description"></textarea>
    </div>
    <button type="submit">Create Group</button>
</form>
