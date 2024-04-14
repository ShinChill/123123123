@once
    @push('header')
        <style>
            .absolute {
                position: absolute;
            }

            .list-film li:nth-child(even) {
                background: rgb(24 24 24);
            }
            .most-view .list-film .item .number-rank {
                background: #c58560 !important;
            }
            .most-view .list-film .item a:hover, .list-film .film-item-ver .name a:hover {
                color: #da966e;
            }
            .most-view .tabs .tab:hover {
                background: #333;
            }
            .title-box .tophot,.right-content .block .caption {
                color: #da966e;
            }

            .main-content .right-content {
                width: 300px;
                float: right;
            }
            .right-content .widget {
                margin: 0 0 10px 0;
            }

            .right-content .block {
                /*padding: 20px 10px;*/
                /*margin: 0 0 20px 0;*/
                /*width: 300px;*/
                overflow: hidden;
            }

            .right-content .block .caption {
                margin: 0 0 10px 0;
                padding: 0 0 5px 0;
                color: #ff9601;
                border-bottom: 2px dashed #5d5d5d;
                font-size: 25px;
                font-family: 'roboto';
                font-weight: 300;
                text-transform: uppercase;
            }

            .right-content .block .caption .fa {
                margin: 0 5px 0 0;
            }

            .right-content .block .fb-page {
                max-height: 220px;
                overflow: hidden;
            }
            .right-content .most-view .fa-play {
                font-size: 9px;
                color: #0072bd;
                margin: 0 2px 0 0;
                position: absolute;
                left: 0;
                top: 10px;
            }

            .right-content .fb-like-box {
                background: #ffffff;
                border: 1px dashed #a0cce9;
            }
            .most-view .list-film .item {
                position: relative;
                padding: 5px 0 5px 35px;
            }

            .most-view .list-film .item:first-child {
                border-top: none;
            }

            .most-view .list-film .item .number-rank {
                background: #ff9601;
                color: #fff;
                font-weight: bold;
                left: 5px;
                top: 17px;
                width: 23px;
                height: 23px;
                line-height: 23px;
                text-align: center;
                font-size: 13px;
                border-radius: 15px;
            }

            .most-view .list-film .item a {
                color: #FFFFFF;
                font-size: 13px;
                font-weight: bold;
            }

            .most-view .list-film .item a:hover {
                color: #ff9601;
            }

            .most-view .list-film .item .count_view {
                color: #BABABA;
                font-size: 12px;
                margin: 3px 0 0 0;
                font-style: italic;
            }

            .most-view .tabs .tab {
                width: 33.33%;
                padding: 8px 0;
                float: left;
                border-radius: 0;
                text-align: center;
                font-weight: bold;
                cursor: pointer;
            }

            .most-view .tabs .tab:hover {
                color: #ffffff;
            }

            .most-view .tabs .tab.active {
                background-color: #5d5d5d;
            }

            .right-content .most-view .fa-play {
                font-size: 9px;
                color: #0072bd;
                margin: 0 2px 0 0;
                position: absolute;
                left: 0;
                top: 10px;
            }

            .most-view li {
                list-style: none;
            }

            .tabs .tab {
                display: inline-block;
                padding: 3px 15px;
                border-radius: 20px;
                color: #fff;
                margin: 0 0 10px;
                font-size: 13px;
            }
            .text-\[\#9f5b1b\] {
                --tw-text-opacity: 1;
                color: #9f5b1b;
                color: rgb(159 91 27/var(--tw-text-opacity))
            }

            .text-\[\#da966e\] {
                --tw-text-opacity: 1;
                color: #da966e;
                color: rgb(218 150 110/var(--tw-text-opacity))
            }

            .text-\[\#ff9658\] {
                --tw-text-opacity: 1;
                color: #ff9658;
                color: rgb(255 150 88/var(--tw-text-opacity))
            }

            .text-blue-600 {
                --tw-text-opacity: 1;
                color: #2563eb;
                color: rgb(37 99 235/var(--tw-text-opacity))
            }

            .text-gray-100 {
                --tw-text-opacity: 1;
                color: #f3f4f6;
                color: rgb(243 244 246/var(--tw-text-opacity))
            }

            .text-gray-200 {
                --tw-text-opacity: 1;
                color: #e5e7eb;
                color: rgb(229 231 235/var(--tw-text-opacity))
            }

            .text-gray-300 {
                --tw-text-opacity: 1;
                color: #d1d5db;
                color: rgb(209 213 219/var(--tw-text-opacity))
            }

            .text-gray-400 {
                --tw-text-opacity: 1;
                color: #9ca3af;
                color: rgb(156 163 175/var(--tw-text-opacity))
            }

            .text-gray-50 {
                --tw-text-opacity: 1;
                color: #f9fafb;
                color: rgb(249 250 251/var(--tw-text-opacity))
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: #6b7280;
                color: rgb(107 114 128/var(--tw-text-opacity))
            }

            .text-gray-600 {
                --tw-text-opacity: 1;
                color: #4b5563;
                color: rgb(75 85 99/var(--tw-text-opacity))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: #374151;
                color: rgb(55 65 81/var(--tw-text-opacity))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: #fff;
                color: rgb(255 255 255/var(--tw-text-opacity))
            }

            .text-yellow-500 {
                --tw-text-opacity: 1;
                color: #eab308;
                color: rgb(234 179 8/var(--tw-text-opacity))
            }

            .text-yellow-600 {
                --tw-text-opacity: 1;
                color: #ca8a04;
                color: rgb(202 138 4/var(--tw-text-opacity))
            }

            .text-zinc-200 {
                --tw-text-opacity: 1;
                color: #e4e4e7;
                color: rgb(228 228 231/var(--tw-text-opacity))
            }

            .text-zinc-300 {
                --tw-text-opacity: 1;
                color: #d4d4d8;
                color: rgb(212 212 216/var(--tw-text-opacity))
            }

            .text-zinc-400 {
                --tw-text-opacity: 1;
                color: #a1a1aa;
                color: rgb(161 161 170/var(--tw-text-opacity))
            }
            .custom-margin {
                margin: -6px;
            }

        </style>
    @endpush
@endonce

<div class="myui-panel clearfix right-content">
    <div class="myui-panel_hd">
        <div class="myui-panel__head active clearfix">
            <h3 class="title">{{ $top['label'] }}</h3><span class="icon icon-cinema"></span>
        </div>
    </div>

            <div class="myui-panel_bd">
            <div class="most-view block">
            <ul class="flex list-none mb-2 pt-2 flex-wrap flex-row">
                <li data-id="d" class="tab active -mb-px mr-2 cursor-pointer last:mr-0 flex-auto text-center bg-zinc-600">
                    <span class="text-base px-2 py-1 block text-gray-100 font-medium rounded-sm">Ngày</span>
                </li>
                <li data-id="w" class="tab -mb-px mr-2 cursor-pointer last:mr-0 flex-auto text-center">
                    <span class="text-base px-2 py-1 block text-gray-100 font-medium rounded-sm">Tuần</span>
                </li>
                <li data-id="m" class="tab -mb-px mr-2 cursor-pointer last:mr-0 flex-auto text-center">
                    <span class="text-base px-2 py-1 block text-gray-100 font-medium rounded-sm">Tháng</span>
                </li>
            </ul>

        <div class="clearfix"></div>
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded">
        <div class="px-2 py-3 flex-auto">
        <div class="tab-content tab-space custom-margin">
            @foreach ($top['data']['d'] as $key => $movie)
                <a href="{{$movie->getUrl()}}" title="{{$movie->name}}" class="item d grid items-center grid-cols-12 pb-2 over:shadow-xl transform group hover:opacity-80 hover:scale-105 duration-300 gapx-3">
                <div class="col-span-2">
                    <div class="text-gray-200 font-medium text-md hover:shadow-lg bg-[#c58560] w-7 h-7 inline-block rounded-full text-center" >{{ $loop->iteration }}</div>
                    </div>
                <div class="col-span-10 ml-1">
                    <span class="block text-gray-200 truncate capitalize" href="{{$movie->getUrl()}}" title="{{$movie->name}}">
                                {{$movie->name}}
                    </span>
            
                    <span class="text-xs text-gray-400">{{ motchill_format_view($movie->view_day) }} lượt xem</span>
                </div>
               </a>
            @endforeach

            @foreach ($top['data']['w'] as $key => $movie)
                <a href="{{$movie->getUrl()}}" title="{{$movie->name}}" class="item w grid items-center grid-cols-12 pb-2 over:shadow-xl transform group hover:opacity-80 hover:scale-105 duration-300 gapx-3" style="display: none">
                <div class="col-span-2">
                    <div class="text-gray-200 font-medium text-md hover:shadow-lg bg-[#c58560] w-7 h-7 inline-block rounded-full text-center" >{{ $loop->iteration }}</div>
                    </div>
                <div class="col-span-10 ml-1">
                    <span class="block text-gray-200 truncate capitalize" href="{{$movie->getUrl()}}" title="{{$movie->name}}">
                                {{$movie->name}}
                    </span>
            
                    <span class="text-xs text-gray-400">{{ motchill_format_view($movie->view_week) }} lượt xem</span>
                </div>
               </a>
            @endforeach

            @foreach ($top['data']['m'] as $key => $movie)
                <a href="{{$movie->getUrl()}}" title="{{$movie->name}}" class="item m grid items-center grid-cols-12 pb-2 over:shadow-xl transform group hover:opacity-80 hover:scale-105 duration-300 gapx-3" style="display: none">
                <div class="col-span-2">
                    <div class="text-gray-200 font-medium text-md hover:shadow-lg bg-[#c58560] w-7 h-7 inline-block rounded-full text-center" >{{ $loop->iteration }}</div>
                    </div>
                <div class="col-span-10 ml-1">
                    <span class="block text-gray-200 truncate capitalize" href="{{$movie->getUrl()}}" title="{{$movie->name}}">
                                {{$movie->name}}
                    </span>
            
                    <span class="text-xs text-gray-400">{{ motchill_format_view($movie->view_month) }} lượt xem</span>
                </div>
               </a>
            @endforeach
        </div>
        </div>
        </div>
        </div>
    </div>

    <script>
$(document).ready(function () {
    $(".most-view .tab").click(function () {
        var type = $(this).attr('data-id');
        
        // Xóa lớp active của tất cả các tab
        $(".most-view .tab").removeClass('active');
        $(".most-view .tab").removeClass('bg-zinc-600'); // Xóa lớp bg-zinc-600 khỏi tất cả các tab
        // Thêm lớp active cho tab được click
        $(this).addClass('active');
        $(this).addClass('bg-zinc-600'); // Thêm lớp bg-zinc-600 cho tab được click

        // Ẩn tất cả các phần tử chứa thông tin phim
        $(".most-view .item").hide();
        
        // Hiển thị phần tử chứa thông tin phim tương ứng với loại được chọn
        $(".most-view .item." + type).show();
    })
})


    </script>
</div>
