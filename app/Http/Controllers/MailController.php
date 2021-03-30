<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Http\JsonResponse;
use MDP\Apis\MailApi;

class MailController extends Controller
{
    private MailApi $mailApi;

    public function __construct(MailApi $mailApi)
    {
        $this->mailApi = $mailApi;
    }

    /**
     * @param ContactFormRequest $request
     * @return JsonResponse
     */
    public function contactForm(ContactFormRequest $request): JsonResponse
    {
        try {
            $this->mailApi->sendContactFormEmail($request);
            return response()->json(['message' => 'Message sent.'], 200);
        }
        catch(\Throwable $e) {
            \Log::error($e);
            return response()->json(['error' => $e->getMessage()], $e->getCode());
        }
    }
}
