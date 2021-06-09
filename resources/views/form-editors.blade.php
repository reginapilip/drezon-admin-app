@extends('layouts.master-layouts')
@section('title') @lang('translation.Editors') @endsection
@section('css')
    <!-- Summernote css -->
    <link href="{{ URL::asset('/assets/libs/summernote/summernote.min.css') }}" rel="stylesheet">
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') Forms @endslot
        @slot('title') Form editor @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ckeditor Classic editor</h4>
                    <p class="card-title-desc">Example of Ckeditor Classic editor</p>
                    <div id="classic-editor"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Summernote</h4>
                    <p class="card-title-desc">Super simple wysiwyg editor on bootstrap</p>

                    <div id="summernote-editor" class="summernote">Hello Summernote</div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Summernote Air-mode</h4>
                    <p class="card-title-desc">Summernote editor air-mode example.</p>

                    <div id="summernote-airmode-editor" class="summernote">
                        <h5>This is an Air-mode editable area.</h5>
                        <ul>
                            <li>Select a text to reveal the toolbar.</li>
                            <li>Edit rich document on-the-fly, so elastic!</li>
                        </ul>
                        <p>End of air-mode area</p>

                    </div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('script')
    <!-- ckeditor -->
    <script src="{{ URL::asset('/assets/libs/ckeditor/ckeditor.min.js') }}"></script>
    <!-- Summernote js -->
    <script src="{{ URL::asset('/assets/libs/summernote/summernote.min.js') }}"></script>
    <!-- init js -->
    <script src="{{ URL::asset('/assets/js/pages/form-editor.init.js') }}"></script>
    <script>
        ClassicEditor
        .create( document.querySelector( '#classic-editor' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
