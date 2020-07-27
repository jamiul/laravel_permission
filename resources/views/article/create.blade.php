@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Article') }}</div>

                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="articleTitle"></label>
                            <input type="text" class="form-control" id="articleTitle" placeholder="Title">
                          </div>
                          <div class="form-group">
                            <label for="articleBody"></label>
                            <textarea class="form-control" id="articleBody" placeholder="Body" rows="3"></textarea>
                          </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection