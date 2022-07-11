@extends('layouts.master')

@section('content')
<div class="container" style="margin-top: 4%;">
    <div class="col-md-12">
        <h1>LISTAGEM DE FREELANCERS DISPONÍVEIS</h1>
        <div class="col-md-4">
            Info Filtro
        </div>
        <div class="col-md-8">
            <div class="widget ibox-content">
                <ul>
                @each('freelancer.index', $freelancers, 'freelancer')
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection

@include('javascript-page')
@include('css-page')

<style>
    .ibox-title {
        padding: 15px 15px 4px 15px !important;
    }
</style>