@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        
            <div class="col-12">

                    <div class="card shadow-lg">
                        <div class="card-header bg-primary text-white">
                        <h4>Create New Program</h4>
                        </div>
                        <div class="card-body overflow-auto">
                            <!-- Start of form -->
                                
                            <form method="post" action="{{ route('admin.programs.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                <div class="col-sm-6">
                                <!---->

                                <div class="form-group mr-3">
                                    <label>Description</label>
                                    <input type="text" class="form_text form-control" id="form_isbn" name="description" />
                                    <!-- <small class="form-text text-muted">example: xxx-x-xxxxx-xxx-x</small>
                                    <small class="error_form" id="isbn_error_message" ></small> -->
                                </div>
                                <!---->
                                <!---->
                                <div class="form-group mr-3">
                                    <label>Link</label>
                                    <input type="text" class="form_text form-control" id="form_title" name="link">
                                    <!-- <small class="form-text text-muted">example: Book One</small>
                                    <small class="error_form" id="title_error_message" ></small> -->
                                </div>
                                <!---->
                                <!---->
                                
                                <!---->
                               
                                <!------>
                                <!---->
                                </div><!--endleft-->
                                <div class="col-sm-6">
                                    <div class="row">
                                        
                                      
                                    </div>
                                <!---->

                                <fieldset class="border p-2">
                                <legend  class="w-auto"><small>Icon Image Upload</small></legend>
                                <input type='file' name="image" onchange="readURL(this);" />
                                <img id="image-upload" name="image" src="https://cdn0.iconfinder.com/data/icons/web-development-47/64/feature-application-program-custom-512.png" alt="your image" />
                                </fieldset>
                                <style>
                                img{
                                max-width:200px;
                                }
                                input[type=file]{
                                padding:10px;
                                }
                                </style>
                                <script>
                                function readURL(input) {
                                    if (input.files && input.files[0]) {
                                        var reader = new FileReader();
                                        reader.onload = function (e) {
                                        $('#image-upload').attr('src', e.target.result);
                                        };
                                        reader.readAsDataURL(input.files[0]);
                                    }
                                }
                                </script>
                                </div><!--end right-->

                                </div><!--end row-->
                                <div class="form-group ml-2 mt-3">
                                <button type="submit" class="btn btn-primary" style="width:120px;">
                                <i class="fas fa-save mr-2"></i>Save</button>
                                </div>
                                </form>


                            <!-- End of Form -->
                        </div>

                    </div>

            </div>
       

    </div>
</div>
@endsection