<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$action}}</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ $url }}">
                        {{ csrf_field() }}
                        {{method_field($method)}}
                        <div class="form-group{{ $errors->has('slug') ? ' has-error' : '' }}">
                            <label for="slug" class="col-md-4 control-label">Slug</label>

                            <div class="col-md-6">
                                <input id="slug" type="text" class="form-control" name="slug" value="{{ isset($category->slug) ? $category->slug : old('slug') }}" required autofocus>

                                @if ($errors->has('slug'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('slug') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('en.name') ? ' has-error' : '' }}">
                            <label for="en[name]" class="col-md-4 control-label">English Name</label>

                            <div class="col-md-6">
                                <input id="en[name]" type="text" class="form-control" name="en[name]" value="{{ isset($category->en_name) ? $category->en_name : old('en[name]') }}" required autofocus>

                                @if ($errors->has('en.name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('en.name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('ar.name') ? ' has-error' : '' }}">
                            <label for="ar[name]" class="col-md-4 control-label">Arabic Name</label>

                            <div class="col-md-6">
                                <input id="ar[name]" type="text" class="form-control" name="ar[name]" value="{{ isset($category->ar_name) ? $category->ar_name : old('ar[name]') }}" required autofocus>

                                @if ($errors->has('ar.name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('ar.name') }}</strong>
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