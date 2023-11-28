<?php

require_once(__DIR__ . '/vendor/autoload.php');

$client = OpenAI::client(getenv('OPEN_API_KEY'));

$result = $client->completions()->create([
    'model' => 'gpt-3.5-turbo-instruct',
    'prompt' => 'Peas are ',
]);

print_r($result->choices[0]->text);

