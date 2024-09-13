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
// use App\Http\Controllers\DashboardController;
// use App\Http\Controllers\AuthController;

use App\Http\Controllers\{
    ClassroomController,
    EvaluationController,
    InvoiceController,
    AuthController,
    DashboardController,
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
    // Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/welcome', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
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
    //  With the above routes defined, you can access them using:
        // List Notifications: GET /notifications
        // Create Notification: GET /notifications/create
        // Store Notification: POST /notifications
        // Show Notification: GET /notifications/{id}
        // Edit Notification: GET /notifications/{id}/edit
        // Update Notification: PUT/PATCH /notifications/{id}
        // Destroy Notification: DELETE /notifications/{id}
    // By using Route::resource, Laravel streamlines the process of setting up CRUD operations for your resources, adhering to RESTful conventions.

// Setting routes
Route::get('settings', [SettingController::class, 'index'])->name('settings.index');

// Profile routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');

// Admin Routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('admin/reports/generate', [AdminController::class, 'generateReport'])->name('admin.reports.generate');
});

// Teacher Routes
Route::middleware(['auth', 'role:teacher'])->group(function () {
    Route::get('teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');
});

// Student Routes
Route::middleware(['auth', 'role:student'])->group(function () {
    Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');
});

// Event routes
Route::resource('events', EventController::class);

// Media routes
Route::resource('media-gallery', MediaController::class);

// Group routes
Route::resource('student-groups', GroupController::class);

// Feedback routes
Route::resource('feedback', FeedbackController::class);
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
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






// temporary route for debugging purposes to print out the session data:
Route::get('/debug-session', function () {
    return session()->all();
});










// Final routes

// Admin Routes
Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('reports', ReportController::class);
});

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

// User Routes
Route::get('profile', [UserController::class, 'profile'])->name('user.profile');

// Dashboard Routes 
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');











// Controller related routes
// Attendance Routes
Route::get('attendance', [AttendanceController::class, 'index'])->name('attendance.index');
Route::get('attendance/mark', [AttendanceController::class, 'mark'])->name('attendance.mark');
Route::get('attendance/report', [AttendanceController::class, 'report'])->name('attendance.report');

// Performance Routes
Route::get('performance/analysis', [PerformanceController::class, 'analysis'])->name('performance.analysis');
Route::get('performance/reports', [PerformanceController::class, 'reports'])->name('performance.reports');

// Notification Routes
Route::resource('notifications', NotificationController::class);
// Route::get('notifications/{notification}', [NotificationController::class, 'show'])->name('notifications.show');
Route::get('notifications/{notification_id}/edit', [NotificationController::class, 'edit'])->name('notifications.edit');

// Setting Routes
Route::get('settings', [SettingController::class, 'index'])->name('settings.index');

// Profile Routes
Route::get('profile', [ProfileController::class, 'index'])->name('profile.index');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('reports/generate', [AdminController::class, 'generateReport'])->name('admin.reports.generate');
    Route::resource('events', EventController::class);
    Route::resource('media-gallery', MediaController::class);
    Route::resource('student-groups', GroupController::class);
    Route::resource('reports', ReportController::class);
    Route::resource('task-assignments', TaskController::class);
    Route::resource('resource-links', ResourceLinkController::class);
    Route::resource('file-uploads', FileUploadController::class);
    Route::resource('qualification-proofs', QualificationProofController::class);
    Route::resource('schedules', ScheduleController::class);
    Route::resource('assessments', AssessmentController::class);
    Route::resource('evaluations', EvaluationController::class);
    Route::resource('classrooms', ClassroomController::class);
    Route::resource('invoices', InvoiceController::class);
});

// Teacher Routes
Route::get('teacher/dashboard', [TeacherController::class, 'dashboard'])->name('teacher.dashboard');

// Student Routes
Route::get('student/dashboard', [StudentController::class, 'dashboard'])->name('student.dashboard');




// routes/web.php
Route::get('/faqs', function () {
    return view('modules.faqs');
})->name('faqs');


// routes/web.php
Route::get('courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// routes/web.php
Route::resource('courses', CourseController::class);





