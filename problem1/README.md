# Problem 1: Session Management in PHP

Task: Write a PHP script to:
Start a session.
Store the username in the session.
Retrieve and display the username from the session.
Destroy the session when a logout button is clicked.
Expected Output:
Display the username when logged in.
Display "Session Ended" after logout.

# Solution:

The solution uses session_start, session_unset and session_destroy to manage
cookie based session without need to any database

# Usage

Upload the files to a WEB server, or use the next command on the local
directory

```sh
php -S 0.0.0.0:8000 -t .
```

Then you can open the system using this URL `http://localhost:8000`
