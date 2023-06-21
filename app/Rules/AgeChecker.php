<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class AgeChecker implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if ($value >= 5 and $value <=26) {
            $fail("Time to rise.");
        } elseif ($value >= 26 and $value <=50) {
            $fail("Time to work");
        } else {
            $fail("You are too old");
        }
    }
}
