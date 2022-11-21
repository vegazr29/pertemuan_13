@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">missing_Item_Status {{ $missing_item_status->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/missing_-item_-status') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/missing_-item_-status/' . $missing_item_status->id . '/edit') }}" title="Edit missing_Item_Status"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/missing_item_status' . '/' . $missing_item_status->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete missing_Item_Status" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $missing_item_status->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $missing_item_status->user_id }} </td></tr><tr><th> Class </th><td> {{ $missing_item_status->class }} </td></tr><tr><th> Room Id </th><td> {{ $missing_item_status->room_id }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
