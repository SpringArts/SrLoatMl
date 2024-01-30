<?php

namespace App\Jobs;

use App\Models\ExamResult;
use App\Models\JapaneseWord;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Auth;

class ExamCheckJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $exam , $userId;
    /**
     * Create a new job instance.
     */
    public function __construct($exam , $userId)
    {
        $this->exam = $exam;
        $this->userId = $userId;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        foreach ($this->exam as $examItem) {
            $word = JapaneseWord::find($examItem['id']);

            $isCorrect = $word->romaji === $examItem['answer'];

            $examResult = new ExamResult();

            $examResult->user_id = $this->userId;
            $examResult->japanese_word_id = $examItem['id'];
            $examResult->is_correct = $isCorrect;

            $examResult->save();
        }
//        info($this->exam);
//        $word = JapaneseWord::find($this->exam->id);
//
//        $isCorrect = $word->romaji === $this->exam->answer;
//
//        $examResult = new ExamResult();
//
//        $examResult->user_id = Auth::id();
//        $examResult->japanese_word_id = $this->exam->id;
//        $examResult->is_correct = $isCorrect;
//
//        $examResult->save();

    }
}
