<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TmdbFetchRequest;
use App\Traits\Services\TMDB;
use Illuminate\Http\Request;

class TmdbController extends Controller
{
    use TMDB;

    public function fetch()
    {
        // $data['tmdbid'] = '558449';
        if ($result = $this->getMoive(request('imdb_id'), request('lang'))) {
            return  $this->sendResponse($result, 'Successfully fetched');
        } else {
            return  $this->sendError('Something went wrong.');
        }
    }

    public function fetch2()
    {
        if ($result = $this->getMoive('558449')) {
            return  $this->sendResponse($result, 'Successfully fetched');
        } else {
            return  $this->sendError('Something went wrong.');
        }
    }
}
