@extends('layout.layout')
@section('page_title','Produces - ')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Add Produce</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Details</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form name="add_produce" id = "add_produce" method = "post" action="{{URL:: to('produce/save')}}" >
                                @csrf
                                <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <input required type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="produce_date">Produce Date</label>
                                        <input required type="date" class="form-control" id="produce_date" name="produce_date" placeholder="Enter Date">
                                    </div>
                                    <div class="form-group">
                                        <label for="user_id">UserId</label>
                                        <input required type="text" class="form-control" id="user_id" name="user_id" placeholder="Enter UserID">
                                    </div>
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

@push('scripts')

@endpush

@push('styles')

@endpush
