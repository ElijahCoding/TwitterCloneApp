@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="timeline">
        <div class="col-md-4">
          <form action="#">
              <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="What are you upto?" maxlength="140" required></textarea>
              </div>
              <input type="submit" value="Post" class="form-control">
          </form>
        </div>

        <div class="col-md-8">
            timeline
        </div>
    </div>
</div>
@endsection
