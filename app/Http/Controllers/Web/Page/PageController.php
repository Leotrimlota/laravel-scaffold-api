<?php

namespace App\Http\Controllers\Web\Page;

use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function successPage()
    {
        return view('web.page.success-page');
    }

    public function privacyPolicy()
    {
        return view('web.page.privacy-policy');
    }

    public function termsOfService()
    {
        return view('web.page.terms-of-service');
    }

    public function styleGuide()
    {
        return view('web.page.style-guide');
    }
}
