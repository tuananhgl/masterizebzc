@extends('backend.master')

@section('main')

    <div class="row">
        <div class="col-xs-4">
            <form action="{{route('config.store')}}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Tên cấu hình</label>
                    <input type="text" name="config_key" class="form-control">
                </div>
                <div class="form-group">
                    <label>Loại cấu hình</label>
                    <select name="config_type" class="form-control">
                        <option value="text">Text</option>
                        <option value="file">File</option>
                    </select>
                </div>
                <button class="btn btn-success">Lưu</button>
            </form>
        </div>
    </div>
@endsection