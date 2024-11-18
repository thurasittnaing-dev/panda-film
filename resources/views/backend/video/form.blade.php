@extends('layouts.app')

@section('title', 'Upload Movie')

@section('css')
    <style>
        .card {
            box-shadow: none;
            border: none;
            box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
        }
    </style>
@endsection

@section('content')
    <form action="" method="GET" autocomplete="off">
        @csrf

        <div class="card p-2 mt-3">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex">
                    <div class="input-group mb-3">
                        <input type="text" id="imdb_id" class="form-control" placeholder="IMDB ID" aria-label="IMDB ID"
                            aria-describedby="button-addon2">
                        <button class="btn btn-dark" type="button" id="fetch-btn">
                            Fetch</button>
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-dark">Upload</button>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-7">
                <div class="card p-3">
                    <div class="upload-title d-flex align-items-center">
                        <div class="upload-badge"></div>
                        Video Information
                    </div>

                    <div class="row mt-3 g-4">
                        <div class="col-6">
                            <label class="label mb-2">Video Title</label>
                            <input type="text" name="title" id="title" placeholder="" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Slug</label>
                            <input type="text" name="slug" id="slug" placeholder="" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">IMDB Rating</label>
                            <input type="text" name="tmdb_rating" id="tmdb_rating" placeholder="" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Release Date</label>
                            <input type="date" name="release_date" id="release_date" placeholder="" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Run Time</label>
                            <input type="text" name="run_time" id="run_time" placeholder="" class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Video Quality</label>
                            <select name="quality_id" id="quality_id" class="form-control">
                                @forelse (getVideoQualities() as $quality)
                                    <option value="{{ $quality->id }}" {{ $quality->id == '2' ? 'selected' : '' }}>
                                        {{ $quality->name }}</option>
                                @empty
                                @endforelse
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="label mb-2">Genres</label>
                            <select name="genre_id[]" id="genre_id" class="form-control">
                                <option value="">--Select--</option>
                            </select>
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Youtube Trailer</label>
                            <input type="text" name="trailer_youtube_source" id="trailer_youtube_source" placeholder=""
                                class="form-control">
                        </div>

                        <div class="col-6">
                            <label class="label mb-2">Video Type</label>
                            <select name="video_type_id" id="video_type_id" class="form-control">
                                <option value="">--Select--</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="label mb-2">Stars</label>
                            <select name="star_id[]" id="star_ids" class="form-control">
                                <option value="">--Select--</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="label mb-2">Country</label>
                            <select name="country_id" id="country_id" class="form-control">
                                <option value="">--Select--</option>
                            </select>
                        </div>

                        <div class="col-12">
                            <label class="label mb-2">Overview</label>
                            <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                        </div>

                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" name="publication" type="checkbox" value="1"
                                    id="publication" checked>
                                <label class="form-check-label" for="publication">
                                    Publication
                                </label>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" name="free" type="checkbox" value="1"
                                    id="free" checked>
                                <label class="form-check-label" for="free">
                                    Free
                                </label>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" name="adult" type="checkbox" value="1"
                                    id="adult">
                                <label class="form-check-label" for="adult">
                                    Adult
                                </label>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-check">
                                <input class="form-check-input" name="download" type="checkbox" value="1"
                                    id="download">
                                <label class="form-check-label" for="download">
                                    Enable Download
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-5">
                <div class="card p-3">
                    <div class="upload-title d-flex align-items-center">
                        <div class="upload-badge"></div>
                        Poster & Thumbnail
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection


@section('js')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
