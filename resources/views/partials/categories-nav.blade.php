@if($categories)
    <li class="nav-item">
        <a class="nav-link" href="#">Categories <span class="arrow"></span></a>
        <nav class="nav">
            @foreach ($categories as $category)
            <a class="nav-link" href="{{ route('blog.category', $category->id) }}">
                {{$category->name}}
            </a>
            @endforeach
        </nav>
    </li>
@endif
