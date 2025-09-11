<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investor;
use Illuminate\Support\Facades\Cache;

class InvestorController extends Controller
{
    private $external_api;
    private $token = "";

    public function __construct()
    {
        $this->external_api = config('services.external_api.base_url', '');

        if (!Cache::has('external_api_token')) {
            // authentication token generation
            $candidate_email = config('services.external_api.candidate_email', '');

            $url = $this->external_api . "/generate-token";

            $client = new \GuzzleHttp\Client();
            $response = $client->post($url, [
                'json' => [
                    'email' => $candidate_email
                ],
                'verify' => false // not recommended for production
            ]);
            $token = "bearer " . json_decode($response->getBody()->getContents())->token;

            $response = $client->post(...);

            Cache::put('external_api_token', $token, now()->addHours(1)); // cache for 1 hour
        }

        $this->token = Cache::get('external_api_token');
    }

    public function index()
    {
        $investors = Investor::all();
        $data = ['investors' => $investors];
        return view('investor.index', $data);
    }

    public function create()
    {
        return view('investor.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:investors',
            'contact_number' => 'required|string|max:20',
        ]);

        $investor = new Investor();
        $investor->name = $request->name;
        $investor->email = $request->email;
        $investor->contact_number = $request->contact_number;
        $investor->save();

        // Update external API
        $client = new \GuzzleHttp\Client();
        $url = $this->external_api . '/investor';
        $response = $client->post($url, [
            'json' => [
                'name' => $request->name,
                'email' => $request->email,
                'contact_number' => $request->contact_number
            ],
            'headers' => [
                'Authorization' => $this->token,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'verify' => false // not recommended for production
        ]);

        return redirect()->route('investors.index');
    }

    public function edit(Request $request)
    {
        $investor = Investor::find($request->id);
        $data = ['investor' => $investor];
        return view('investor.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:investors,email,' . $id,
            'contact_number' => 'required|string|max:20',
        ]);

        $investor = Investor::find($id);
        $investor->name = $request->name;
        $investor->email = $request->email;
        $investor->contact_number = $request->contact_number;
        $investor->save();

        // Update external API
        $client = new \GuzzleHttp\Client();
        $url = $this->external_api . "/investor/" . $id;
        $response = $client->patch($url, [
            'json' => [
                'name' => $request->name,
                'email' => $request->email,
                'contact_number' => $request->contact_number
            ],
            'headers' => [
                'Authorization' => $this->token,
                'Content-Type' => 'application/json',
                'Accept' => 'application/json',
            ],
            'verify' => false // not recommended for production
        ]);

        return redirect()->route('investors.index');
    }
}
