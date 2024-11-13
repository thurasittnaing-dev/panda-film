@props([
    'title' => 'Search',
    'route' => '#',
])

<div class="cat-card">
    <div class="d-flex justify-content-between mb-4">
        <div class="cat-title">
            <div class="label-badge"></div>{{ $title }}
        </div>
        <div>
            <a href="{{ $route }}" class="btn btn-sm btn-dark cat-btn"><i class="bi bi-arrow-right-short"></i> See
                More</a>
        </div>
    </div>

    {{ $slot }}
</div>
