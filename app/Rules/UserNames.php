<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;
use Illuminate\Support\Str;

class UserNames implements InvokableRule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure  $fail
     * @return void
     */
    public function __invoke($attribute, $value, $fail)
    {


        $Usernames = [
            'admin', 'operator', 'operador', 'recomiendameunpr', 'nuevosemestre', 'administrador', 'administrator', 'adm', 'administradora', 'moderador', 'moderator', 'miprofesor', 'mi-profesor', 'apec', 'unapec', 'univerdsidad', 'intec', 'unibe', 'uasd', 'pucmm', 'unphu', 'haitian', 'dominican', 'rector', 'profesor', 'maestro', 'lgbt', 'pene', 'semestre', 'marihuana', 'mariguana', 'cocaina', 'anfetamina', 'tedecampana', 'tokischa', 'rochy', 'onguito', 'muerte', 'muerto', 'morir', 'matar', 'asesin', 'asesinar', 'asesinato', 'vicioso', 'viciosa', 'culo', 
        ];

        $allowedWords = [
            'penelope', 'pitón',
        ];

        $badWords = [
            'mmg', 'maldito', 'maldita', 'coñ', 'mmñ', 'conazo', 'ñema', 'ripio', 'toto', 'guebo', 'güebo', 'mamaguebo', 'mamaguevo', 'guevo', 'mamagüebo', 'mamagüevo', 'güevo', 'pelotudo', 'ramera', 'puta', 'puto', 'diab', 'diablazo', 'diablaso', 'mamagrano', 'mamabicho', 'mierda', 'mielda', 'imbecil', 'imbécil', 'imvecil', 'imvécil', 'inbecil', 'inbécil', 'chupa', 'maricón', 'marica', 'marico', 'homosexual', 'ridiculo', 'ridículo', 'pendejo', 'pariguayo', 'pariguaya', 'parigüayo', 'parigüaya', 'droga', 'drug', 'mamagrano', 'verga', 'pito', 'chinga', 'chingad', 'chingo', 'puticornio', 'rapasumadre', 'rapatumadre', 'chingatumadre', 'cuero', 
        ];

        $RestrictedSites = [
            'cock', 'sex', 'rule34', 'hentai', 'yaoi', 'yuri', 'xnxx', 'porn', 'redtube', 'blacked', 'mofos', 'brazzers', 'fantasyhd', 'xvideos', 'hustlerhd', 'bangbros', 'playboy', 'dipsea', 'xhamster', 'frolicme',  'onlyfans', 'manyvids', 'quinn', 'javhd', 'hentalia', 'xxx', 'creampie', 'felching', 'anal', 'ano', 'voyeur', 'pussy', 'vagina', 'vulva', 'ass', 'fuck', 'suck', 'dick', 'teta', 'glande', 'sacoleche', 'sacaleche','nalga', 'chaturba', 'masturb', 'esperm',  'mevengo', 'osomaduro', 'popola', 'eyacular', 'eyaculo', 'eyacul', 'coito', 'copular', 'fornicar', 'fornicacion', 'seisnueve', 'seinueve', 'miakhalifa', 
        ];

        if (Str::of($value)->lower()->contains($Usernames) && !Str::of($value)->lower()->contains($allowedWords)) {
            return $fail('Este nombre de usuario no está permitido.');
        } else if (Str::of($value)->lower()->contains($badWords)) {
            return $fail('Tu nombre de usuario no puede contener grocerías.');
        } else if (Str::of($value)->lower()->contains($RestrictedSites)) {
            return $fail('Nombres de usuario explícitos no permitidos.');
        } else if (preg_match("/^\d+$/", $value)) {
            return $fail('El nombre de usuario no debe contener sólo números.');
        } else if (preg_match('/^[^a-zA-Z]/', $value)){
            return $fail('Tu nombre de usuario debe empezar con una letra.');
        }
    }
}
