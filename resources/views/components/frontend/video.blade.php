@props([
    'src' => '',
    'name' => '',
    'year' => '',
    'route' => '',
])

<a href="">
    <div class="video-card">
        <img src="{{ $src }}" class="video-poster" alt="">
        <div class="video-name">{{ $name }}</div>
        <div class="video-year">{{ $year }}</div>
    </div>
</a>
