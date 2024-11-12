<x-form.filter>
    <div class="row">
        <div class="col-3">
            <input type="text" name="username" value="{{ request('username') }}" class="form-control"
                placeholder="Username">
        </div>

        <div class="col-3">
            <input type="text" name="fullname" value="{{ request('fullname') }}" class="form-control"
                placeholder="Fullname">
        </div>
    </div>
</x-form.filter>
