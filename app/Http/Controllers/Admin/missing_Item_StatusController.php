<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missing_Item_Status;
use Illuminate\Http\Request;

class missing_Item_StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $missing_item_status = missing_Item_Status::where('user_id', 'LIKE', "%$keyword%")
                ->orWhere('class', 'LIKE', "%$keyword%")
                ->orWhere('room_id', 'LIKE', "%$keyword%")
                ->orWhere('location_id', 'LIKE', "%$keyword%")
                ->orWhere('attendence_collect_at', 'LIKE', "%$keyword%")
                ->orWhere('attendence_return_at', 'LIKE', "%$keyword%")
                ->orWhere('marker_return_at', 'LIKE', "%$keyword%")
                ->orWhere('marker_collect_at', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missing_item_status = missing_Item_Status::latest()->paginate($perPage);
        }

        return view('admin.missing_-item_-status.index', compact('missing_item_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing_-item_-status.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        missing_Item_Status::create($requestData);

        return redirect('admin/missing_-item_-status')->with('flash_message', 'missing_Item_Status added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $missing_item_status = missing_Item_Status::findOrFail($id);

        return view('admin.missing_-item_-status.show', compact('missing_item_status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $missing_item_status = missing_Item_Status::findOrFail($id);

        return view('admin.missing_-item_-status.edit', compact('missing_item_status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $missing_item_status = missing_Item_Status::findOrFail($id);
        $missing_item_status->update($requestData);

        return redirect('admin/missing_-item_-status')->with('flash_message', 'missing_Item_Status updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        missing_Item_Status::destroy($id);

        return redirect('admin/missing_-item_-status')->with('flash_message', 'missing_Item_Status deleted!');
    }
}
