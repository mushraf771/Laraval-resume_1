<x-layout>
    <x-slot name='title'>Contact</x-slot>
    <x-slot name='content'>
        <div class="container  mt-3">
            <h1 class="text-warning fw-bold">Contact Us</h1>
            <hr class="bg-warning " />
            <div class="row mt-4">
                <div class="col-12 col-sm-8 ">
                    <form> 
                        <div class="d-flex justify-content-between my-3 ">
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name">
                            <input type="text" class="form-control ml-4" id="formGroupExampleInput2"
                                placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="formGroupExampleInput2"
                                placeholder="your subject">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" class="form-control" placeholder="Your message" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary p-2">SEND</button>
                    </form>
                </div>
                <!-- 2nd col -->
                <div class="col-12 col-sm-4">
                    <div class="d-flex flex-column text-white py-3 text-center">
                        <div class=" d-flex flex-column pb-2">
                            <i class="fa-solid fa-location-dot my-2 fa-2x i-color"></i>
                            Nishtar Town Lahore
                        </div>
                        <div class="d-flex flex-column pb-2">
                            <i class="fa-solid fa-phone-volume my-2 fa-2x i-color"></i>
                            +923028976771
                        </div>
                        <div class="d-flex flex-column pb-2">
                            <i class="fa-solid fa-envelope my-2 fa-2x i-color"></i>
                            mushraf256@gmail.com
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </x-slot>
</x-layout>
