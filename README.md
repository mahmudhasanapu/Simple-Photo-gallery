## 🔄 Workflow

User (Browser - PHP Frontend)
        |
        v
[ Open index.php ]
        |
        v
Gallery Page (Loads images)
        |
        v
Database (Fetch image records) + Uploads Folder (Fetch image files)

------------------------------------------

Upload Image:
User selects file in form
        |
        v
PHP Script (upload.php)
        |
        v
- Validates file (type, size)
- Moves file to /uploads
- Saves metadata in Database

------------------------------------------

View Images:
User opens gallery
        |
        v
PHP fetches image list from Database
        |
        v
Displays thumbnails
        |
        v
Click thumbnail -> Full image

------------------------------------------

Delete Image:
User clicks "Delete"
        |
        v
PHP Script (delete.php)
        |
        v
- Removes file from /uploads
- Deletes record from Database

------------------------------------------

Result:
- Users can upload, view, and delete photos
- Files stay in /uploads
- Database tracks image info (filename, upload time)
