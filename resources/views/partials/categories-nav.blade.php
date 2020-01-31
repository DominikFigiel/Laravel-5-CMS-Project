@if($categories->count() > 0)
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
@else
<li class="nav-item">
    <a class="nav-link" href="#">Categories <span class="arrow"></span></a>
    <nav class="nav">
        <a class="nav-link" href="#">
            No Categories
        </a>
    </nav>
</li>
@endif
