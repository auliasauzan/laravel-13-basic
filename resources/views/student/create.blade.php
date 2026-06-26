<x-app>
    <x-slot:title>{{ $title }}</x-slot>
    <form method="POST" action="{{ route('student.store') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Mahasiswa</label>
            <input type="teks" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">NIM Mahasiswa</label>
            <input type="number" class="form-control @error('nim') is-invalid @enderror" id="nim" name="nim"
                value="{{ old('nim') }}">
            @error('nim')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-control @error('gender') is-invalid @enderror" id="gender" name="gender">
                <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
            </select>
            @error('gender')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <a class="btn btn-warning" href="{{ route('student.index') }}" role="button">Cancel</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</x-app>
