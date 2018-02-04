@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" id="timeline">
        <div class="col-md-4">
          <form action="#" v-on:submit.prevent="postStatus">
              <div class="form-group">
                  <textarea
                  class="form-control"
                  rows="5"
                  placeholder="What are you upto?"
                  maxlength="140"
                  required
                  v-model="post"
                  ></textarea>
              </div>
              <input type="submit" value="Post" class="form-control">
          </form>
        </div>

        <div class="col-md-8">
            <div class="posts">
              <div class="media">
                <div class="media-left">
                  <img class="media-object" src="" />
                </div>
                <div class="media-body">
                  <div class="user">
                    <a href="#"><strong>Alex</strong></a>
                  </div>
                  <p>bla blabl </p>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection
