<x-layout>
    <x-slot name="title">
        Form
    </x-slot>
    <x-slot name="content">
        <div class="container text-white mt-5 p-4">
               <div class="text-white">
               @if ($errors->any())
               @foreach ($errors->all() as $message)
<li class="text-danger m-2">{{ $message }}</li>
               @endforeach
               @endif
            </div>
            <form class="" method="POST">
                @csrf
                <div class="row">
                    <div class="col col-sm-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name"value=" {{ old('name') }} " class="form-control" id="name"
                                placeholder="Name">
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="form-group">
                        @if ($errors->any())
               @foreach ($errors->get('email') as $message)
<li class="text-danger m-2">{{ $message }}</li>
               @endforeach
               @endif
                            <label for="email">Email</label>
                            <input type="text" name="email"value=" {{ old('email') }} " class="form-control" id="email"
                                placeholder="Email">
                        </div>
                    </div>
                    <div class="col col-sm-6">
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="text" name="password"value=" {{ old('') }} " class="form-control" id="password"
                                placeholder="Password">
                        </div>
                    </div>  
                </div>
                <input type="submit" value="submit" class="btn btn-outline-warning p-2">
            </form>
         
            <div class="text-white">
                @if (isset($data))
                    @foreach ($data as $item)
                 <h1>  {{ $item }}</h1> 
                    @endforeach
                @endif

            </div>
        </div>
    </x-slot>


</x-layout>
