@extends('layouts.app')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Add New Task</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('task.index') }}"> Back</a>

            </div>

        </div>

    </div>



    @if ($errors->any())

        <div class="alert alert-danger">

            <strong>Whoops!</strong> There were some problems with your input.<br><br>

            <ul>

                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>

    @endif



    <form action="{{ route('task.store') }}" method="POST">

    	@csrf



         <div class="row">

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Name:</strong>

		            <input type="text" name="Task_Title" class="form-control" placeholder="Name">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Date</strong>

		            <input type="date" name="Date" class="form-control" placeholder="Name">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>Start time</strong>

		            <input type="time" name="Start_time" class="form-control" placeholder="Name">

		        </div>

		    </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

		        <div class="form-group">

		            <strong>End time</strong>

		            <input type="time" name="End_time" class="form-control" placeholder="Name">

		        </div>

		    </div>

		    <div class="col-xs-12 col-sm-12 col-md-12 text-center">

		            <button type="submit" class="btn btn-primary">Submit</button>

		    </div>

		</div>



    </form>





@endsection