## ChatGPT playground

Just playing with chatgpt.
 'completions.php': Uses completion to complete a sentece. Concept used in co-pilot or emails to auto complete sentences.
  'chat.php': An example just to show up that we always need to send the history of messages to chatgpt has a context of the questions.
   'chat-conversation.php': A chat interaction using command line.

## Usage

```
# php chat-conversation.php 
Type any question (or exit to go out)?
What is the capital of Sweden?
The capital of Sweden is Stockholm.
And what about Japan?
The capital of Japan is Tokyo.
exit

```

## Requirements to run
  - Docker
  - OpenApi valid API key
 
 ## How to Run 
 1. `docker-compose up -d`
 2. `docker-compose exec web bash` (command to get inside the container)
 3. `composer install` (inside container)
 4. `cp .env.example .env` (update OPEN_API_KEY variable)
 6. `php chat-conversation.php` 