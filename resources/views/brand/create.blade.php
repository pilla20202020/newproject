@extends('layouts.admin.admin')

@section('title', 'Create a Category')

@section('content')
    <section>
        <div class="section-body">
            <form class="form form-validate floating-label" action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data" novalidate>
            @include('brand.form',['header' => 'Create a Brand'])
            </form>
        </div>
    </section>
@endsection

