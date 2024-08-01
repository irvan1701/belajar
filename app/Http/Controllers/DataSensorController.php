<?php

namespace App\Http\Controllers;
use App\Models\DataSensor;
use Illuminate\Http\Request;

class DataSensorController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $validated = $request->validate([
            'id' => 'required|integer',
            'ketinggian' => 'required|integer',
            'suhu' => 'required|numeric',
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'status' => 'required|string',
            'cuaca' => 'required|string',
        ]);

        // Buat data baru
        $dataSensor = new DataSensor;
        $dataSensor->id = $validated['id'];
        $dataSensor->ketinggian = $validated['ketinggian'];
        $dataSensor->suhu = $validated['suhu'];
        $dataSensor->latitude = $validated['latitude'];
        $dataSensor->longitude = $validated['longitude'];
        $dataSensor->status = $validated['status'];
        $dataSensor->cuaca = $validated['cuaca'];
        $dataSensor->save();

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }
}
