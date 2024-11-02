<?php

namespace GMath\Services;

use Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;

require_once 'vendor/autoload.php';

class GeminiApi{

    public static function quickImage($imageUrl): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);
        
        $prompt = "Interprete e esolva a questão da imagem sem explicar, apenas o resultado";
        $imageBlob = new Blob(
            mimeType: MimeType::IMAGE_JPEG,
            data: base64_encode(file_get_contents($imageUrl)),
        );

        $result = $client->generativeModel(model: 'models/gemini-1.5-flash-001')->generateContent([
            $prompt,
            $imageBlob
        ]);

        return $result->text();
    }

    public static function detailedImage($imageUrl): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);

        $prompt = "Inteprete e resolva a questão da imagem, seja bem detalhado";
        $imageBlob = new Blob(
            mimeType: MimeType::IMAGE_JPEG,
            data: base64_encode(file_get_contents($imageUrl)),
        );

        $result = $client->generativeModel(model: 'models/gemini-1.5-flash')->generateContent([
            $prompt,
            $imageBlob
        ]);
        
        return $result->text();
    }
}

?>