@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 4%; max-width: 70%;">
    <div class="wrapper wrapper-content animated fadeInUp">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox">
                    <div class="ibox-title">
                        <h5>All projects assigned to this account</h5>
                        <div class="ibox-tools">
                            <a href="" class="btn btn-primary btn-xs">Create new project</a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="m-b-sm m-t-sm">

                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <button tabindex="-1" class="btn btn-white btn-sm" type="button"><i class="fa fa-refresh"></i> Refresh</button>
                                </div>
                                <input type="text" class="form-control form-control-sm">

                                <div class="input-group-append">
                                    <button tabindex="-1" class="btn btn-primary btn-sm" type="button">Go!</button>
                                </div>
                            </div>
                        </div>

                        <div class="project-list">

                            <table class="table table-hover">
                                <tbody>
                                    @each('usuario.projeto', $projetos, 'projeto')
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@include('javascript-page')
@include('css-page')