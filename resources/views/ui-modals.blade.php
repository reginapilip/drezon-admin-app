@extends('layouts.master-layouts')
@section('title') @lang('translation.Modals') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('pagetitle') UI Elements @endslot
        @slot('title') Modals @endslot
    @endcomponent


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Modals Examples</h4>
                    <p class="card-title-desc">Modals are streamlined, but flexible
                        dialog prompts powered by JavaScript. They support a number of use cases
                        from user notification to completely custom content and feature a
                        handful of helpful subcomponents, sizes, and more.</p>

                    <div class="modal bs-example-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>One fine body&hellip;</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                        changes</button>
                                    <button type="button" class="btn btn-light waves-effect"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                    <div class="row">
                        <div class="col-lg-6">
                            <h4 class="card-title">Default Modal</h4>
                            <p class="card-title-desc">Toggle a working modal demo by clicking the button below. It will
                                slide down and fade in from the top of the page.</p>

                            <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                data-target="#myModal">Standard modal</button>
                            <!-- sample modal content -->
                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myModalLabel">Modal Heading</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h5 class="font-size-16">Overflowing text to show scroll behavior</h5>
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p>Aenean lacinia bibendum nulla sed consectetur.
                                                Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light waves-effect"
                                                data-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary waves-effect waves-light">Save
                                                changes</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>

                        <div class="col-lg-6">
                            <h4 class="card-title">Optional sizes</h4>
                            <p class="card-title-desc">Modals have three optional sizes, available via modifier classes to
                                be placed on a <code>.modal-dialog</code>.</p>

                            <div class="button-items">
                                <!-- Extra Large modal -->
                                <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                                    data-target=".bs-example-modal-xl">Extra large modal</button>

                                <!-- Large modal -->
                                <button type="button" class="btn btn-success waves-effect waves-light" data-toggle="modal"
                                    data-target=".bs-example-modal-lg">Large modal</button>

                                <!-- Small modal -->
                                <button type="button" class="btn btn-danger waves-effect waves-light" data-toggle="modal"
                                    data-target=".bs-example-modal-sm">Small modal</button>
                            </div>

                            <!--  Extra Large modal example -->
                            <div class="modal fade bs-example-modal-xl" tabindex="-1" role="dialog"
                                aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myExtraLargeModalLabel">Extra large modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!--  Large modal example -->
                            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
                                aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!--  Small modal example -->
                            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog"
                                aria-labelledby="mySmallModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title mt-0" id="mySmallModalLabel">Small modal</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>Cras mattis consectetur purus sit amet fermentum.
                                                Cras justo odio, dapibus ac facilisis in,
                                                egestas eget quam. Morbi leo risus, porta ac
                                                consectetur ac, vestibulum at eros.</p>
                                            <p>Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Vivamus sagittis lacus vel
                                                augue laoreet rutrum faucibus dolor auctor.</p>
                                            <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                                Praesent commodo cursus magna, vel scelerisque
                                                nisl consectetur et. Donec sed odio dui. Donec
                                                ullamcorper nulla non metus auctor
                                                fringilla.</p>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end row -->

    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Vertically centered</h5>
                    <p class="card-title-desc">Add <code>.modal-dialog-centered</code> to <code>.modal-dialog</code> to
                        vertically center the modal.</p>

                    <!-- center modal -->
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                        data-target=".bs-example-modal-center">Center modal</button>

                    <div class="modal fade bs-example-modal-center" tabindex="-1" role="dialog"
                        aria-labelledby="mySmallModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Center modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum.
                                        Cras justo odio, dapibus ac facilisis in,
                                        egestas eget quam. Morbi leo risus, porta ac
                                        consectetur ac, vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Vivamus sagittis lacus vel
                                        augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p class="mb-0">Aenean lacinia bibendum nulla sed consectetur.
                                        Praesent commodo cursus magna, vel scelerisque
                                        nisl consectetur et. Donec sed odio dui. Donec
                                        ullamcorper nulla non metus auctor
                                        fringilla.</p>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Scrollable modal</h5>
                    <p class="card-title-desc">You can also create a scrollable modal that allows scroll the modal body by
                        adding <code>.modal-dialog-scrollable</code> to <code>.modal-dialog</code>.</p>
                    <!-- Scrollable modal -->
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                        data-target="#exampleModalScrollable">Scrollable modal</button>

                    <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mt-0" id="exampleModalScrollableTitle">Scrollable Modal</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                    <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac
                                        facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac,
                                        vestibulum at eros.</p>
                                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis
                                        lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                                    <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel
                                        scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non
                                        metus auctor fringilla.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Static backdrop</h5>
                    <p class="card-title-desc">When backdrop is set to static, the modal will not close when clicking
                        outside it. Click the button below to try it.</p>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary waves-effect waves-light" data-toggle="modal"
                        data-target="#staticBackdrop">
                        Static backdrop modal
                    </button>

                    <!-- staticBackdrop Modal -->
                    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                        role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>I will not close if you click outside me. Don't even try to press escape key.</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Understood</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
