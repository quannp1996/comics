@extends('appSection@frontEnd::' . $template . '.index')
@section('content')
    <section id="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index-2.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="manga_all.html">All Mangas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ $manga->desc->title }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="manga_single_page" class="pt-50 pb-20">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="manga_name text-start">
                        <h2 id="manga_title">{{ $manga->desc->title }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <img class="w-100 img-fluid" id="manga_avatar" src="{{ $manga->getImageURL() }}" alt>
                </div>
                <div class="col-lg-6">
                    <form class="form-1 mb-3 mt-3">
                        <div class="form-field">
                            <select id="glsr-ltr" class="star-rating">
                                <option value>Select a rating</option>
                                <option value="5">5</option>
                                <option value="4">4</option>
                                <option value="3">3</option>
                                <option value="2">2</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                    </form>
                    <div class="manga_info">
                        <ul>
                            <li class="d-flex flex-wrap">
                                <h6>Rating</h6>
                                <p>Average 4 / 5 out of 87</p>
                            </li>
                            <li class="d-flex flex-wrap">
                                <h6>Rank </h6>
                                <p>N/A, it has 333.4K views </p>
                            </li>
                            <li class="d-flex flex-wrap">
                                <h6>Alternative </h6>
                                <p>女子学院的男生 ; Boy in A Girls' School ; Nuzi Xueyuan de Nansheng</p>
                            </li>
                            <li class="d-flex flex-wrap">
                                <h6>Genre(s) </h6>
                                <p>
                                    <a href="genres.html">Comedy</a>,
                                    <a href="genres.html">Harem</a>,
                                    <a href="genres.html">Romance</a>,
                                    <a href="genres.html">School life</a>,
                                    <a href="genres.html">Shounen</a>,
                                    <a href="genres.html">Slice of life</a>
                                </p>
                            </li>
                            <li class="d-flex flex-wrap">
                                <h6>Type </h6>
                                <p>Author(s) Chu dao manhua </p>
                            </li>
                            <li class="d-flex flex-wrap watch">
                                <a class="mr-2" href="chapter/chapter.html">Read First</a><a
                                    href="chapter/chapter06.html">Read Last</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="manga_info">
                        <ul>
                            <li class="d-flex mt-3">
                                <h6>Status </h6>
                                <p>OnGoing </p>
                            </li>
                            <li class="d-flex">
                                <div class="feedback_box">
                                    <a href="#commentbox">
                                        <i class="fa-solid fa-comments"></i>
                                        <h6>12 Comments</h6>
                                    </a>
                                </div>
                                <div class="feedback_box">
                                    <a href="#">
                                        <i class="fa-solid fa-bookmark"></i>
                                        <h6>Bookmark
                                        </h6>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-tittle mt-30 mb-30">
                        <h3>Summary</h3>
                    </div>
                    <div class="manga_info">
                        {!! $manga->desc->short_description !!}
                        <button onclick="if (!window.__cfRLUnblockHandlers) return false; myFunction()" id="read_more"
                            data-cf-modified-0aed7d38685d74f86d4aea97->Read more</button>
                        <script type="0aed7d38685d74f86d4aea97-text/javascript">
                        function myFunction() {
                            var dots = document.getElementById("dots");
                            var moreText = document.getElementById("more");
                            var btnText = document.getElementById("read_more");

                            if (dots.style.display === "none") {
                                dots.style.display = "inline";
                                btnText.innerHTML = "Read more";
                                moreText.style.display = "none";
                            } else {
                                dots.style.display = "none";
                                btnText.innerHTML = "Read less";
                                moreText.style.display = "inline";
                            }
                        }
                    </script>
                    </div>
                    <div class="manga_info">
                        <div class="section-tittle mt-30 mb-30">
                            <h3>LATEST MANGA RELEASES</h3>
                        </div>
                        <ul class="chapter mb-3">
                            @if (!empty($manga->chapters) && $manga->chapters->isNotEmpty())
                                @foreach ($manga->chapters as $chapter)
                                    <li>
                                        <a href="chapter/chapter.html" class="d-flex flex-wrap justify-content-between">
                                            <span>{{ $chapter->title }}</span><span>
                                                {{ $chapter->created_at ? $chapter->created_at->format('d/m/Y') : 'Đang cập nhật' }}
                                            </span>
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-tittle mb-30 mt-30">
                        <h3>Related Manga</h3>
                    </div>
                    <a href="#">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img class="play" src="{{ asset('template/assets/img/manga/small8.jpg') }}" alt>
                                <div class="overlay_play2">
                                    <i class="fa-solid fa-heart"> 61M</i>
                                </div>
                            </div>
                            <div class="trand-right-cap">
                                <h4>My Aunt </h4>
                                <ul class="d-flex flex-wrap star">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                                <div class="tag2 d-flex flex-wrap">
                                    <h6>Genre:</h6>
                                    <ul class="d-flex flex-wrap">
                                        <li>Action,</li>
                                        <li>Comedy,</li>
                                        <li>Drama,</li>
                                        <li>Supernatural</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img class="play" src="{{ asset('template/assets/img/manga/small9.jpg') }}" alt>
                                <div class="overlay_play2">
                                    <i class="fa-solid fa-heart"> 89M</i>
                                </div>
                            </div>
                            <div class="trand-right-cap">
                                <h4>Son-in-Law Does Cheap Cultivation </h4>
                                <ul class="d-flex flex-wrap star">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                </ul>
                                <div class="tag2 d-flex flex-wrap">
                                    <h6>Genre:</h6>
                                    <ul class="d-flex flex-wrap">
                                        <li>Action,</li>
                                        <li>Comedy,</li>
                                        <li>Drama,</li>
                                        <li>Supernatural</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img class="play" src="{{ asset('template/assets/img/manga/small10.jp') }}g" alt>
                                <div class="overlay_play2">
                                    <i class="fa-solid fa-heart"> 99M</i>
                                </div>
                            </div>
                            <div class="trand-right-cap">
                                <h4>Gedou Tenisha no Harem Dungeon Seisakuki </h4>
                                <ul class="d-flex flex-wrap star">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star-half-stroke"></i></li>
                                    <li><i class="fa-regular fa-star"></i></li>
                                </ul>
                                <div class="tag2 d-flex flex-wrap">
                                    <h6>Genre:</h6>
                                    <ul class="d-flex flex-wrap">
                                        <li>Action,</li>
                                        <li>Comedy,</li>
                                        <li>Drama,</li>
                                        <li>Supernatural</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#">
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img class="play" src="{{ asset('template/assets/img/manga/small11.jp') }}g" alt>
                                <div class="overlay_play2">
                                    <i class="fa-solid fa-heart"> 61M</i>
                                </div>
                            </div>
                            <div class="trand-right-cap">
                                <h4>Kanojo, Okarishimasu </h4>
                                <ul class="d-flex flex-wrap star">
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                    <li><i class="fa-solid fa-star"></i></li>
                                </ul>
                                <div class="tag2 d-flex flex-wrap">
                                    <h6>Genre:</h6>
                                    <ul class="d-flex flex-wrap">
                                        <li>Action,</li>
                                        <li>Comedy,</li>
                                        <li>Drama,</li>
                                        <li>Supernatural</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <x-comments-box :mangaID="$manga->id"></x-comments-box>
@endsection
@push('js_bot_all')
    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('fa037a4bac2cb6548e51', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('notification_manga_{{ $manga->id }}');
        channel.bind('App\\Ship\\Events\\PusherMangaNotication', function(data) {
            $('#manga_title').text(data.message);
        });
    </script>
@endpush
