#!/bin/bash

# Define arrays of controllers and models
controllers=(
  "LiveClassController"
  "AssignmentController"
  "AttendanceController"
  "PerformanceController"
  "NotificationController"
  "SettingController"
  "ProfileController"
  "AdminController"
  "TeacherController"
  "StudentController"
  "EventController"
  "MediaController"
  "GroupController"
  "FeedbackController"
  "ReportController"
  "TaskController"
  "ResourceLinkController"
  "FileUploadController"
  "QualificationProofController"
  "ScheduleController"
  "AssessmentController"
  "EvaluationController"
  "ClassroomController"
  "InvoiceController"
)

models=(
  "Assignment"
  "LiveClass"
  "Attendance"
  "Communication"
  "Report"
  "UserRole"
  "CourseEnrollment"
  "Role"
  "Grade"
  "CourseMaterial"
  "Homework"
  "PerformanceAnalysis"
  "FileUpload"
  "QualificationProof"
  "Schedule"
  "Assessment"
  "Feedback"
  "Notification"
  "Announcement"
  "Event"
  "EventAttendee"
  "MediaGallery"
  "MediaItem"
  "UserInteraction"
  "UserActivityLog"
  "TaskAssignment"
  "UserSetting"
  "StudentGroup"
  "StudentGroupMember"
  "ResourceLink"
)

# Create controllers
echo "Creating controllers..."
for controller in "${controllers[@]}"; do
  ./vendor/bin/sail artisan make:controller $controller
done

# Create models
echo "Creating models..."
for model in "${models[@]}"; do
  ./vendor/bin/sail artisan make:model $model
done

echo "Controllers and models created successfully."
