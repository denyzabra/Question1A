# Laravel Anagram Checker

This Laravel project is designed to check whether two strings are anagrams of each other. An anagram is a word or phrase formed by rearranging the letters of a different word or phrase. 
The comparison is case-insensitive, and whitespace is ignored.

## Prerequisites

Before you begin, ensure you have met the following requirements:

- PHP installed on your machine
- Composer installed on your machine
- Git installed on your machine

## Getting Started

1. Clone the repository:

    ```bash
    git clone https://github.com/denyzabra/question1A.git
    ```

2. Navigate to the project directory:

    ```bash
    cd question1A
    ```

3. Install dependencies:

    ```bash
    composer install
    ```

4. Run the Laravel development server:

    ```bash
    php artisan serve
    ```

    The application should now be accessible at [http://localhost:8000](http://localhost:8000).

## Usage

To check if two strings are anagrams, visit the following URL in your web browser:

[http://localhost:8000/check-anagram?str1=Dormitory&str2=dirty%20room](http://localhost:8000/check-anagram?str1=Dormitory&str2=dirty%20room)

Replace `str1` and `str2` with the strings you want to compare.

## Example

- Anagrams: [http://localhost:8000/check-anagram?str1=listen&str2=silent](http://localhost:8000/check-anagram?str1=listen&str2=silent)
- Not Anagrams: [http://localhost:8000/check-anagram?str1=Dormitory&str2=dirty%20room](http://localhost:8000/check-anagram?str1=Dormitory&str2=dirty%20room)


