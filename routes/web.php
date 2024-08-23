<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AdminController;
// use App\Http\Controllers\CourseController;
// use App\Http\Controllers\AssignmentController;
// use App\Http\Controllers\LiveClassController;
// use App\Http\Controllers\AttendanceController;
// use App\Http\Controllers\PerformanceController;
// use App\Http\Controllers\NotificationController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\ReportController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\{
    UserController,
    CourseController,
    LiveClassController,
    AssignmentController,
    AttendanceController,
    PerformanceController,
    NotificationController,
    SettingController,
    ProfileController,
    AdminController,
    TeacherController,
    StudentController,
    EventController,
    MediaController,
    GroupController,
    FeedbackController,
    ReportController,
    TaskController,
    ResourceLinkController,
    FileUploadController,
    QualificationProofController,
    ScheduleController,
    AssessmentController,
    AnnouncementController,
    CommunicationController
};
use App\Http\Controllers\AuthController;

// routes for login, registration, and logout
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('register', [AuthController::class, 'register']);

//Middleware routes:Use the middleware to protect routes based on roles
Route::middleware(['role:admin'])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
});

// Home route
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');

// User routes
Route::resource('users', UserController::class);

// Course routes
Route::resource('courses', CourseController::class);

// Live Class routes
Route::resource('live-classes', LiveClassController::class);

// Assignment routes
Route::resource('assignments', AssignmentController::class);

// Attendance routes
Route::get('attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('attendance/mark', [AttendanceController::class, 'mark'])->name('attendance.mark');
Route::get('attendance/report', [AttendanceController::class, 'report'])->name('attendance.report');

// Performance routes
Route::get('performance/analysis', [PerformanceController::class, 'analysis'])->name('performance.analysis');
Route::get('performance/reports', [PerformanceController::class, 'reports'])->name('performance.reports');

// Notification routes
Route::resource('notifications', NotificationController::class);

// Setting routes
Route::get('settings', [SettingController::class, 'index'])->name('settings.index');

// Profile routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');

// Admin routes
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('admin/reports/generate', [AdminController::class, 'generateReport'])->name('admin.reports.generate');

// Teacher routes
Route::get('teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');

// Student routes
Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');

// Event routes
Route::resource('events', EventController::class);

// Media routes
Route::resource('media-gallery', MediaController::class);

// Group routes
Route::resource('student-groups', GroupController::class);

// Feedback routes
Route::resource('feedback', FeedbackController::class);

// Report routes
Route::resource('reports', ReportController::class);

// Task Assignment routes
Route::resource('task-assignments', TaskController::class);

// Resource Link routes
Route::resource('resource-links', ResourceLinkController::class);

// File Upload routes
Route::resource('file-uploads', FileUploadController::class);

// Qualification Proof routes
Route::resource('qualification-proofs', QualificationProofController::class);

// Schedule routes
Route::resource('schedules', ScheduleController::class);

// Assessment routes
Route::resource('assessments', AssessmentController::class);

// Announcement routes
Route::resource('announcements', AnnouncementController::class);

// Communication routes
Route::resource('communications', CommunicationController::class);

// Final routes

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('reports', ReportController::class);
});

// Course Routes
Route::resource('courses', CourseController::class);

// Assignment Routes
Route::resource('assignments', AssignmentController::class);

// LiveClass Routes
Route::resource('live-classes', LiveClassController::class);

// Attendance Routes
Route::get('attendance/mark', [AttendanceController::class, 'mark'])->name('attendance.mark');
Route::get('attendance/report', [AttendanceController::class, 'report'])->name('attendance.report');

// Performance Routes
Route::get('performance/analysis', [PerformanceController::class, 'analysis'])->name('performance.analysis');
Route::get('performance/reports', [PerformanceController::class, 'reports'])->name('performance.reports');

// Notification Routes
Route::resource('notifications', NotificationController::class);

// User Routes
Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

// Dashboard Routes 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});
