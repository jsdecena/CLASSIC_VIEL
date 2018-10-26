<li class="level0 level-top parent-dropdown">
    <a @if(request()->segment(2) == $category->slug) class="active" @endif href="{{route('front.category.slug', $category->slug)}}" class="level-top" id="{{$category->slug}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">{{$ <span class="caret"></span></a>
    <ul class="level0 menu-dropdown shown-sub" style="opacity: 1; display: none;" aria-labelledby="{{$category->slug}}">
        @foreach($subs as $sub)
            <li><a href="{{route('front.category.slug', $sub->slug)}}">{{$sub->name}</a></li>
        @endforeach
    </ul>
</li>
