<?php

namespace App\Infrastructure\Helpers;

class PersianSlug
{
    /**
     * Generate a URL-friendly slug from a Persian string
     *
     * @param  string|null  $string  $string  The Persian string to convert
     * @param  string  $separator  The separator to use (default: -)
     * @param  bool  $lowercase  Convert to lowercase (default: true)
     */
    public static function make(?string $string = null, string $separator = '-', bool $lowercase = true): string
    {
        if (! $string) {
            return '';
        }
        // Replace Arabic characters with Persian ones
        $string = self::arabicToPersian($string);

        // Remove all characters except Persian, English letters, numbers, hyphens and whitespace
        $string = preg_replace('/[^\p{L}\p{N}\s-]/u', '', $string);

        // Replace spaces with the separator
        $string = preg_replace('/\s+/', $separator, $string);

        // Remove separators from the beginning and end
        $string = trim($string, $separator);

        // Convert to lowercase if requested (only affects Latin characters)
        if ($lowercase) {
            $string = mb_strtolower($string, 'UTF-8');
        }

        return $string;
    }

    /**
     * Replace Arabic characters with Persian ones
     */
    private static function arabicToPersian(string $string): string
    {
        $arabic = ['ي', 'ك', 'ة', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩', '٠'];
        $persian = ['ی', 'ک', 'ه', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹', '۰'];

        return str_replace($arabic, $persian, $string);
    }
}
