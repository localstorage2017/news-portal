<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Categories;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AddController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.categories.add.index';
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
