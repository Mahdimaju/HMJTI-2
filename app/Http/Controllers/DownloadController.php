<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Download;
use App\Models\Academic;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    /**
     * Download a file from the downloads table.
     */
    public function download($id)
    {
        $download = Download::findOrFail($id);
        
        // Resolve storage path
        $filePath = $download->file_path;
        $path = storage_path('app/public/' . $filePath);

        if (!file_exists($path)) {
            // Check if file exists directly in public folder or as simple path
            $publicPath = public_path($filePath);
            if (file_exists($publicPath)) {
                return response()->download($publicPath);
            }
            
            return abort(404, 'File tidak ditemukan di server.');
        }

        return response()->download($path);
    }

    /**
     * Download an attachment from the academics table.
     */
    public function downloadAcademic($id)
    {
        $academic = Academic::findOrFail($id);

        if (!$academic->file_path) {
            return abort(404, 'Informasi akademik tidak memiliki lampiran file.');
        }

        $filePath = $academic->file_path;
        $path = storage_path('app/public/' . $filePath);

        if (!file_exists($path)) {
            $publicPath = public_path($filePath);
            if (file_exists($publicPath)) {
                return response()->download($publicPath);
            }

            return abort(404, 'File lampiran akademik tidak ditemukan.');
        }

        return response()->download($path);
    }
}
