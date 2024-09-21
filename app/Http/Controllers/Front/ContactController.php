<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Services\Contact\ContactServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use function view;

class ContactController extends Controller
{
    protected mixed $contactService;
    public function __construct()
    {
        $this->contactService = App::make(ContactServiceInterface::class);
    }

    public function index()
    {
        return view("front.contact.index");
    }

    public function store(Request $request) :bool
    {
        $request->validate([],[]);
        $contactData = $request->all();
        $this->contactService->store($contactData);
        return true;
    }
}
