<?php

namespace GMath\Services;

use Gemini;
use Gemini\Data\Blob;
use Gemini\Enums\MimeType;
use Gemini\Data\Content;
use Gemini\Enums\Role;

require_once 'vendor/autoload.php';

class GeminiApi{

    public static function quickImage($imageUrl): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);
        
        $prompt = "Interprete e resolva a questão da imagem sem explicar, apenas o resultado";
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

    public static function detailedText($text): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);

        $prompt = "Inteprete e resolva esse exercício matemático: ".$text;

        $result = $client->generativeModel(model: 'models/gemini-1.5-flash')->generateContent([
            $prompt
        ]);
        
        return $result->text();
    }

    public static function quickText($text): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);

        $prompt = "Interprete e resolva a questão sem explicar, apenas o resultado: ".$text;

        $result = $client->generativeModel(model: 'models/gemini-1.5-flash')->generateContent([
            $prompt
        ]);
        
        return $result->text();
    }

    public static function teacherChat($prompt): string{
        $client = Gemini::client($_ENV['GEMINI_API_KEY']);

        $chat = $client->generativeModel(model: 'models/gemini-1.5-flash')->startChat(history: [
            Content::parse(part: "Agora você é um professor de matemática, se te perguntaram algo relacionado a matemática e você deve respoder como um professor. Entendido?"),
            Content::parse(part: "Sim, entendido. Eu sou um professor de mateḿatica e devo responder como um professor o que me perguntarem.", role: Role::MODEL)
        ]);

        $response = $chat->sendMessage($prompt);
        return $response->text();
    }
}

?>