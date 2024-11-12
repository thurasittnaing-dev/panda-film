@props([
    'label' => 'Search',
])


<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <div class="card-title">Filter</div>
            <div>

            </div>
        </div>
    </div>
    <form action="{{ url()->current() }}" method="GET" autocomplete="off">
        @csrf

        <div class="card-body">

            {{ $slot }}


            <div class="d-flex justify-content-end">
                <a href="{{ url()->current() }}" class="btn me-2">Clear</a>
                <button type="submit" class="btn btn-dark">{{ $label }}</button>
            </div>
        </div>
    </form>
</div>
