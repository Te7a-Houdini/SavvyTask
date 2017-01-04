<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$action}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ $url }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{method_field($method)}}


                        <div class="form-group{{ $errors->has('en.title') ? ' has-error' : '' }}">
                            <label for="en[title]" class="col-md-4 control-label">English Title</label>

                            <div class="col-md-6">
                                <input id="en[title]" type="text" class="form-control" name="en[title]" value="{{ isset($post->translate('en')->title) ? $post->translate('en')->title : old('en.title') }}" required autofocus>

                                @if ($errors->has('en.title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en.title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ar.title') ? ' has-error' : '' }}">
                            <label for="ar[title]" class="col-md-4 control-label">Arabic Title</label>

                            <div class="col-md-6">
                                <input id="ar[title]" type="text" class="form-control" name="ar[title]" value="{{ isset($post->translate('ar')->title) ? $post->translate('ar')->title : old('ar.title') }}" required autofocus>

                                @if ($errors->has('ar.title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ar.title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('en.description') ? ' has-error' : '' }}">
                            <label for="en[description]" class="col-md-4 control-label">English Description</label>

                            <div class="col-md-6">

                                <textarea id="en[description]"  class="form-control" name="en[description]"  required autofocus>
                                {{ isset($post->translate('en')->description) ? $post->translate('en')->description : old('en.description') }}
                                 </textarea>

                                @if ($errors->has('en.description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en.description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ar.description') ? ' has-error' : '' }}">
                            <label for="ar[description]" class="col-md-4 control-label">Arabic Description</label>

                            <div class="col-md-6">

                                <textarea id="ar[description]"   class="form-control" name="ar[description]"  required autofocus>
                                {{ isset($post->translate('ar')->description) ? $post->translate('ar')->description : old('ar.description') }}
                                </textarea>

                                @if ($errors->has('ar.description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ar.description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }}">
                            <label for="category_id" class="col-md-4 control-label">Category</label>

                            <div class="col-md-6">
                                <select id="category_id" name="category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" {{ isset($post->category_id) ? ( ($category->id == $post->category_id) ? 'selected' : '') : ''}} >
                                            {{$category->slug}}
                                        </option>
                                     @endforeach

                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('category_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('image_url') ? ' has-error' : '' }}">
                            <label for="image_url" class="col-md-4 control-label">Image</label>

                            <div class="col-md-6">
                                <input id="image_url" type="file" class="form-control" name="image_url" value="{{ isset($post->image_url) ? $post->image_url: old('image') }}"  autofocus>

                                @if ($errors->has('image_url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image_url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    {{$action}}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>