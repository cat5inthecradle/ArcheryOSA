@section ('dashboard')
    <h1></h1>
@endsection

@include('layouts.title', ['title'=>'Edit Club'])

@extends ('home')

@section ('content')
    {{-- <div class="container"> --}}
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update Club
                    <a href="{{route('clubs')}}">
                        <button type="submit" class="btn btn-default pull-right" id="addevent">
                            <i class="fa fa-backward" >  Back</i>
                        </button>
                    </a>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('updateclub', urlencode($club->first()->name)) }}">
                        {{ csrf_field() }}

                        <input type="text" name="clubid" hidden value="{{$club->first()->clubid}}">

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Club Name</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name', $club->first()->name) }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">URL</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="url" value="{{ old('url', $club->first()->url) }}" >

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('contactname') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Contact Person</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="contactname" value="{{ old('name', $club->first()->contactname) }}">

                                @if ($errors->has('contactname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contactname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input type="email" class="form-control" name="email" value="{{ old('email', $club->first()->email) }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="phone" value="{{ old('phone', $club->first()->phone) }}" >

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('street') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Street</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="street" value="{{ old('street', $club->first()->street) }}">

                                @if ($errors->has('street'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('street') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('suburb') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Suburb</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="suburb" value="{{ old('suburb', $club->first()->suburb) }}" >

                                @if ($errors->has('suburb'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('suburb') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="city" value="{{ old('city', $club->first()->city) }}">

                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Round Code</label>

                            <input type="text" hidden id="clubscountryvalue" value="{{old('country', $club->first()->country) }}">
                            <div class="col-md-4">
                                <select name="country" class="form-control" id="clubscountry">
                                    <option value="nz">New Zealand</option>
                                    <option value="au">Australia</option>
                                </select>
                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="event" class="col-md-4 control-label">Description</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="description" required autofocus >{{ old('description', $club->first()->description) }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label class="col-md-4 control-label">Visible</label>
                                <div class="col-md-6">
                                    <?php
                                        $status='';
                                        if ($club->first()->visible == 1) {
                                            $status = 'checked';
                                        }
                                    ?>
                                    <input type="checkbox" name="visible" {{$status}}>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}

@endsection

