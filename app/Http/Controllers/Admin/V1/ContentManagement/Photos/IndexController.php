<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Photos;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.photos.index.index';
    }

    public function execute(Request $request)
    {
        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [
                //
            ]);
        }
    }
}
