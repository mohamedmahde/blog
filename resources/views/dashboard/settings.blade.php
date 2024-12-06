@extends('dashboard.layouts.app')

@section('title')
    الإعدادات
@endsection

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title"> {{ trans('dashboard.settings') }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" method="post" action="{{ route('settings.update') }}" enctype="multipart/form-data">
                            @csrf
                            {{-- @method('post') --}}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">logo</label>
                                    <input type="file" class="form-control" name="logo">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">fivicon </label>
                                    <input type="file" class="form-control" name="fivicon">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">facebook</label>
                                    <input type="text" class="form-control" name="facebook" value="">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">instagram</label>
                                    <input type="text" class="form-control" name="instagram">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">email</label>
                                    <input type="text" class="form-control" name="email">
                                </div>
                            </div>

        

                            @foreach (config('app.languages') as $key => $lang)
                                {{ $key }}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Title{{ $key }}</label>
                                <input type="text" class="form-control" name="{{ $key }}[Title]">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">content {{ $key }}< </label>
                                        <textarea name=" {{ $key }}[content]" class="form-control" ></textarea>
                            </div>

                            @endforeach



                    </div>

                    <hr>
                    </hr>




                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </form>
                </div>


            </div>

        </div>
        <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection
















