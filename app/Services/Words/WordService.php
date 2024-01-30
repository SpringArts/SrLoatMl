<?php


namespace App\Services\Words;


use App\Models\ExamResult;
use App\Models\JapaneseWord;
use Illuminate\Support\Facades\Auth;

class WordService
{
    public static function fetchAllWords(int $limit, int $page)
    {
        return JapaneseWord::when(request("languageChapterId"), function ($q){
            $chapterId = request("languageChapterId");
            $q->where('language_chapter_id', $chapterId);
        })
            ->when(!self::hasAnsweredQuestions(Auth::id()), function ($q) {
                // If there are exam results, exclude answered words
                $q->whereNotIn('id', function ($subQuery) {
                    $subQuery->select('japanese_word_id')->from('exam_results')->where('user_id', Auth::id());
                });
            })
            ->paginate($limit, ['*'], 'page', $page)
            ->withQueryString();
    }

    public static function hasAnsweredQuestions($userId)
    {
        $answeredQuestionsCount = ExamResult::where('user_id', $userId)->count();
        $totalCount = JapaneseWord::count();
        return $answeredQuestionsCount === $totalCount || $answeredQuestionsCount > $totalCount;
    }
}

//function ($q) {
//    // If there are no exam results, include all words without checking if answered
//},
