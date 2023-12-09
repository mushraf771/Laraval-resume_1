<x-layout>
    <x-slot name="title">
        Students
    </x-slot>
    <x-slot name="content">
        <div class="container text-white mt-5 p-4">
              
        @foreach($student as $sd)
        {{ $sd ->id }}  >
        {{ $sd ->name }}  |
        {{ $sd ->email }} |
        {{ $sd ->password }}
<br>
           @endforeach
        </div>
    </x-slot>


</x-layout>
