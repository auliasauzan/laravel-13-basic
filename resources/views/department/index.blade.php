<x-app>
    <x-slot:title>{{ $title }}</x-slot>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a class="btn btn-primary mb-3" href="{{ route('department.create') }}" role="button">Create</a>

    <ul class="list-group">
        @foreach ($departments as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $item->name }}
                <div>
                    <a class="btn btn-warning btn-sm" href="{{ route('department.edit', $item) }}" role="button">Edit</a>

                    <form action="{{ route('department.destroy', $item) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger btn-sm"
                            onclick="return confirm('Anda Yakin?')">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
</x-app>
