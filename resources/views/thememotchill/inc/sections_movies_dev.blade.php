<ul class="film-moi tab-content">
        @foreach ($item['data'] as $key => $movie)
            @php
                $xClass = 'item';
                if ($key === 0 || $key % 4 === 0) {
                    $xClass .= ' no-margin-left';
                }
            @endphp
            @include('themes::thememotchill.inc.sections_movies_item_dev')
        @endforeach
</ul>


