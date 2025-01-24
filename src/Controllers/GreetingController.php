<?php

namespace App\Controllers;

use Brickhouse\Http\Controller;
use Brickhouse\Http\Response;

final class GreetingController extends Controller
{
    /**
     * Renders a greeting to the user.
     *
     * @return Response
     */
    public function __invoke(): Response
    {
        $hour = localtime(associative: true)['tm_hour'];

        $greeting = 'Good ' . match (true) {
            $hour >= 12 => 'afternoon.',
            $hour >= 5 => 'morning.',
            $hour >= 21 => 'night.',
            default => 'night.',
        };

        return render('greeting/index', [
            'greeting' => $greeting
        ]);
    }
}
