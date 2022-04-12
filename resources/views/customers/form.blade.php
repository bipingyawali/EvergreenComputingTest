<div class="card">
    <div class="card-header">General Information</div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>Company Name</label>
                {!! Form::text('company_name',null,['class' => 'form-control '.($errors->has("company_name")? "parsley-error":""),'placeholder' => 'Enter Company Name']) !!}
                @error('company_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>First Name</label>
                {!! Form::text('first_name',null,['class' => 'form-control '.($errors->has("first_name")? "parsley-error":""),'placeholder' => 'Enter First Name']) !!}
                @error('first_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Last Name</label>
                {!! Form::text('last_name',null,['class' => 'form-control '.($errors->has("last_name")? "parsley-error":""),'placeholder' => 'Enter Last Name']) !!}
                @error('last_name')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Phone Number</label>
                {!! Form::text('phone_number',null,['class' => 'form-control '.($errors->has("phone_number")? "parsley-error":""),'placeholder' => 'Enter Phone Number']) !!}
                @error('phone_number')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header">Address Information</div>
    <div class="card-body">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label>House Number</label>
                {!! Form::number('house_number',null,['class' => 'form-control '.($errors->has("house_number")? "parsley-error":""),'placeholder' => 'Enter House Number']) !!}
                @error('house_number')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Street</label>
                {!! Form::text('street',null,['class' => 'form-control '.($errors->has("street")? "parsley-error":""),'placeholder' => 'Enter Street']) !!}
                @error('street')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Town</label>
                {!! Form::text('town',null,['class' => 'form-control '.($errors->has("town")? "parsley-error":""),'placeholder' => 'Enter Town']) !!}
                @error('town')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>County</label>
                {!! Form::text('county',null,['class' => 'form-control '.($errors->has("county")? "parsley-error":""),'placeholder' => 'Enter County']) !!}
                @error('county')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Postcode</label>
                {!! Form::text('postcode',null,['class' => 'form-control '.($errors->has("postcode")? "parsley-error":""),'placeholder' => 'Enter Postcode']) !!}
                @error('postcode')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Country</label>
                {!! Form::text('country',null,['class' => 'form-control '.($errors->has("country")? "parsley-error":""),'placeholder' => 'Enter Country']) !!}
                @error('country')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Latitude</label>
                {!! Form::text('latitude',null,['class' => 'form-control '.($errors->has("latitude")? "parsley-error":""),'placeholder' => 'Enter Latitude']) !!}
                @error('latitude')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
            <div class="form-group col-md-6">
                <label>Longitude</label>
                {!! Form::text('longitude',null,['class' => 'form-control '.($errors->has("longitude")? "parsley-error":""),'placeholder' => 'Enter Longitude']) !!}
                @error('longitude')
                <ul class="parsley-errors-list filled" id="parsley-id-5"><li class="parsley-required">
                        {!! $message !!}
                    </li>
                </ul>
                @enderror
            </div>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary btn-submit">Submit</button>
