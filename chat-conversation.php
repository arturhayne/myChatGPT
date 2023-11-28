<?php

require __DIR__ . '/vendor/autoload.php';

$client = OpenAI::client(getenv('OPEN_API_KEY'));

$conversation = [];

print_r('Type any question (or exit to go out)?' . "\n");
$input = trim(fgets(STDIN));
while($input != 'exit') {

    $conversation[] = [
        'role' => 'user',
        'content' => $input,
    ];

    $result = $client->chat()->create([
        'model' => 'gpt-3.5-turbo',
        'messages' => $conversation,
    ]);

    $response = $result->choices[0]->message->content;
    $conversation[] = [
        'role' => 'assistant',
        'content' => $response,
    ];
    print_r($response . "\n");

    $input = trim(fgets(STDIN));
}
