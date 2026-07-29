# CMS Setup Task List ✅ COMPLETED

## Step 1: Create Models & Migrations ✅
- [x] `php artisan make:model Homepage -m`
- [x] `php artisan make:model Page -m`

## Step 2: Edit Migration Files ✅
- [x] Edited `create_homepages_table` migration (hero, about, contact sections)
- [x] Edited `create_pages_table` migration (slug, title, image, desc, text)

## Step 3: Run Migrations ✅
- [x] `php artisan migrate` — both tables created successfully

## Step 4: Edit Model (fillable) ✅
- [x] Edited `app/Models/Homepage.php` with 12 fillable fields
- [x] Edited `app/Models/Page.php` with 5 fillable fields

## Step 5: Create Controllers ✅
- [x] Created & populated `Admin/HomepageController` (edit, update with image uploads)
- [x] Created & populated `Admin/PageController` (full CRUD: index, create, store, edit, update, destroy)

## Step 6: Register Admin Routes ✅
- [x] `routes/web.php` — added admin group with auth middleware

## Step 7: Storage Symlink ✅
- [x] `php artisan storage:link` — linked public/storage → storage/app/public

---

# Public Frontend (Landing Page) ✅ COMPLETED

## Step 1: Create FrontController ✅
- [x] Created `app/Http/Controllers/FrontController.php` with `index()` and `showPage($slug)` methods

## Step 2: Register Public Routes ✅
- [x] Updated `routes/web.php` — added `Route::get('/', ...)` and `Route::get('/page/{slug}', ...)` using FrontController

## Step 3: Create Landing Page View ✅
- [x] Replaced `resources/views/welcome.blade.php` with full company profile landing page (Hero, About, Services, Contact sections) + Tailwind CSS

## Step 4: Create Detail Page View ✅
- [x] Created `resources/views/pages/show.blade.php` for detail service/portfolio page

---

# Admin Views (Blade + Tailwind CSS) ✅ COMPLETED

## Step 1: Admin Layout ✅
- [x] Created `resources/views/layouts/admin.blade.php` — clean admin layout with sidebar navigation, flash messages, Tailwind CSS (via Vite)

## Step 2: Homepage Edit View ✅
- [x] Created `resources/views/admin/homepage/edit.blade.php` — form with 3 card sections (Hero, About, Contact & Social Media) with image preview and validation

## Step 3: Pages Management Views ✅
- [x] Created `resources/views/admin/pages/index.blade.php` — table listing all pages with view/edit/delete actions, empty state
- [x] Created `resources/views/admin/pages/create.blade.php` — form to create new page with title, image, desc, text fields
- [x] Created `resources/views/admin/pages/edit.blade.php` — form to edit existing page with image preview and pre-filled values

---

# Fix Login: Email → Username 🔄 IN PROGRESS

## File Edits
- [ ] 1. `app/Http/Requests/Auth/LoginRequest.php` — Ubah email → username
- [ ] 2. `resources/views/auth/login.blade.php` — Ubah input email → username
- [ ] 3. `app/Http/Controllers/Auth/RegisteredUserController.php` — Ubah validasi name+email → username
- [ ] 4. `resources/views/auth/register.blade.php` — Ubah field name+email → username
- [ ] 5. `app/Http/Requests/ProfileUpdateRequest.php` — Ubah validasi name+email → username
- [ ] 6. `resources/views/profile/partials/update-profile-information-form.blade.php` — Ubah field name+email → username
- [ ] 7. Jalankan `php artisan migrate:fresh --seed`
