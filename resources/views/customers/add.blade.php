@extends('layout.main')
@section('title','Add Customer')
@section('page_title', 'Add Customer')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Add New Customer
                    <a class="btn btn-primary btn-sm text-white float-right" href="{{ route('customers.index') }}"><i class="fa fa-list"></i> Lists</a>
                </div>
                <div class="card-body">
                    @include('flash::message')
                    {!! Form::open(['route'=>'customers.store','method'=>'post']) !!}
                    @include('customers.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
