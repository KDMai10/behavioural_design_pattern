<?php
// RECEIVER: does the real work.
class StudentSystem
{
    public function enroll(): void    { echo "Student successfully enrolled." . PHP_EOL; }
    public function unenroll(): void  { echo "Enrollment reversed." . PHP_EOL; }
    public function dropSubject(): void { echo "Subject successfully dropped." . PHP_EOL; }
    public function restoreSubject(): void { echo "Subject restored." . PHP_EOL; }
    public function printRegistration(): void { echo "Registration form printed." . PHP_EOL; }
    public function logout(): void    { echo "Student logged out." . PHP_EOL; }
}
