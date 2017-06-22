<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Articles\Nested;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PhotosController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.photos.index.index';
    }

    public function execute(Request $request)
    {
        // METHOD POST


        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [
                //
            ]);
        }
    }
}
