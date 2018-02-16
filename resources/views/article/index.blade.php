@extends('layouts.layout1')
@section('style')
<link href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css" rel="stylesheet">
@endsection
@section('pagehead')
<h1>
	Dashboard
	<small>Control panel</small>
</h1>
<ol class="breadcrumb">
	<li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
	<li class="active">Dashboard</li>
</ol>
@endsection
@section('content')
<div class="row">
	<div class="col-md-12">
	<div class="panel panel-default">
                <div class="panel-heading">Articles</div>

                <div class="panel-body">
                    <table class="table table-hover table-bordered table-striped datatable" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Title</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
	</div>
</div>
@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $('.datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "article/getdata",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'title', name: 'title'},
            {data: 'body', name: 'body'},
        ]
    });
});
</script>
@endsection
