@extends('appSection@base::admin.layouts.index')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex">
                    <h2>{{ $manga->desc->title }}</h2>&nbsp;&nbsp;
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#staticBackdrop">
                        <i class="fa fa fa-upload"></i>
                    </button>
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
                            @for ($i = 1; $i <= $chapters->lastPage(); $i++)
                                <li class="page-item {{ $i == $chapters->currentPage() ? 'active' : '' }}"><a
                                        class="page-link" href="{{ $chapters->url($i) }}">{{ $i }}</a></li>
                            @endfor
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <form action="">
            @csrf
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tải truyện</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="chapter_name">Tên chương</label>
                            <input type="text" name="chapter_name" id="chapter_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="chapter_images">Ảnh (file .zip)</label>
                            <input type="file" name="chapter_images" id="chapter_images" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                        <button type="button" class="btn btn-primary">
                            <i class="fa fa-upload"></i>
                            Tải lên
                        </button>
                    </div>
                </div>
            </div>
        </form>
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
