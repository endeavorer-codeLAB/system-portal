@extends('layouts.home-temp')

@section('content')

@foreach ($programs as $program)
<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <div class="featured-block d-flex justify-content-center align-items-center">
                            <a href="{{$program->link}}" class="d-block" target="_blank">
                                <img src="{{ asset('storage/img/'.$program->image) }}" class="featured-block-image img-fluid" width=250 height="250" alt="">

                                
                            </a>
                        </div>
                    </div>
@endforeach


@endsection
