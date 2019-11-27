@extends('backEnd.layouts.master')
@section('title','Main page image ')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ url('admin/carousel') }}" class="current">Main page image</a></div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Main Image List</h5>
                <h5 style="color:green"><a style="color:red" href="{{ route('carousels.create') }}">Create main page image</a></h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($carousel as $c)
                        <tr class="gradeC">
                            <td>{{$loop->iteration}}</td>
                            <td style="text-align: center;"><img src="{{asset('images/'.$c->image)}}" alt="olexstores" width="50"></td>
                            <td style="text-align: center; vertical-align: middle;">
                                <a href="#myModal{{$c->id}}" data-toggle="modal" class="btn btn-info btn-mini">View</a>
                                <a href="{{ route('carousels.edit', $c->id)}}" class="btn btn-primary btn-mini">Edit</a>
                                <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" rel="{{$c->id}}" rel1="delete-product" class="btn btn-danger btn-mini deleteRecord">Delete</a>
                                <form method="post" action="{{ route('carousels.destroy', $c->id)}}" enctype="multipart/form-data">
                                  @METHOD('DELETE')
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">        
                                </form>
                            </td>
                        </tr>
                        {{--Pop Up Model for View Product--}}
                        <div id="myModal{{$c->id}}" class="modal hide">
                            <div class="modal-header">
                                <button data-dismiss="modal" class="close" type="button">×</button>
                                <h3>{{$c->title}}</h3>
                            </div>
                            <div class="modal-body">
                                <div class="text-center"><img src="{{asset('images/'.$c->image)}}" width="250" alt="{{$c->title}}"></div>
                                <p class="text-center">{{$c->body}}</p>
                            </div>
                        </div>
                        {{--Pop Up Model for View Product--}}
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <script>
        $(".deleteRecord").click(function () {
            var id=$(this).attr('rel');
            var deleteFunction=$(this).attr('rel1');
            swal({
                title:'Are you sure?',
                text:"You won't be able to revert this!",
                type:'warning',
                showCancelButton:true,
                confirmButtonColor:'#3085d6',
                cancelButtonColor:'#d33',
                confirmButtonText:'Yes, delete it!',
                cancelButtonText:'No, cancel!',
                confirmButtonClass:'btn btn-success',
                cancelButtonClass:'btn btn-danger',
                buttonsStyling:false,
                reverseButtons:true
            },function () {
                window.location.href="/admin/"+deleteFunction+"/"+id;
            });
        });
    </script>
@endsection