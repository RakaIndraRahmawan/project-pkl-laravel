# Auth Login Enhancement (Username + Email) - Progress

## Steps
- [x] Step 1: Create migration `add_email_to_users_table`
- [x] Step 2: Update `User` model fillable to include `email`
- [x] Step 3: Update `AuthController::login()` to support username/email detection
- [x] Step 4: Update `login.blade.php` (input `name="login"`, label, errors)
- [x] Step 5: Verify `routes/web.php` admin routes are auth-protected
- [x] Step 6: Run migration
- [x] Step 7: Update `UserFactory` to include `email`
- [x] Step 8: Update `AuthenticationTest` for `login` field
