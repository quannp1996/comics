<div class="section-tittle mb-30">
    <h3>RECENT RELEASE</h3>
</div>
@if (!empty($manges) && $manges->isNotEmpty())
    @foreach ($manges as $manga)
        <a href="{{ $manga->getLinkDetail()  }}">
            <div class="trand-right-single d-flex">
                <div class="trand-right-img">
                    <img class="play" style="width: 100%; height: 10px;" src="{{ $manga->getImageURL() }}" alt>
                    <div class="overlay_play2">
                        <i class="fa-solid fa-heart"> 61M</i>
                    </div>
                </div>
                <div class="trand-right-cap">
                    <h4>{{ $manga->desc->title }} </h4>
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
    @endforeach
@endif
