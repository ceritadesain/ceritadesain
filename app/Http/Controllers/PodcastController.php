<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Podcast; // Pastikan impor model Podcast
use Illuminate\Support\Facades\Cache;

class PodcastController extends Controller
{
    public function index()
    {
        // Cek apakah data sudah ada dalam cache
        if (Cache::has('podcasts')) {
            $podcasts = Cache::get('podcasts');
        } else {
            $response = Http::withHeaders([
                'x-rapidapi-host' => env('RAPIDAPI_HOST'),
                'x-rapidapi-key' => env('RAPIDAPI_KEY')
            ])->get('https://spotify23.p.rapidapi.com/search/', [
                'type' => 'multi',
                'q' => 'UI/UX',
                'offset' => 0,
                'limit' => 10,
                'numberOfTopResults' => 5
            ]);

            if ($response->successful()) {
                $data = $response->json();

                // Pastikan data yang diharapkan ada di respons
                if (isset($data['episodes']['items'])) {
                    $podcasts = $data['episodes']['items'];

                    // Simpan data dalam cache selama 1 jam (60 menit)
                    Cache::put('podcasts', $podcasts, 30 * 24 * 60 * 60);

                    // Simpan atau update data podcast ke database
                    foreach ($podcasts as $podcast) {
                        Podcast::updateOrCreate(
                            ['spotify_id' => $podcast['data']['uri']],
                            [
                                'title' => $podcast['data']['name'],
                                'spotify_uri' => $podcast['data']['uri'],
                                'image_url' => $podcast['data']['coverArt']['sources'][0]['url'],
                            ]
                        );
                    }
                } else {
                    return response()->json(['error' => 'Invalid response from API: ' . json_encode($data)], 400);
                }
            } else {
                return response()->json(['error' => 'Request failed: ' . $response->status()], 400);
            }
        }

        // Ambil data dari database untuk memastikan konsistensi dengan cache
        $podcasts = Podcast::all();

        return view('podcasts.index', compact('podcasts'));
    }
    
}