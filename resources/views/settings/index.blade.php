@extends('template')
@section('pageTitle','Logo Setting')
@section('content')
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" href="{{ url('admin/setting/logo') }}">Logo</a>
  </li>
</ul>

<div class="row">
  <div class="col-sm-12">
  <form method="post" enctype="multipart/form-data" action="{{ url('admin/setting/logo_update') }}">
    {{csrf_field()}}
    <table class="table-bordered table mt-2">
      <tr>
        <th>Update Logo</th>
        <td>
        <input type="file" name="logo_img" />
        <input type="hidden" name="logo_img" value="{{ $logo[0]->meta_value }}" />
        <img src="{{ asset('imgs/'.$logo[0]->meta_value) }}" width="100" />
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="Update" class="btn btn-primary" />
        </td>
      </tr>
    </table>
  </form>
  </div>
</div>

@endsection