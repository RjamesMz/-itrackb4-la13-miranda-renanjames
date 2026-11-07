<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Medicine;
use App\Models\Type;
use Illuminate\Support\Facades\Log;


class MedicineController extends Controller
{
    public function index(Request $request)
    {
        $types = Type::all();
        $type_id = $request->query('type_id');

        $query = Medicine::withh('type');
        if ($type_id) {
            $query = $query->where('type_id', $type_id);
        }
        $medicines = $query->get();
        return view('medicines.index', compact('medicines', 'types'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();
        return view('medicines.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:100',
            'stock' => 'required|integer|min:1',
            'expiry_date' => 'required',
            'type_id' => 'required|exists:types,id',
            'is_available' => 'required|boolean',
        ]);

        Medicine::create($validated);

        return redirect()->route('medicines.index')
            ->with('success', 'Medicine added successfully');
    }


    /**
     * Display the specified resource.
     */
    public function show(Medicine $medicine)
    {
        return view('medicines.show', compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicine $medicine)
    {
        $types = Type::all();
        return view('medicines.edit', compact('medicine', 'types'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicine $medicine)
    {
         $validated = $request->validate([
            'name' => 'required|max:100',
            'stock' => 'required|integer|min:1',
            'expiry_date' => 'required',
            'type_id' => 'required|exists:types,id',
            'is_available' => 'required|boolean',
        ]);

        $medicine->update($validated);

          Log::info('Medicine updated', [
                'id' => $medicine->id,
                'type_id' => $medicine->type_id,
        ]);

        return redirect()->route('medicines.index')
            ->with('success', 'Medicine updated successfully');




    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicine $medicine)
    {

    abort_if($medicine->type->medicines()->count() === 1, 403);


    $medicine->delete();
    return redirect()->route('medicines.index');


    }


}
