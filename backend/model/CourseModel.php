<?php

class CourseModel
{
    public string $courseName;
    public string $courseDescription;
    public int $instructorId;
    public int $programId;
    public string $startDate;
    public string $endDate;
    public string $code;

    public string $objective;

    public function __construct($courseName, $courseDescription, $instructorId, $programId, $startDate, $endDate, $code, $objective)
    {
        $this->courseName = $courseName;
        $this->courseDescription = $courseDescription;
        $this->instructorId = $instructorId;
        $this->programId = $programId;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->code = $code;
        $this->objective = $objective;
    }
}
