@extends('layouts.master')

@section('content')
<div class="mt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <h3 class="text-center">Upload Files</h3>
                <div class="card">
                    <div class="card-body">
                        <form-upload></form-upload>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12">
                <div class="card rounded-0">
                    <ul class="nav nav-pills nav-fill border-bottom" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link rounded-0 active" id="download-tab" data-toggle="tab" href="#download"><i class="fas fa-download"></i> DOWNLOAD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" id="html5-tab" data-toggle="tab" href="#html5"><i class="fab fa-html5"></i> HTML5</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link rounded-0" id="forums-tab" data-toggle="tab" href="#forums"><i class="fas fa-code"></i> CODE FOR FORUMS</a>
                        </li>
                    </ul>

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="download">
                                Download File
                            </div>
                            <div class="tab-pane fade" id="html5">
                                Html5 Code File
                            </div>
                            <div class="tab-pane fade" id="forums">
                                Forums Code File
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection