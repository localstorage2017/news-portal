<?php

namespace App\Http\Controllers\Admin\V1\ContentManagement\Categories;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    private $template;

    public function __construct()
    {
        $this->template = 'admin.v1.content_management.categories.index.index';
    }

    public function execute(Request $request)
    {
        // Выбрать 20 записией которые выводит
        // Выбрать total которое вообще можно вывести

        // METHOD GET
        if (view()->exists($this->template)) {

            return view($this->template, [

            ]);
        }
    }
}
