<?php


require __DIR__ . '/vendor/autoload.php';

$client = OpenAI::client(getenv('OPEN_API_KEY'));

$result = $client->chat()->create([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        // [
        //     'role' => 'user', 
        //     'content' => 'who invented the airplane?',
        // ],
        // [
        //     'role' => 'assistant', 
        //     'content' => 'The Wright brothers, Orville and Wilbur Wright, are credited with inventing and successfully flying the world\'s first powered aircraft in 1903.',
        // ],
        [
            'role' => 'user', 
            'content' => 'can you give me a shorter answer?',
        ],
    ],
]);

print_r($result->choices[0]->message->content . "\n");
// the answer will be "Yes." but if we uncomment the lines will be "The Wright brothers."

