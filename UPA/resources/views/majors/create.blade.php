<form action="{{ route('majors.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name">Major Name</label>
        <input name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="code">Major Code</label>
        <input name="code" class="form-control">
    </div>
    <button class="btn btn-primary">Submit</button>
</form>
