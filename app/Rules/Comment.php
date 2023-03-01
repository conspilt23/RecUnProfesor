<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Str;

class Comment implements InvokableRule
{
    public function __invoke($attribute, $value, $fail)
    {

    $prohibited_domains = ['com', 'online', 'info', 'net', 'org', 'de', 'io'];
    $regex = '/(?:https?:\/\/)?(?:www\.)?[^\s]+\.(?:' . implode('|', $prohibited_domains) . ')\S*/i';


        $notAllowedWords = [
              'haitian', 'lgbt', 'pene',  'marihuana', 'mariguana', 'cocaina', 'anfetamina', 'tedecampana', 'tokischa', 'rochy', 'onguito', 'muerte', 'muerto', 'morir', 'matar', 'asesin', 'asesinar', 'asesinato', 'creta', 'vicioso'
        ];

        $allowedWords = [
            'penelope',  'pitón', 'cretacio'
        ];

        $badWords = [
            'mmg', 'maldito', 'maldita', 'mmñ', 'ñema', 'ripio', 'toto', 'guebo', 'güebo', 'mamaguebo', 'mamaguevo', 'guevo', 'mamagüebo', 'mamagüevo', 'güevo', 'pelotudo', 'ramera', 'puta', 'puto', 'mamagrano', 'mamabicho', 'chupa', 'maricon', 'marica', 'marico', 'homosexual', 'ridículo', 'pariguayo', 'pariguaya', 'parigüayo', 'parigüaya', 'droga', 'drug', 'mamagrano', 'verga', 'pito', 'chinga', 'chingad', 'chingo', 'puticornio',
        ];

        $RestrictedSites = [
            'cock', 'sex', 'rule34', 'hentai', 'yaoi', 'yuri', 'xnxx', 'porn', 'redtube', 'blacked', 'mofos', 'brazzers', 'fantasyhd', 'xvideos', 'hustlerhd', 'bangbros', 'playboy', 'dipsea', 'xhamster', 'frolicme', 'onlyfans', 'manyvids', 'quinn', 'javhd', 'hentalia', 'xxx', 'creampie', 'felching', 'anal', 'ano', 'voyeur', 'pussy', 'vagina', 'vulva', 'ass', 'fuck', 'suck', 'dick', 'teta', 'glande', 'sacoleche', 'sacaleche','nalga', 'chaturba', 'masturb', 'esperm',  'mevengo', 'osomaduro', 'singar', 'popola', 'eyacular', 'eyaculo', 'eyacul', 'coito', 'copular', 'fornicar', 'fornicacion', 'seisnueve', 'seinueve', 'miakhalifa', 
        ];

        if (Str::of($value)->lower()->contains($notAllowedWords) && !Str::of($value)->lower()->contains($allowedWords)) {
            return $fail('Tu comentario tiene palabras que no están permitidas.');
        } else if (Str::of($value)->lower()->contains($badWords)) {
            return $fail('Tu comentario no puede contener grocerías.');
        } else if (Str::of($value)->lower()->contains($RestrictedSites)) {
            return $fail('Tu comentario no debe hacer referencia a contenido explícito.');
        } else if (preg_match("/^\d+$/", $value)) {
            return $fail('Debes escribir tu comentario también con palabras, no solo números');
        } else if    (preg_match($regex, $value)) {
            return $fail('Por normas de seguridad, no puedes incluir enlaces en tu comentario.');
        }
    }
}
