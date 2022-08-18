
@extends('layouts.app')



@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Tasks</h2>

            </div>

            <div class="pull-right">

                @can('task-create')

                <a class="btn btn-success" href="{{ route('task.create') }}"> Create New task</a>

                @endcan

            </div>

        </div>

    </div>



    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif



    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th>Date</th>
            <th>Start time</th>
            <th>End Time</th>
             <th>status</th>  
         @if(Auth::user()->hasRole('Admin'))   <th>Time taken</th> @endif
            <th width="280px">Action</th>

        </tr>

	    @foreach ($products as $product)

	    <tr>

	        <td>{{ ++$i }}</td>

	        <td>{{ $product->Task_Title }}</td>

	        <td>{{ $product->Date }}</td>
            <td>{{ $product->Start_time }}</td>
            <td>{{ $product->End_time }}</td>
         
            @if($product->status == 1 )  <td>Approved</td>
            @elseif($product->status == 0 ) 
            <td>Waiting</td>
            
              @endif
            
            
         @if(Auth::user()->hasRole('Admin'))
             <td> 
                @php
                    
                    $endTime = Carbon\Carbon::parse($product->Start_time);
                    $startTime = Carbon\Carbon::parse($product->End_time);
                    $timeleft = $startTime->diffForHumans($endTime);
                    //dd($timeleft);
                    echo $timeleft;
                @endphp
           </td>  
        
         @endif

         
	        <td>

                <form action="{{ route('task.destroy',$product->id) }}" method="POST">

                    {{-- <a class="btn btn-info" href="{{ route('task.show',$product->id) }}">Show</a> --}}

                    @can('task-edit')

                    <a class="btn btn-primary" href="{{ url('edittask',$product->id) }}">Edit</a>

                    @endcan



                    @csrf

                    @method('DELETE')

                    @can('task-delete')

                    <button type="submit" class="btn btn-danger">Delete</button>

                    @endcan


                    
                     @csrf
                    @method('DELETE')

                   
                     @can('task-reject')

                    <button type="submit" class="btn btn-outline-warning">Task Reject</button>

                    @endcan

                </form>
              
                @can('task-approve')

                      @if($product->status != 1 )<button type="submit" class="btn btn-outline-success"><a href="{{ url('approve/'.$product->id) }}" style="text-decoration:none;"> Task Approve</button> @endif 

                    @endcan
                 
	        </td>

	    </tr>

	    @endforeach

    </table>



    {!! $products->links() !!}





@endsection