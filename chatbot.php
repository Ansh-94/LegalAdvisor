<?php
header('Content-Type: application/json');

// Get user input from frontend
$inputData = json_decode(file_get_contents('php://input'), true);
$userMessage = isset($inputData['message']) ? $inputData['message'] : '';
$imageUrl = isset($inputData['image_url']) ? $inputData['image_url'] : '';

// OpenRouter API Key
$apiKey = "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";

// Prepare API request
$requestData = [
    "model" => "google/gemini-2.0-pro-exp-02-05:free",
    "messages" => [
        [
            "role" => "user",
            "content" => [
                ["type" => "text", "text" => $userMessage]
            ]
        ]
    ]
];

// Add image URL if provided
if (!empty($imageUrl)) {
    $requestData["messages"][0]["content"][] = ["type" => "image_url", "image_url" => ["url" => $imageUrl]];
}

// Send request to OpenRouter API
$ch = curl_init("https://openrouter.ai/api/v1/chat/completions");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json"
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($requestData));
$response = curl_exec($ch);
curl_close($ch);

// Handle response
if ($response === false) {
    echo json_encode(["reply" => "Error: Unable to connect to AI service."]);
    exit;
}

$decodedResponse = json_decode($response, true);
// $botReply = $decodedResponse["choices"][0]["message"]["content"] ?? "Sorry, I could not generate a response.";
$botReply = $decodedResponse["choices"][0]["message"]["content"] ?? "Sorry, I could not generate a response.";
$botReply = str_replace("\n", "<br>", $botReply); // Convert new lines to HTML line breaks
echo json_encode(["reply" => $botReply]);


// echo json_encode(["reply" => $botReply]);
?>