@extends('appSection@base::admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $manga->desc->title }}</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($chapters as $chapter)
                            <div class="col-sm-2">
                                <div class="card">
                                    <div class="card-header text-center">
                                        <strong>{{ $chapter->title }}</strong>
                                    </div>
                                    <div class="card-body">
                                        <a href="javascript:;" class="fancybox-trigger" data-index="{{ $chapter->id }}">
                                            <img class="img-bordered-sm img-fluid"
                                                src="{{ asset('admin/images/book.jpg') }}" alt="">
                                        </a>
                                    </div>
                                    <div class="card-footer">
                                        <button class="btn btn-danger rounded-0">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                        <button class="btn btn-success rounded-0 fancybox-trigger"
                                            data-index="{{ $chapter->id }}">
                                            {{ $chapter->images->count() }}
                                            <i class="fa fa-images"></i>
                                        </button>
                                        <button class="btn btn-warning" type="button">
                                            <i class="fa fa-list"></i>
                                        </button>
                                        <a class="btn btn-info">
                                            <i class="fa fa-eye"></i>
                                            {{ (int) $chapter->views }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div id="lightbox_{{ $chapter->id }}" class="fancybox-content">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        @foreach ($chapter->images as $image)
                                            <div class="swiper-slide">
                                                <div>
                                                    <img src="{{ asset('admin/images/loading.gif') }}"
                                                        data-src="{{ $image->source }}" class="img-fluid lazy"
                                                        alt="">
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="card-footer text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @for($i = 1; $i <= $chapters->lastPage(); $i++)
                                <li class="page-item {{ $i == $chapters->currentPage() ? 'active' : '' }}"><a class="page-link" href="{{ $chapters->url($i) }}">{{ $i }}</a></li>
                            @endfor
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js_bot_all')
    <script type="text/javascript">
        $(document).ready(function() {
            var mySwiper = new Swiper('.mySwiper', {
                autoHeight: true,
            })
            $('.fancybox-trigger').click(function(e) {
                e.preventDefault();
                var thisTarget = $(this).data('index');
                $.fancybox.open({
                    src: `#lightbox_${thisTarget}`,
                    type: 'inline',
                    opts: {
                        toolbar: false,
                        defaultType: 'inline',
                        autoFocus: true,
                        touch: false,
                    }
                })
            })
        });
    </script>
@endpush
@push('css_bot_all')
    <style>
        .image {
            display: inline-block;
        }

        .swiper-slide {
            img {
                width: 100%;
            }

            video {
                width: 100%;
            }
        }

        .fancybox-content {
            display: none;
            width: 50%;
        }

        .swiper-container {
            width: 100%;
        }

        .swiper-slide {
            background-size: cover;
            background-position: 50%;
            min-height: 20vh;

            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
    </style>
@endpush
