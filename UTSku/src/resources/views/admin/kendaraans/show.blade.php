@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.kendaraan.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kendaraans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.id') }}
                        </th>
                        <td>
                            {{ $kendaraan->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.name') }}
                        </th>
                        <td>
                            {{ $kendaraan->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.manufacturer') }}
                        </th>
                        <td>
                            {{ $kendaraan->manufacturer }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.type') }}
                        </th>
                        <td>
                            {{ $kendaraan->type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.kendaraan.fields.fuel') }}
                        </th>
                        <td>
                            {{ $kendaraan->fuel }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.kendaraans.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection