@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <form action="{{ route('employee.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name">
                        </div>
                        <div class="form-group">
                            <label for="willing_to_work">Willing to Work</label>
                            <select class="form-control" id="willing_to_work" name="willing_to_work">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select>
                           
                        </div>
                        <div class="form-group">
                            <label for="languages_known">Languages Known</label>
                            <select class="form-control" id="languages_known" name="languages_known">
                                @foreach($languages as $language)
                                    <option value="{{ $language->id }}">{{ $language->language }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
