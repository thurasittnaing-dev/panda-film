@extends('layouts.app')

@section('title', 'User Create')


@section('css')
@endsection

@section('content')
    <div class="py-3">
        <x-form.form :route="$route" :method="$method" :title="$label" :label="$label">
            <div class="row mb-3">
                <div class="col-6">
                    <x-form.input label="Username" name="username" id="username" :value="$user?->username" placeholder="Username"
                        required />
                </div>

                <div class="col-6">
                    <x-form.input label="Full Name" name="fullname" id="fullname" :value="$user?->fullname" placeholder="Full Name"
                        required />
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-6">
                    <x-form.input type="password" label="Passsword" name="password" id="password"
                        placeholder="Give a password" required />
                </div>

                <div class="col-6">
                    <x-form.input type="password" label="Confirm Password" name="password_confirmation"
                        id="password_confirmation" placeholder="Confirm Your Password" required />
                </div>
            </div>
        </x-form.form>
    </div>
@endsection


@section('js')
@endsection
