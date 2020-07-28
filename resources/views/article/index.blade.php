@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    {{ __('Dashboard') }}
                    @hasrole('writer|admin')
                      <a type="button" href="{{ route('article.create') }}" class="btn btn-link">New Post</a>
                    @endhasrole
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table">
                        <tbody>
                          <tr>
                            <td>Cras justo odio Cras justo odio</td>
                            @can('edit post')
                              <td><a type="button" href="{{ route('article.create') }}" class="btn btn-link">Edit Post</a></td>
                            @endcan
                          </tr>
                        </tbody>
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection