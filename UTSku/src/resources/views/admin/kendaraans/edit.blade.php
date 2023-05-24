@extends('layouts.admin')
@section('content')
    <div class="card">
        <div class="card-header">
            {{ trans('global.edit') }} {{ trans('cruds.vehicle.title_singular') }}
        </div>

        <div class="card-body">
            <form method="POST" action="{{ route('admin.vehicles.update', [$vehicle->id]) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label class="required" for="name">{{ trans('cruds.vehicle.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name"
                        id="name" value="{{ old('name', $vehicle->name) }}" required>
                    @if ($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.vehicle.fields.name_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="manufacturer">{{ trans('cruds.vehicle.fields.manufacturer') }}</label>
                    <input class="form-control {{ $errors->has('manufacturer') ? 'is-invalid' : '' }}" type="text"
                        name="manufacturer" id="manufacturer" value="{{ old('manufacturer', $vehicle->manufacturer) }}"
                        required>
                    @if ($errors->has('manufacturer'))
                        <div class="invalid-feedback">
                            {{ $errors->first('manufacturer') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.vehicle.fields.manufacturer_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="type">{{ trans('cruds.vehicle.fields.type') }}</label>
                    <select class="form-control select2 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type"
                        id="type">
                        @foreach ($types as $type)
                            <option value="{{ $type }}" {{ in_array($vehicle->type, old('types', $types)) ? 'selected' : '' }}>
                                {{ $type }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('type'))
                        <div class="invalid-feedback">
                            {{ $errors->first('type') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.vehicle.fields.manufacturer_helper') }}</span>
                </div>
                <div class="form-group">
                    <label class="required" for="fuel">{{ trans('cruds.vehicle.fields.fuel') }}</label>
                    <select class="form-control select2 {{ $errors->has('fuel') ? 'is-invalid' : '' }}" name="fuel"
                        id="fuel">
                        @foreach ($fuels as $fuel)
                            <option value="{{ $fuel }}" {{ in_array($vehicle->fuel, old('fuels', $fuels)) ? 'selected' : '' }}>{{ $fuel }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('fuel'))
                        <div class="invalid-feedback">
                            {{ $errors->first('fuel') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.vehicle.fields.manufacturer_helper') }}</span>
                </div>

                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
