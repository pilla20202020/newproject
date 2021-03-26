@section('page-specific-styles')
    <link href="{{ asset('css/dropify.min.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet"
          href="{{ asset('resources/css/theme-default/libs/bootstrap-tagsinput/bootstrap-tagsinput.css?1424887862')}}"/>
@endsection
@csrf
<div class="row">
    <div class="col-sm-9">
        <div class="card">
            <div class="card-underline">
                <div class="card-head">
                    <header class="ml-3 mt-2">{!! $header !!}</header>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            {{-- <div class="form-group">
                                <input type="text" name="name" class="form-control" required
                                       value="{{ old('name', isset($brand->name) ? $brand->name : '') }}"/>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('name') }}</span>
                                <label for="Name">Name</label>
                            </div> --}}

                            <div class="form-group ">
                                <label for="name" class="col-form-label pt-0">Name</label>
                                <div class="">
                                    <input class="form-control" type="text" required name="name" value="{{ old('name', isset($brand->name) ? $brand->name : '') }}" placeholder="Enter Your Name">
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            {{-- <div class="form-group">
                                <input type="text" name="keywords" data-role="tagsinput"
                                       value="{{ old('keywords', isset($brand->keywords) ? $brand->keywords : '') }}"/>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('keywords') }}</span>
                                <label for="specialization">Keywords</label>
                            </div> --}}

                            <div class="form-group ">
                                <label for="specialization" class="col-form-label pt-0">Keyword</label>
                                <div class="">
                                    <input class="form-control" type="text" name="keywords" data-role="tagsinput"
                                    value="{{ old('keywords', isset($brand->keywords) ? $brand->keywords : '') }}" placeholder="Enter a keyword">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="col-form-label pt-0">Description</label>
                                <textarea class="form-control" name="description" rows="4" placeholder="Description">{{old('description',isset($brand->description) ? $brand->description : '')}}</textarea>
                                <span id="textarea1-error" class="text-danger">{{ $errors->first('description') }}</span>
                            </div>     
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">File Upload 2</h5>
                                    <p class="card-title-desc">You can add a default value</p>
                                    @if(isset($brand->image))
                                    @if(!empty($brand->image))
                                        <input type="file" name="image" class="dropify"
                                            data-default-file="{{ asset($brand->image_path) }}"/>
                                    @else
                                        <input type="file" name="image" class="dropify"/>
                                    @endif
                                    @else
                                        <input type="file" name="image" class="dropify"/>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input type="checkbox" id="switch_demo_1" name="status"
                                           {{ old('status', isset($brand->status) ? $brand->status : '')=='active' ? 'checked':'' }} data-switchery/>
                                <span class="pl-1">Status</span>    
                                <input type="checkbox" class="ml-3" name="availability"
                                           {{ old('status', isset($brand->availability) ? $brand->availability : '')=='available' ? 'checked':'' }} data-switchery/>
                                <span class="pl-1">Availability</span>    
                                <input type="checkbox" class="ml-3" name="visibility"
                                           {{ old('status', isset($brand->visibility) ? $brand->visibility : '')=='visible' ? 'checked':'' }} data-switchery/>
                                <span class="pl-1">Featured</span>                          
                            </div>
                        </div>
                    </div> 
                    
                    <div class="row mt-2">
                        <div class="form-group ml-auto">
                            <div>
                
                            
                                <a class="btn btn-danger waves-effect ml-1" href="{{ route('brand.index') }}">
                                    <i class="md md-arrow-back"></i>
                                    Back
                                </a>

                                <input type="submit" name="pageSubmit" class="btn btn-light waves-effect waves-light" value="Submit">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="" data-spy="affix" data-offset-top="50">
            <!--end .panel-group -->
        </div>
    </div>
</div>


@section('page-specific-scripts')
    <script src="{{asset('resources/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/bootstrap-tagsinput/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resources/js/libs/jquery-validation/dist/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.dropify').dropify();
        });
    </script>
@endsection
