#!/bin/bash
# Adding new views 

# Create missing directories
mkdir -p resources/views/admin/task-assignments
mkdir -p resources/views/admin/resource-links
mkdir -p resources/views/admin/file-uploads
mkdir -p resources/views/admin/qualification-proofs
mkdir -p resources/views/admin/schedules
mkdir -p resources/views/admin/announcements

# Create missing Blade view files
touch resources/views/admin/task-assignments/index.blade.php
touch resources/views/admin/task-assignments/create.blade.php
touch resources/views/admin/task-assignments/edit.blade.php
touch resources/views/admin/task-assignments/show.blade.php

touch resources/views/admin/resource-links/index.blade.php
touch resources/views/admin/resource-links/create.blade.php
touch resources/views/admin/resource-links/edit.blade.php
touch resources/views/admin/resource-links/show.blade.php

touch resources/views/admin/file-uploads/index.blade.php
touch resources/views/admin/file-uploads/create.blade.php
touch resources/views/admin/file-uploads/edit.blade.php
touch resources/views/admin/file-uploads/show.blade.php

touch resources/views/admin/qualification-proofs/index.blade.php
touch resources/views/admin/qualification-proofs/create.blade.php
touch resources/views/admin/qualification-proofs/edit.blade.php
touch resources/views/admin/qualification-proofs/show.blade.php

touch resources/views/admin/schedules/index.blade.php
touch resources/views/admin/schedules/create.blade.php
touch resources/views/admin/schedules/edit.blade.php
touch resources/views/admin/schedules/show.blade.php

touch resources/views/admin/announcements/index.blade.php
touch resources/views/admin/announcements/create.blade.php
touch resources/views/admin/announcements/edit.blade.php
touch resources/views/admin/announcements/show.blade.php

touch resources/views/modules/assignments/show.blade.php

echo "Missing directories and files created successfully."


# run `chmod +x create_blade_views.sh` to make this file executable 
# To check the files in folder structure run `ls -R resources/views`


