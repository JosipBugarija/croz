@extends('layouts.master')

@section('title', 'New Joke')

@section('content')
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row justify-content-md-center">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">New Joke</h3>
                        </div>

                        <!-- form start -->
                        <form role="form" action="{{ route('jokes.store') }}" method="POST">
                            @csrf
                            {{ method_field('POST') }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Content <span class="text-danger">*</span></label>
                                    <textarea name="content" rows="8" class="form-control" placeholder="Content">{{ old('content') }}</textarea>
                                </div>

                                <div class="form-group">
                                    <label>Category <span class="text-danger">*</span></label>

                                    <select class="form-control" data-style="btn-default" name="category_id">
                                        <option selected disabled>Select...</option>

                                        @foreach ($categories as $c)
                                            <option value="{{ $c->id }}" {{ old('category_id') == $c->id ? 'selected':'' }}>{{ $c->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer py-3">
                                <button type="submit" class="btn btn-dark pull-right"><i class="fa fa-save mr-1"></i> Save changes</button>
                                <a href="{{ route('jokes.index') }}" class="btn btn-default pull-right mr-1">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection