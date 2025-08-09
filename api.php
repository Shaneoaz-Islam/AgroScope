
<?php
function call_openai_vision_api($imagePath) {
    $api_key = "YOUR_OPENAI_API_KEY";
    $image_data = base64_encode(file_get_contents($imagePath));

    $data = [
        "model" => "gpt-4o-mini",
        "messages" => [[
            "role" => "user",
            "content" => [
                ["type" => "text", "text" => "What's wrong with this plant leaf?"],
                ["type" => "image_base64", "image_base64" => [
                    "base64" => $image_data
                ]]
            ]
        ]],
        "max_tokens" => 300
    ];

    $ch = curl_init("https://api.openai.com/v1/chat/completions");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "Content-Type: application/json",
        "Authorization: Bearer " . $api_key
    ]);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

    $response = curl_exec($ch);
    if (curl_errno($ch)) {
        return "Curl error: " . curl_error($ch);
    }
    curl_close($ch);

    // Debug - raw response save kora
    file_put_contents('debug_api_response.json', $response);

    $result = json_decode($response, true);
    if (!$result) {
    return "Invalid JSON response: " . $response;
}
    return $result["choices"][0]["message"]["content"] ?? "No result found.";
}
?>
