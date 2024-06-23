<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Requests\Discussion\StoreRequest;
use App\Models\Discussion; 
use Illuminate\Support\Str; 

class DiscussionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // load semua discussion
        // eager load relationshipnya / relasinya
        // return page index beserta datanya
        // data yang di pass ke view adl
        // discussion yang sudah disort dengan created at menurun, pagination per 10/20
        // data semua category

        $discussion = Discussion::with('user' , 'category');

        return response()->view('pages.discussions.index', [
            'discussions' => $discussion->orderBy('created_at', 'desc')->paginate(10),
            'categories'=>Category::all()
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->view('pages.discussions.form', [
            'categories' => Category::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        // dapatkan dulu data dari form request yang sudah tervalidasi
        // get data category berdasarkan slug nya
        // dapatkan id dari categorynya
        // masukkan user id ke array validated
        // tambahkan slug + timestamp berdasarkan title ke array validated
        // buat content_preview berdasarkan content
        // caranya bersihkan content dari tag
        // cek apakah conet ini karakternya lebih dari 120
        // jika iya maka masukkan content tersebut ke content preview + '...'
        // jika iya maka masukkan content tersebut ke content preview tanpa '...'
        // baru masukkan data detail question itu ke table discussions
        // jika berhasil maka buat notif berhasil lalu redirect ke list discussion
        // jika tidak maka kembalikan error 500

        $validated = $request->validated();
        $categoryId = Category::where('slug', $validated['category_slug'])->first()->id;
        
        $validated['category_id'] = $categoryId;
        $validated['user_id'] = auth()->id();
        $validated['slug'] = Str::slug($validated['title']) . '-' . time();
        
        $stripContent = strip_tags($validated['content']);
        $isContentLong = strlen($stripContent) > 120;
        $validated['content_preview'] = $isContentLong
            ? (substr($stripContent, 0, 120) . '...') : $stripContent;

        $create = Discussion::create($validated);

        if($create) {
            session()->flash('notif.success', 'Diskusi sukses terbuat!');
            return redirect()->route('discussions.index');
        }

        return abort(500);
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}