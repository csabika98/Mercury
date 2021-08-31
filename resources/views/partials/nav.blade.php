@foreach ($pages as $page)

<li class="nav-item">
    <a href="{{ $page->url }}" class="nav-link" role="button" aria-expanded="false">{{ $page->title }}</a>
</li>







@endforeach