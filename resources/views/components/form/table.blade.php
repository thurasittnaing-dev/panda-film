@props([
    'label' => 'Total',
    'total' => '0',
    'headers' => [],
    'button' => '',
    'tbody' => '',
    'tfooter' => '',
])


<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <div>
                {{ $label }} <span class="badge badge-sm bg-dark">{{ $total }}</span>
            </div>

            <div>
                {{ $button }}
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-bordered">
            <thead>
                <tr>
                    @forelse ($headers as $header)
                        <th scope="col">{{ $header }}</th>
                    @empty
                    @endforelse
                </tr>
            </thead>
            <tbody>
                {{ $tbody }}
            </tbody>
        </table>
    </div>


    @if ($tfooter != '')
        <div class="card-footer">
            {{ $tfooter }}
        </div>
    @endif
</div>
