<section id="commentbox">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="comment_area mb-50 clearfix">
                    {{-- <h5 class="title">{{ $comments->total() }} Bình luận</h5> --}}
                    <ol>
                        <li class="single_comment_area" v-for="(comment, key) in comments">
                            <div class="comment-content d-flex">
                                <div class="comment-author">
                                    <img class="w-100 img-fluid"
                                        src="{{ asset('template/assets/img/comment/comment_1.png') }}"
                                        alt="author">
                                </div>
                                <div class="comment-meta">
                                    <a href="#" class="post-date" v-text="comment.created_at">
                                    </a>
                                    <h5>@{{ comment.name }} <small v-text="comment.email"></small></h5>
                                    <p v-text="comment.content"></p>
                                    <a href="#" class="like">Thích</a>
                                    <a href="#" class="reply">Phản Hồi</a>
                                </div>
                            </div>
                            {{-- @if (!empty($comment->replies) && $comment->replies->isNotEmpty())
                                <ol class="children">
                                    <li class="single_comment_area">
                                        <div class="comment-content d-flex">
                                            <div class="comment-author">
                                                <img class="w-100 img-fluid"
                                                    src="{{ asset('template/assets/img/comment/comment_2.png') }}"
                                                    alt="author">
                                            </div>
                                            <div class="comment-meta">
                                                <a href="#" class="post-date">27 Aug 2024</a>
                                                <h5>Theodore Adkins</h5>
                                                <p>I started watching this by accident and it's so funny. Anya is
                                                    possibly the cutest anime character I've seen in a while (and
                                                    not in
                                                    that cutesy anime ick way). I really want them to be a family in
                                                    the
                                                    end, even if the mission fails. </p>
                                                <a href="#" class="like">Like</a>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                        </div>
                                    </li>
                                </ol>
                            @endif --}}
                        </li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="app-poster d-none d-lg-block">
                    <img src="{{ asset('template/assets/img/collection/news_card.jpg') }}" alt>
                    <div class="app_overlay">
                        <ul class="d-flex flex-wrap justify-content-between">
                            <li class="mr-1"><a href="#">
                                    <img class="w-100" src="{{ asset('template/assets/img/app/app1.png') }}" alt>
                                </a></li>
                            <li class="ml-1"><a href="#">
                                    <img class="w-100" src="{{ asset('template/assets/img/app/app2.png') }}" alt>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="comment-form">
                    <h4>Bình Luận</h4>
                    <form class="form-contact comment_form" action="#" id="commentForm" @submit.prevent="postComment">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" v-model="commentForm.content" name="content" id="content" cols="30" rows="9"
                                        placeholder="Viết Bình luận"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text" v-model="commentForm.name"
                                        placeholder="Tên">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email-comment" type="email" v-model="commentForm.email"
                                        placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Gửi Bình Luận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@push('js_bot_all')
    <script>
        var url = {
            listComments: '{{ route('api_comments_get', ['object_id' => $mangaID]) }}',
            postComment: '{{ route('api_comments_post', ['object_id' => $mangaID]) }}',
        }
    </script>
    <script src="{{ asset('js/comment_box.js') }}"></script>
    <script>
        Pusher.logToConsole = true;

        var pusher = new Pusher('fa037a4bac2cb6548e51', {
            cluster: 'ap1'
        });
        var channel = pusher.subscribe('notification_manga_{{ $mangaID }}');
        channel.bind('App\\Ship\\Events\\PusherCommentMangaNotication', function(data) {
            console.log(JSON.parse(data.message));
            boxComments.addComment(JSON.parse(data.message));
        });
    </script>
@endpush