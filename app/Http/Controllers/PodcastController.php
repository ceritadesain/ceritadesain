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
        try {
            // Ambil semua data podcast dari database
            $podcasts = Podcast::all();

            // Jika tidak ada data podcast di database, atau data terlalu lama
            // Anda bisa menetapkan durasi data berlaku (misalnya 1 hari)
            $cacheDuration = 30 *24 * 60 * 60; // 30 hari dalam detik

            // Jika tidak ada data di database atau data sudah expired
            if ($podcasts->isEmpty() || $this->isDataExpired($podcasts, $cacheDuration)) {
                // Panggil API untuk mendapatkan data terbaru
                $response = Http::withHeaders([
                    'x-rapidapi-host' => env('RAPIDAPI_HOST'),
                    'x-rapidapi-key' => env('RAPIDAPI_KEY')
                ])->get('https://spotify23.p.rapidapi.com/search/', [
                    'type' => 'multi',
                    'q' => 'UI/UX',
                    'offset' => 0,
                    'limit' => 21,
                    'numberOfTopResults' => 5
                ]);

                if ($response->successful()) {
                    $data = $response->json();

                    // Pastikan data yang diharapkan ada di respons
                    if (isset($data['episodes']['items'])) {
                        $podcasts = [];

                        // Simpan atau update data podcast ke database
                        foreach ($data['episodes']['items'] as $podcast) {
                            $podcasts[] = Podcast::updateOrCreate(
                                ['spotify_id' => $podcast['data']['uri']],
                                [
                                    'title' => $podcast['data']['name'],
                                    'spotify_uri' => $podcast['data']['uri'],
                                    'image_url' => isset($podcast['data']['coverArt']['sources'][0]['url']) ? $podcast['data']['coverArt']['sources'][0]['url'] : null,
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

            // Ambil kembali data dari database untuk memastikan data yang konsisten
            $podcasts = Podcast::all();

            return view('podcasts.index', compact('podcasts'));
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch podcasts: ' . $e->getMessage()], 500);
        }
    }

    private function isDataExpired($podcasts, $cacheDuration)
    {
        // Tentukan jika data telah kadaluarsa berdasarkan cacheDuration
        $latestPodcast = $podcasts->last(); // Ambil data podcast terbaru

        if (!$latestPodcast) {
            return true; // Jika tidak ada data terbaru, maka data dianggap kadaluarsa
        }

        $currentTime = now();
        $createdAt = $latestPodcast->created_at;

        // Periksa apakah data terbaru lebih lama dari cacheDuration
        return $createdAt->diffInSeconds($currentTime) > $cacheDuration;
    }
    


}