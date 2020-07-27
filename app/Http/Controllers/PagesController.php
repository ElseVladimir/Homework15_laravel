<?php

namespace App\Http\Controllers;
use App\Page;
use Illuminate\Http\Request;
use App\Http\Requests\Page\StorePageRequest;
use App\Http\Requests\Page\UpdatePageRequest;


class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::all();
        return view('pages.index')->with(compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePageRequest $request)
    {
        /*$this->validate($request,[
            'title' => 'required|min:3|max:20',
            'slug' => 'required|min:3|max:20',
            'intro' => 'required|min:3|max:20',
            'content' => 'required|min:5'
        ]);*/
        Page::create($request->all());
        return redirect('/pages');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        /*$page = Page::find($id);*/
        return view('pages.show')->with(compact('page'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        /*$page = Page::find($id);*/
        return view('pages.edit')->with(compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Page $page, UpdatePageRequest $request /* $id */)
    {
        /*$page = Page::find($id);*/
        $page->update($request->all());
        return redirect('/pages');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page /* $id */)
    {
        /* $page = Page::find($id); */
        $page->delete();
        return redirect('/pages');
    }
}
