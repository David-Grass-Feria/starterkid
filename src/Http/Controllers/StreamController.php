<?php

namespace GrassFeria\Starterkid\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StreamController extends Controller
{
    

    public function stream(Media $media, $recordId): StreamedResponse
    {
        $record = \GrassFeria\StarterkidTester\Models\Post::find($recordId);

        if ($media->disk !== 'public') {
            $this->authorize('update', [$media->model_type, $record]);
        }

        // Hole den Disk-Namen
        $diskName = $media->disk;
        // Bestimme den Treiber anhand der Konfiguration
        $driver = config("filesystems.disks.{$diskName}.driver");
        $root = config("filesystems.disks.{$diskName}.root");

        $path = $media->getPath();
        
        //dd($path);

        $stream = function () use ($driver, $diskName, $path,$root) {
            if ($driver === 'local') {
                // Behandlung für lokale Dateisysteme
                
                $handle = fopen($path, 'rb');
                while (!feof($handle)) {
                    echo fread($handle, 2048);
                    flush();
                }
                fclose($handle);
            } else {
                // Behandlung für externe Dateisysteme, einschließlich SFTP
                $replace = str_replace($root,'',$path);
                $path = $replace;
                $streamResource = Storage::disk($diskName)->readStream($path);
                if ($streamResource) {
                    while (!feof($streamResource)) {
                        echo fread($streamResource, 2048);
                        flush();
                    }
                    fclose($streamResource);
                }
            }
        };

        return response()->stream($stream, 200, [
            'Content-Type' => $media->mime_type,
            'Content-Length' => $media->size,
            'Content-Disposition' => 'inline; filename="' . $media->file_name . '"',
            'Accept-Ranges' => 'bytes',
        ]);
    }

    
}
