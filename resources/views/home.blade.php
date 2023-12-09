<x-layout>
<x-slot name='title'>Home</x-slot>
<x-slot name='content'>
<div class="mt-3">
<div class="text-center">
<img  src=" {{ asset('images/avt.png')}} " width="250px" height="150px" class="img-thumbnail" alt="image not found"/>
</div>
<div class=" text-white container mt-2 p-4">
    <h2 class="fw-bold ">Hello Caption</h2>
    <p class=" ">
<b class="fw-bold">Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
</p></div>
<div class="text-center">
<a href="{{route('home')}}" class="btn btn-outline-warning my-3 mx-5">Hire Me</a>
<a href="{{route('contact')}}" class="btn btn-outline-info my-3 mx-5">Contact Me</a>
</div>
</div>
</x-slot>
</x-layout>