<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Http\Requests\ShippingRequest;
use Illuminate\Support\Facades\DB;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.settings.shippings.edit');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($type)
    {
        if ($type === 'Free') {
            $shippingmethod = Setting::where('key', 'free_shipping_label')->get()->first();
        } elseif ($type === 'Outer') {
            $shippingmethod = Setting::where('key', 'outer_shipping_label')->get()->first();
        } elseif ($type === 'Local') {
            $shippingmethod = Setting::where('key', 'local_shipping_label')->get()->first();
        } else
            $shippingmethod = Setting::where('key', 'free_shipping_label')->get()->first();

        return view('dashboard.settings.shippings.edit', compact('shippingmethod'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ShippingRequest $request, $id)
    {

        try {
            //update DB
            $shipment_update =  Setting::find($id);
            DB::beginTransaction();
            $shipment_update->update(['plain_value' => $request->value]);
            // Save Translations
            $shipment_update->value = $request->name;
            $shipment_update->save();
            DB::commit();
            return redirect()->back()->with('success', __('admin/sidebar.Success'));
        } catch (\Exception $e) {

            return redirect()->back()->with('error', __('admin/sidebar.failure'));
            DB::rollback();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
