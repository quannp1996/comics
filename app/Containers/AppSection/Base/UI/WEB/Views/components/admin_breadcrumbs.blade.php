<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{ $title }}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    @foreach ($breadcrumbs as $item)
                        <li class="breadcrumb-item {{ $loop->index == 0 ? 'active' : '' }}">
                            <a href="{{ @$item['href'] }}">{{ @$item['lable'] }}</a>
                        </li>
                    @endforeach
                </ol>
            </div>
        </div>
    </div>
</section>
