@extends('default.default')
@section('body')

	<div class="container mt-5">
		<div class="d-flex justify-content-between mb-2">
	        <p><strong>Customer List</strong></p>
	        <a class="btn btn-primary" href="{{ url('admin/customers?export=pdf') }}">Export to PDF</a>
	    </div>

	    <table class="table table-bordered mb-5">
	        <thead>
	            <tr>
					<th scope="col">ID</th>
	                <th scope="col">Name</th>
	                <th scope="col">E-mail</th>
	                <th scope="col">Phone</th>
	                <th scope="col">DOB</th>
	            </tr>
	        </thead>
	        <tbody>
	            @foreach($data as $key=>$row)
	            <tr>
					<td>{{ $key }}</td>
	                <td>{{ $row->name }}</td>
	                <td>{{ $row->email }}</td>
	                <td>{{ $row->phone }}</td>
	                <td>{{ $row->dob }}</td>
	            </tr>
	            @endforeach
	        </tbody>
	    </table>
	</div>
@endsection

@section('script')
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
@endsection