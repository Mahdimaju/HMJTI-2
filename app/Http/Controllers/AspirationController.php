<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Aspiration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AspirationController extends Controller
{
    /**
     * Store a newly created aspiration in the database.
     */
    public function store(Request $request)
    {
        // Custom validation rules and messages
        $validator = Validator::make($request->all(), [
            'nama_mahasiswa' => 'required|string|max:255',
            'nim' => 'required|numeric|digits_between:7,15',
            'pesan' => 'required|string|min:10|max:2000',
        ], [
            'nama_mahasiswa.required' => 'Nama mahasiswa wajib diisi.',
            'nama_mahasiswa.max' => 'Nama mahasiswa maksimal 255 karakter.',
            'nim.required' => 'NIM wajib diisi.',
            'nim.numeric' => 'NIM harus berupa angka.',
            'nim.digits_between' => 'NIM harus berjumlah antara 7 hingga 15 digit.',
            'pesan.required' => 'Pesan aspirasi wajib diisi.',
            'pesan.min' => 'Pesan aspirasi terlalu pendek, minimal 10 karakter.',
            'pesan.max' => 'Pesan aspirasi maksimal 2000 karakter.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Store to database
        $aspiration = Aspiration::create([
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'nim' => $request->nim,
            'pesan' => $request->pesan,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Aspirasi Anda berhasil dikirim! Terima kasih atas partisipasi Anda untuk memajukan HMJTI.',
            'data' => $aspiration
        ], 200);
    }
}
