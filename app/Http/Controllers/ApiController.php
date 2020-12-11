<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller as BaseController;
use App\Http\Resources\InfoResource;
use App\Http\Resources\ErrorResource;
use App\Mail\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApiController extends BaseController
{
    public function feedback(Request $request)
    {
        $data = $this->validate($request, [
            'email' => 'required|email',
            'text' => 'required|max:1000'
        ]);
        try {
            Mail::send(new Feedback($data['email'], $data['text']));
            return response()->json(new InfoResource((object) ['message' => trans('messages.feedback_success')]));
        } catch (\Throwable $th) {
            return response()->json(new ErrorResource((object) ['message' => trans('messages.feedback_failure')]));
        }
    }
}
