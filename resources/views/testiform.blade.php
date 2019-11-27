@extends('backEnd.layouts.master')
@section('title','Add Testimonial')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ route('testimonies.index')}}">Testimonial</a> <a href="#" class="current">Add Testimonial</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Add Testimonial</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('testimonies.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="control-group">
                        <label class="control-label">Title</label>
                        <div class="controls">
                            <select name="title" style="width: 415px;">
                                <option>Please select ...</option>
                                <option>Happy Customer </option>
                                <option>Seller</option>
                                <option>Partner</option>
                                <option>Client</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="name" class="control-label">Full Name</label>
                        <div class="controls{{$errors->has('name')?' has-error':''}}">
                            <input type="text" name="name" id="name" class="form-control" value="{{old('name')}}" title="testimonial name" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('name')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="testimony" class="control-label">Testimony</label>
                        <div class="controls{{$errors->has('testimony')?' has-error':''}}">
                            <textarea class="textarea_editor span12"  name="testimony" id="testimony" rows="6" placeholder="Please paste using ctrl+shift+v or type in directly ..." style="width: 580px;">{{old('testimony')}}</textarea>
                            <span class="text-danger">{{$errors->first('testimony')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-colorpicker.js')}}"></script>
    <script src="{{asset('js/jquery.toggle.buttons.js')}}"></script>
    <script src="{{asset('js/masked.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.form_common.js')}}"></script>
    <script src="{{asset('js/wysihtml5-0.3.0.js')}}"></script>
    <script src="{{asset('js/jquery.peity.min.js')}}"></script>
    <script src="{{asset('js/bootstrap-wysihtml5.js')}}"></script>
    <script>
        $('.textarea_editor').wysihtml5();
    </script>
@endsection