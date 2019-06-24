@extends('master')

@section('content')
	<a href="{{ url('tasks/create') }}" class="btn btn-success">Create New Task</a>
	<div class="row">
		<div class="col-md-12">
			@if(session('success'))
				<div class="alert alert-success">
					{{ session('success') }}
				</div>
			@endif
			<table class="table">
				<thead>
					<tr>
						<th>id</th>
						<th>name</th>
						<th>status</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($tasks as $task)
					<tr>
						<td>{{ $task->id }}</td>
						<td>{{ $task->name }}</td>
						<td>
							@if($task->status == 0)
								Pending
							@else
								Done
							@endif
						</td>
						<td>
							<a href="{{ url('tasks/'.$task->id) }}" class="btn btn-primary">View</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>	
		</div>
	</div>
@endsection