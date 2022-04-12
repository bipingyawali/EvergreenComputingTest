@extends('layout.main')
@section('title','Customer Details')
@section('page_title', 'Customer Detail')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Details of Customer
                    <a class="btn btn-primary btn-sm text-white float-right" href="{{ route('customers.create') }}"><i class="fa fa-plus"></i> Add</a>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">General Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Company Name</dt>
                                        <dd>{!! $customer->company_name !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>First Name</dt>
                                        <dd>{!! $customer->first_name !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Last Name</dt>
                                        <dd>{!! $customer->last_name !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Phone Number</dt>
                                        <dd>{!! $customer->phone_number !!}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">Address Information</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <dl>
                                        <dt>House Number</dt>
                                        <dd>{!! $customer->house_number !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Street</dt>
                                        <dd>{!! $customer->street !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Town</dt>
                                        <dd>{!! $customer->town !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>County</dt>
                                        <dd>{!! $customer->county !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Postcode</dt>
                                        <dd>{!! $customer->postcode !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-3">
                                    <dl>
                                        <dt>Country</dt>
                                        <dd>{!! $customer->country !!}</dd>
                                    </dl>
                                </div>
                                <div class="col-md-12">
                                    <div class="col-md-12 mb-3" id="map" style="height: 400px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXE_p894aZ9NpyRSjuyGgq5_NnZeSLYuw&sensor=false&libraries=places&callback=initMap"
            async defer></script>
        <script>
            var latitude = {{ $customer->latitude }};
            var longitude = {{ $customer->longitude }};
            function initMap() {

                const pos = { lat: latitude, lng: longitude };
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 15,
                    center: pos,
                });

                const marker = new google.maps.Marker({
                    position: pos,
                    map: map,
                });
            }
        </script>

@endpush
