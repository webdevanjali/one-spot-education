#!/bin/bash

# Create directories
mkdir -p resources/views/layouts
mkdir -p resources/views/partials/navigation
mkdir -p resources/views/partials
mkdir -p resources/views/modules/courses
mkdir -p resources/views/modules/assignments
mkdir -p resources/views/modules/live_classes
mkdir -p resources/views/modules/attendance
mkdir -p resources/views/modules/performance
mkdir -p resources/views/modules/notifications
mkdir -p resources/views/modules/settings
mkdir -p resources/views/modules/profile
mkdir -p resources/views/admin/users
mkdir -p resources/views/admin/reports
mkdir -p resources/views/teacher
mkdir -p resources/views/student

# Create Blade view files
touch resources/views/layouts/app.blade.php
touch resources/views/layouts/admin.blade.php
touch resources/views/layouts/teacher.blade.php
touch resources/views/layouts/student.blade.php
touch resources/views/layouts/guest.blade.php

touch resources/views/partials/navigation/admin_nav.blade.php
touch resources/views/partials/navigation/teacher_nav.blade.php
touch resources/views/partials/navigation/student_nav.blade.php
touch resources/views/partials/navigation/guest_nav.blade.php

touch resources/views/partials/footer.blade.php
touch resources/views/partials/messages.blade.php

touch resources/views/modules/courses/index.blade.php
touch resources/views/modules/courses/create.blade.php
touch resources/views/modules/courses/edit.blade.php
touch resources/views/modules/courses/show.blade.php

touch resources/views/modules/assignments/index.blade.php
touch resources/views/modules/assignments/create.blade.php
touch resources/views/modules/assignments/edit.blade.php
touch resources/views/modules/assignments/show.blade.php

touch resources/views/modules/live_classes/index.blade.php
touch resources/views/modules/live_classes/create.blade.php
touch resources/views/modules/live_classes/edit.blade.php
touch resources/views/modules/live_classes/show.blade.php

touch resources/views/modules/attendance/index.blade.php
touch resources/views/modules/attendance/mark.blade.php
touch resources/views/modules/attendance/report.blade.php

touch resources/views/modules/performance/analysis.blade.php
touch resources/views/modules/performance/reports.blade.php

touch resources/views/modules/notifications/index.blade.php

touch resources/views/modules/settings/index.blade.php

touch resources/views/modules/profile/index.blade.php

touch resources/views/admin/dashboard.blade.php
touch resources/views/admin/users/index.blade.php
touch resources/views/admin/users/create.blade.php
touch resources/views/admin/users/edit.blade.php
touch resources/views/admin/reports/index.blade.php
touch resources/views/admin/reports/generate.blade.php

touch resources/views/teacher/dashboard.blade.php

touch resources/views/student/dashboard.blade.php

touch resources/views/home.blade.php
touch resources/views/welcome.blade.php

echo "Directories and files created successfully."

# run `chmod +x create_blade_views.sh` to make this file executable 
# To check the created files in folder structure run `ls -R resources/views`




: '
below is the expected output of ls -R resources/views
resources/views:
admin  home.blade.php  modules   student  welcome.blade.php
auth   layouts         partials  teacher

resources/views/admin:
dashboard.blade.php  reports  users

resources/views/admin/reports:
generate.blade.php  index.blade.php

resources/views/admin/users:
create.blade.php  edit.blade.php  index.blade.php

resources/views/auth:
login.blade.php  register.blade.php

resources/views/layouts:
admin.blade.php  guest.blade.php    teacher.blade.php
app.blade.php    student.blade.php

resources/views/modules:
assignments  courses       notifications  profile
attendance   live_classes  performance    settings

resources/views/modules/assignments:
create.blade.php  edit.blade.php  index.blade.php  show.blade.php

resources/views/modules/attendance:
index.blade.php  mark.blade.php  report.blade.php

resources/views/modules/courses:
create.blade.php  edit.blade.php  index.blade.php  show.blade.php

resources/views/modules/live_classes:
create.blade.php  edit.blade.php  index.blade.php  show.blade.php

resources/views/modules/notifications:
index.blade.php

resources/views/modules/performance:
analysis.blade.php  reports.blade.php

resources/views/modules/profile:
index.blade.php

resources/views/modules/settings:
index.blade.php

resources/views/partials:
footer.blade.php  messages.blade.php  navigation

resources/views/partials/navigation:
admin_nav.blade.php  student_nav.blade.php
guest_nav.blade.php  teacher_nav.blade.php

resources/views/student:
dashboard.blade.php

resources/views/teacher:
dashboard.blade.php

'




: ' Below are some tracked  async changes
    resources/views/admin/reports
        resources/views/admin/reports/create.blade.php renamed to resources/views/admin/reports/generate.blade.php
        missing/added resources/views/admin/reports/edit.blade.php
        missing/added resources/views/admin/reports/show.blade.php

    resources/views/admin/task-assignments
        index.blade.php
        edit.blade.php
        create.blade.php
        show.blade.php
'