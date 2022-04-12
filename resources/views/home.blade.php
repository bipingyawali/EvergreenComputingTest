@extends('layout.main')
@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4 col-xl-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex">
                    <div class="flex-grow-1">
                        <span class="text-muted text-uppercase fs-12 fw-bold">Total Customers</span>
                        <h3 class="mb-0">{!! $total_customer !!}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
