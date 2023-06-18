@extends('layouts.header')

@section('content')
    <!-- Start home-about Area -->

    <section class="contact-page-area mt-5">
        <div class="container">

            <div class="row">
                <div class="col-lg 8">
                    <div class="comments-area">
                        <h4>Chats</h4>
                        <div class="comment-list">
                            @foreach($chats as $chat)
                            <div class="single-comment justify-content-between d-flex">
                                <div class="user justify-content-between d-flex">
                                    <div class="thumb">
                                        <img src="{{ asset('storage/' . $chat->user->image) }}" alt="" width="80" height="40">
                                    </div>
                                    <div class="desc">
                                        <h5><a href="#">{{ $chat->user->name }} </a></h5>
                                        <p class="date">{{ $chat->created_at }}</p>
                                        <p class="comment">
                                            {{ $chat->message }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h4>
                        @include('partials.errors')
                    </h4>

                    <div class="single-sidebar-widget newsletter-widget">
                        <form action="{{ route('chats.store') }}" method="post">
                            @csrf
                        <div class="form-group">
                            <div class="col-md-12">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
                                <div class="row form-group">
                                    <label for="">Send Message</label>
                                    <textarea name="message" id="" cols="5" rows="3" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class=" row input-group form-group">
                                    <button type="submit" class="btn btn-warning">Send</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!-- End home-calltoaction Area -->
@endsection






