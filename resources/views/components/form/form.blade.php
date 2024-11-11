@props([
    'title' => '',
    'route' => '',
    'method' => 'GET',
    'label' => 'Submit',
])


<div class="card card-primary card-outline mb-4">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <div class="card-title">{{ $title }}</div>
            <div>

            </div>
        </div>
    </div>
    <form action="{{ $route }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}" autocomplete="off"
        {{ $attributes }} enctype="multipart/form-data">
        @csrf
        @method($method)

        <div class="card-body">
            {{ $slot }}
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="{{ url()->previous() }}" class="btn me-2">Back</a>
            <button type="button" class="btn btn-dark prevent-submit-btn">{{ $label }}</button>
        </div>
    </form>
</div>
