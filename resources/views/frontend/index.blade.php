@extends('layouts.frontend')

@section('content')

<section class="forum-page">

    <div class="container">

        <div class="forum-questions-sec">

            <div class="row">
                    <div class="col-lg-8">

                        <div class="forum-questions">

                            <?php for($i=0; $i<20; $i++) : ?>
                                {{--  @include('components/post-card')  --}}
                            <?php endfor; ?>

                        </div>

                        {{--  @include('partials/pagination/buttons')  --}}

                    </div>
                    <div class="col-lg-4">

                        {{--  @include('components/top-influencers')  --}}

                        {{--
                        <div class="widget widget-adver">
                            <img src="http://via.placeholder.com/370x270" alt="">
                        </div>
                        --}}

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
