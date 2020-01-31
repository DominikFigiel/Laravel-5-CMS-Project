
@if ($paginator->hasPages())
<nav class="flexbox mt-30">
    @if ($paginator->onFirstPage())
        <a class="btn btn-white disabled">@lang('pagination.previous')</a>
    @else
        <a href="{{ $paginator->previousPageUrl() }}" class="btn btn-white">@lang('pagination.previous')</a>
    @endif

    @if ($paginator->hasMorePages())
        <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-white">@lang('pagination.next')</a>
    @else
        <a class="btn btn-white disabled">@lang('pagination.next')</a>
    @endif
    
</nav>
@endif