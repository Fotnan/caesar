<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\City;
use App\Models\Contakt;
use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\District;
use App\Models\Old_customers;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::select('id','object', 'name', 'aadress')->OrderBy('object')->paginate(25);
        return view('admin.customer.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $districts = District::all();
        $cities = City::all();
        $categories = Category::all();


        return view('admin.customer.create', compact('districts', 'cities', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreCustomerRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCustomerRequest $request)
    {
        $folder = $request->object;
        if ($request->hasFile('pict1')) {
            $avatar1 = $request->file('pict1')->store("images/{$folder}/pict");
        }
        if ($request->hasFile('pict2')) {
            $avatar2 = $request->file('pict2')->store("images/{$folder}/pict");
        }
        if ($request->hasFile('pict3')) {
            $avatar3 = $request->file('pict3')->store("images/{$folder}/pict");
        }
        if ($request->hasFile('scheme1')) {
            $avatar4 = $request->file('scheme1')->store("images/{$folder}/scheme");
        }
        if ($request->hasFile('scheme2')) {
            $avatar5 = $request->file('scheme2')->store("images/{$folder}/scheme");
        }
        if ($request->hasFile('scheme3')) {
            $avatar6 = $request->file('scheme3')->store("images/{$folder}/scheme");
        }
        if ($request->hasFile('document')) {
            $avatar7 = $request->file('document')->store("document/{$folder}");
        }

        Customer::create([
            'object' => $request->object,
            'name' => $request->name,
            'aadress' => $request->aadress,
            'district_id' => $request->district_id,
            'city_id' => $request->city_id,
            'category_id' => $request->category_id,
            'pict1' => $avatar1 ?? null,
            'pict2' => $avatar2 ?? null,
            'pict3' => $avatar3 ?? null,
            'scheme1' => $avatar4 ?? null,
            'scheme2' => $avatar5 ?? null,
            'scheme3' => $avatar6 ?? null,
            'document' => $avatar7 ?? null,
            'notes' => $request->notes,
            'contract' => $request->contract,
            'keychain' => $request->keychain,
            'gate' => $request->gate,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
            'paid' => $request->paid,
            'floor' => $request->floor,
            'color' => $request->color,
            'entrance' => $request->entrance,
            'door' => $request->door,
            'windows' => $request->windows,
            'balcony' => $request->balcony,
            'utility' => $request->utility,
            'code' => $request->code,
            'fence' => $request->fence,
            'dog' => $request->dog,
            'active' => $request->active,
        ]);
        return redirect()->route('customer.index')->with('success', 'Запись добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        return view('admin.customer.show', [
            'customer' => Customer::findOrFail($customer)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $cities = City::all();
        $categories = Category::all();

        $customer = Customer::find($id);
        //$districts = $customer->disticts->title;
        dd($customer->district_id);

        return view('admin.customer.edit', compact('customer','districts', 'cities', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateCustomerRequest $request
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCustomerRequest $request, $id)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
        return redirect()->route('customer.index')->with('success', 'Изменения сохранены');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Customer $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy($customer)
    {
        $item = Customer::find($customer);
        $trans = $item->replicate();
        Old_customers::create([
            'object' => $trans->object,
            'name' => $trans->name,
            'aadress' => $trans->aadress,
            'district_id' => $trans->district_id,
            'city_id' => $trans->city_id,
            'category_id' => $trans->category_id,
            'pict1'=>$trans->pict1,
            'pict2'=>$trans->pict2,
            'pict3'=>$trans->pict3,
            'scheme1'=>$trans->scheme1,
            'scheme2'=>$trans->scheme2,
            'scheme3'=>$trans->scheme3,
            'document'=>$trans->document,
            'notes'=>$trans->notes,
            'contract'=>$trans->contract,
            'keychain'=>$trans->keychain,
            'gate'=>$trans->gate,
            'longitude'=>$trans->longitude,
            'latitude'=>$trans->latitude,
            'paid'=>$trans->paid,
            'floor'=>$trans->floor,
            'color'=>$trans->color,
            'entrance' => $trans->entrance,
            'door'=>$trans->door,
            'windows'=>$trans->windows,
            'balcony'=>$trans->balcony,
            'utility'=>$trans->utility,
            'key_nr'=>$trans->key_nr,
            'code'=>$trans->code,
            'fence'=>$trans->fence,
            'dog'=>$trans->dog,
            'active'=>$trans->active,
                ]
            );
        Customer::destroy($customer);
        return redirect()->route('customer.index')->with('success', 'Клиент удален');
    }
}
