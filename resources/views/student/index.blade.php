<x-app>

    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($students as $student)
        <li class="list-group-item">{{ $student->name }}</li>
        <li class="list-group-item">{{ $student->nim }}</li>
    @endforeach


    </ul>

</x-app>
