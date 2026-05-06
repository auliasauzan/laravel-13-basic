<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-4">
        <form method="POST" action="{{ route('lecturer.update', $lecturer) }}">
            @csrf
            @method('put')


            <!-- Input Nama -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    value="{{ old('name', $lecturer->name) }}">

                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <!-- Input Department -->
            <div class="mb-3">
                <label for="department_id" class="form-label">Department</label>
                <select class="form-select @error('department_id') is-invalid @enderror" id="department_id"
                    name="department_id">

                    <option value="">Choose Department</option>

                    @foreach ($departments as $department)
                        <option value="{{ $department->id }}" @selected(old('department_id', $lecturer->department_id) == $department->id)>
                            {{ $department->name }}
                        </option>
                    @endforeach
                </select>

                @error('department_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div> <!-- Pastikan div mb-3 ini tertutup -->

            <!-- Tombol Aksi -->
            <div class="mt-4">
                <a href="{{ route('lecturer.index') }}" class="btn btn-warning">Cancel</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</x-app>
