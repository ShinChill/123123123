<div class="myui-panel clearfix">
    <div class="myui-panel_hd">
        <div class="myui-panel__head active clearfix">
            <h3 class="title">{{ $top['label'] }}</h3><span class="icon icon-cinema"></span>
        </div>
    </div>
    <div class="myui-panel_bd">
        <ul class="myui-vodlist__media active col-pd ">
            @foreach ($top['data'] as $key => $movie)
                <li>
                    <div class="thumb border-zinc-800 border">
                        <a class="myui-vodlist__thumb img-xs-70"
                            style="background: url({{$movie->getThumbUrl()}});"
                            href="{{$movie->getUrl()}}" title="{{$movie->name}}">
                        </a>
                    </div>
                    <div class="detail detail-side border-zinc-800 border">
                    <h4 class="text-gray-300 text-[14px] font-medium" style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis; width: 120px;">
                            <a class="icon-btn" href="{{$movie->getUrl()}}">
                                {{$movie->name}}
                            </a>
                        </h4>

                        <span class="text-zinc-400 text-sm block">2024</span>
                        <p class="font-12"><span class="text-muted">{{$movie->episode_current}} {{$movie->language}}</span></p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>