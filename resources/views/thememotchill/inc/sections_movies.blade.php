<style>
    .pb-2 {
    padding-bottom: 0.5rem;
    margin: 5px;
}
</style>
<div class="relative">
    <div class="flex gap-x-3 pb-2">
        <h2
            class="text-xl font-normal text-[#da966e] uppercase block">
            {{ $item['label'] }}</h2>
            <a class="absolute right-0 text-gray-300 bg-[#9f5b1b] text-xs py-1.5 top-0 px-3 rounded-md flex items-center" href="{{ $item['link'] }}">
                <span>Xem Thêm</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5"></path>
                    </svg>
            </a>
    </div>
    <div class="grid grid-cols-2 gap-x-3 gap-y-4 md:grid-cols-4 pt-3">
        @foreach ($item['data'] as $key => $movie)
            @php
                $xClass = 'item';
                if ($key === 0 || $key % 4 === 0) {
                    $xClass .= ' no-margin-left';
                }
            @endphp
            @include('themes::thememotchill.inc.sections_movies_item')
        @endforeach
    </div>
</div>
