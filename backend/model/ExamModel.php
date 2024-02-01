<?php
require_once(BASE_DIR . '/model/QuestionModel.php');

class ExamModel
{
    public string $examTitle;
    public $examDate;
    public string $examDescription;
    public $examScore;
    public int $courseId;
    public $examDuration;

    public function __construct($examTitle, $examDate, $examDescription, $examScore, $courseId, $examDuration)
    {
        $this->examTitle = $examTitle;
        $this->examDate = $examDate;
        $this->examDescription = $examDescription;
        $this->examScore = $examScore;
        $this->courseId = $courseId;
        $this->examDuration = $examDuration;
    }
}
