<form action="{{ route('admissions.update', $admission->id) }}" method="post">
    @csrf
    @method('PUT')
    <!-- Form fields here, populated with $admission object values -->
    <input type="text" name="complain" value="{{ $admission->complain }}">
    <!-- other form fields here -->
    <button type="submit">Save changes</button>
</form>