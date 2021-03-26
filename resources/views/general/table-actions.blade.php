@if(!empty($editRoute))
    <a href="{{$editRoute}}"><button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="mdi mdi-pencil"></i></button></a>
@endif

@if(!empty($deleteRoute))
    <a href="{{$deleteRoute}}"><button type="button" class="btn btn-icon-toggle" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="far fa-trash-alt"></i></button></a>
@endif