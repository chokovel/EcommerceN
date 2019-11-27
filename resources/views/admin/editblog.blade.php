@extends('backEnd.layouts.master')
@section('title','Edit Blog Post')
@section('content')
    <div id="breadcrumb"> <a href="{{url('/admin')}}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="{{ route('blogs.index')}}">Blog</a> <a href="#" class="current">Edit Post</a> </div>
    <div class="container-fluid">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done! &nbsp;</strong>{{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"> <i class="icon-align-justify"></i> </span>
                <h5>Edit Post</h5>
            </div>
            <div class="widget-content nopadding">
                <form action="{{route('blogs.update', $b->id)}}" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    {{method_field("PUT")}}
                    <div class="control-group">
                        <label class="control-label">Select Category</label>
                        <div class="controls">
                            <select name="category" style="width: 415px;">
                            <option>Please select</option>
                        <option 
                        @if($b->category == 'Fashion')
                        selected @endif
                        >Fashion</option>
                        <option 
                        @if($b->category == 'Lifestyle')
                        selected @endif
                        >Lifestyle</option>
                        <option 
                        @if($b->category == 'Celebrities')
                        selected @endif
                        >Celebrities</option>
                        <option 
                        @if($b->category == 'Insight')
                        selected @endif
                        >Insight</option>
                        <option 
                        @if($b->category == 'Beauty and Health')
                        selected @endif
                        >Beauty and Health</option>
                        <option 
                        @if($b->category == 'Others')
                        selected @endif
                        >Others</option>
                            </select>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="title" class="control-label">Post title</label>
                        <div class="controls{{$errors->has('title')?' has-error':''}}">
                            <input type="text" name="title" id="title" class="form-control" value="{{ $b->title }}" title="post title" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('title')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="date" class="control-label">Date</label>
                        <div class="controls{{$errors->has('date')?' has-error':''}}">
                            <input type="date" name="date" id="date" class="form-control" value="{{ $b->date }}" title="date" required="required" style="width: 400px;">
                            <span class="text-danger">{{$errors->first('date')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="body" class="control-label">Description</label>
                        <div class="controls{{$errors->has('body')?' has-error':''}}">
                            <textarea class="textarea_editor span12" name="body" id="body" rows="6" placeholder="Please paste using ctrl+shift+v or type in directly ..." value="{{ $b->body }}" style="width: 580px;">
                            @if(isset($b->body))
                                {{ $b->body }}
                            @endif
                        </textarea>
                            <span class="text-danger">{{$errors->first('body')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="postby" class="control-label">Post by:</label>
                        <div class="controls{{$errors->has('postby')?' has-error':''}}">
                            <input type="text" name="postby" id="postby" value="{{ $b->postby }}" required="required">
                            <span class="text-danger">{{$errors->first('postby')}}</span>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label">Image upload</label>
                        <div class="controls">
                            <input type="file" name="image" id="image"/>
                            <span class="text-danger">{{$errors->first('image')}}</span>
                            @if($b->image!='')
                                &nbsp;&nbsp;&nbsp;
                                <img src="{{asset('images/'.$b->image)}}" width="35" alt="{{$b->title}}">
                            @endif
                        </div>
                    </div>
                    <div class="control-group">
                        <label for="" class="control-label"></label>
                        <div class="controls">
                            <button type="submit" class="btn btn-success">Update post</button>
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