<div class="card card-primary card-outline card-tabs">
    <div class="card-header">
        <h4>Thông tin chung</h4>
    </div>
    <div class="card-body">
        <ul class="nav nav-tabs" id="genaral-information-manga-tab" role="tablist">
            @foreach ($languages as $language)
                <li class="nav-item">
                    <a class="nav-link {{ $loop->index == 0 ? 'active' : '' }}"
                        id="managa-content-below-home{{ $language['id'] }}-tab" data-toggle="pill"
                        href="#managa-content-below-home{{ $language['id'] }}" role="tab"
                        aria-controls="managa-content-below-home{{ $language['id'] }}"
                        aria-selected="true">{{ $language['title'] }}</a>
                </li>
            @endforeach
        </ul>
        <div class="tab-content">
            @foreach ($languages as $language)
                <div class="{{ $loop->index == 0 ? 'tab-pane fade active show' : 'tab-pane fade' }}"
                    id="managa-content-below-home{{ $language['id'] }}" role="tabpanel"
                    aria-labelledby="genaral-information-manga-tab">
                    <fieldset class="border p-2">
                        <legend>Nội dung</legend>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Tiêu đề</label>
                            <input type="text" class="form-control"
                                name="manga_description[{{ $language['id'] }}][title]"
                                id="categoryTitle{{ $language['id'] }}"
                                value="{{ old('manga_description.' . $language['id'] . '.title', @$manga->desc->title) }}"
                                placeholder="Tiêu đề Truyện Tranh">
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.title')[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Mô tả Ngắn</label>
                            <textarea name="manga_description[{{ $language['id'] }}][short_description]" id="" cols="15" rows="5" class="form-control">{{ old('manga_description.' . $language['id'] . '.short_description', @$manga->desc->short_description) }}</textarea>
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.short_description')[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Mô tả</label>
                            <textarea name="manga_description[{{ $language['id'] }}][description]" id="" cols="15" rows="5" class="form-control">{{ old('manga_description.' . $language['id'] . '.description', @$manga->desc->description) }}</textarea>
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.description')[0] }}</small>
                        </div>
                    </fieldset>
                    <fieldset class="border p-2">
                        <legend>SEO</legend>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                Keyword</label>
                            <input type="text" class="form-control"
                                name="manga_description[{{ $language['id'] }}][meta_keyword]"
                                id="categoryTitle{{ $language['id'] }}"
                                value="{{ old('manga_description.' . $language['id'] . '.meta_keyword', @$manga->desc->meta_keyword) }}"
                                placeholder="Mô tả Truyện Tranh">
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.meta_keyword')[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                Title</label>
                            <input type="text" class="form-control"
                                name="manga_description[{{ $language['id'] }}][meta_title]"
                                value="{{ old('manga_description.' . $language['id'] . '.meta_title', @$manga->desc->meta_title) }}"
                                id="categoryTitle{{ $language['id'] }}" placeholder="Mô tả Truyện Tranh">
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.meta_title')[0] }}</small>
                        </div>
                        <div class="form-group">
                            <label for="categoryTitle{{ $language['id'] }}">Meta
                                Description</label>
                            <textarea class="form-control" placeholder="Meta Description"
                                name="manga_description[{{ $language['id'] }}][meta_description]" id="" cols="20" rows="5">{{ old('manga_description.' . $language['id'] . '.meta_description', @$manga->desc->meta_description) }}</textarea>
                            <small
                                class="text-danger">{{ @$errors->get('manga_description.' . $language['id'] . '.meta_description')[0] }}</small>
                        </div>
                    </fieldset>
                </div>
            @endforeach
        </div>
    </div>
</div>
