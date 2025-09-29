<?php

namespace App\Http\Middleware;

<<<<<<< HEAD
use Illuminate\Foundation\Inspiring;
=======
>>>>>>> master
use Illuminate\Http\Request;
use Inertia\Middleware;

class HandleInertiaRequests extends Middleware
{
    /**
<<<<<<< HEAD
     * The root template that's loaded on the first page visit.
     *
     * @see https://inertiajs.com/server-side-setup#root-template
=======
     * The root template that is loaded on the first page visit.
>>>>>>> master
     *
     * @var string
     */
    protected $rootView = 'app';

    /**
<<<<<<< HEAD
     * Determines the current asset version.
     *
     * @see https://inertiajs.com/asset-versioning
=======
     * Determine the current asset version.
>>>>>>> master
     */
    public function version(Request $request): ?string
    {
        return parent::version($request);
    }

    /**
     * Define the props that are shared by default.
     *
<<<<<<< HEAD
     * @see https://inertiajs.com/shared-data
     *
=======
>>>>>>> master
     * @return array<string, mixed>
     */
    public function share(Request $request): array
    {
<<<<<<< HEAD
        [$message, $author] = str(Inspiring::quotes()->random())->explode('-');

        return [
            ...parent::share($request),
            'name' => config('app.name'),
            'quote' => ['message' => trim($message), 'author' => trim($author)],
            'auth' => [
                'user' => $request->user(),
            ],
            'sidebarOpen' => ! $request->hasCookie('sidebar_state') || $request->cookie('sidebar_state') === 'true',
=======
        return [
            ...parent::share($request),
            'auth' => [
                'user' => $request->user(),
            ],
>>>>>>> master
        ];
    }
}
